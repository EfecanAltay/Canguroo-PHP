<?php

namespace App\Http\Controllers\Database;

use Illuminate\Support\Facades\Auth;

use App\Adress;
use App\User;
use App\Package;
use App\Product;

class DBCardController 
{

    public static function haveCard(User $user){
    	if($user->card() !== null )
    	{
    		return true;
    	}
    	return false ;
    }
    public static function controlCard(){

    	$user = Auth::user();
    	$haveCard = DBCardController::haveCard($user);
    	if(!$haveCard){
    		return DBCardController::createCard($user);
    	}
    	return $user->card()->get();
    }
    public static function getCard(){
        return DBCardController::controlCard();
    }
    public static function createCard(User $user){
    	 $card = new Card(["total_cost" => 0]);
         $user->card()->save($card);
         return $user->card()->get();
    }
    public static function createPackage($amount,$product_id,$props){

        $product = Product::find($product_id);
        //paket fiyatının hesabını yap..
        $pack_cost = $product->cost * $amount;

        $package = new Package
            ([
                "amount" => $amount,
                "pack_cost" => $pack_cost,
                "product_id" => $product->id,
                "product_title" => $product->title,
                "product_props" => $props
            ]);
        return $package;
    }
 	public static function getPackages(){
        $card = DBCardController::getCard();
        $packages = $card->packages();
        if($packages === null)
        	return Array();
        return $packages;
    }
    public static function addPackageToCard($package , $props){

        $user = Auth::user();
        $card = DBCardController::getCard();

        $packages = $card->packages()->where("product_id" ,"=", $package->product_id);
        $pack = DBCardController::isHaveSamePackage($packages , $props);
            
        if($pack !== null )
            {
                $pack->amount += $package->amount;
                $pack->pack_cost += $package->pack_cost;  
            }
            else
                $pack = $package;

        $card->packages()->save($pack);
        $card->total_cost = DBCardController::calculateTotalCost($card);
        $user->card()->save($card);

    }
    public static function deletePackageToCard($packages_id){

        $card = DBCardController::getCard();
        
        $user = Auth::user();
            
        if($packages !== null){
            foreach ($packages as $pack) {
                $pack->delete();
            }
        }

        $card->total_cost = DBCardController::calculateTotalCost($card);
        $user->card()->save($card);
    }
    private static function isHaveSamePackage($packages , $props){

        foreach ($packages as $pack) {

            $pack_props = $pack->product_props;
            if($pack_props !== null && $pack_props === $props){
                return $pack;
            }
        }
        return null;
    }
    private static function calculateTotalCost($card){
        
        $total_cost = 0;
        $packages = $card->packages()->all();
        foreach ($packages as $package) {
             $total_cost += $package->pack_cost;
         } 
        return $total_cost;
    }

}