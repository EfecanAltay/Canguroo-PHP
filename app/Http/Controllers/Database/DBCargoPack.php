<?php
namespace App\Http\Controllers\Database;

use Illuminate\Support\Facades\Auth;

use App\CargoPack;
use App\UserInfo;
use App\Package;

class DBCargoPack   // Order Control
{
    public static function createPack(){
     	
    	$user = Auth::user();
    	$packages = DBCardController::getPackages()->all();

    	$cargoPack = new CargoPack(['status' => 'waiting success' , 'user_id' => $user->id]);
		$cargoPack->save();

		foreach ($packages as $package) 
		{
        	$pack = new Package([
        			"amount" => $package->amount,
        			"pack_cost" => $package->pack_cost,
					"product_id" => $package->product_id,
					"product_title"=>$package->product_title,
					"product_props"=>$package->product_props
        		]);
            $package->delete();
        	$cargoPack->packages()->save($pack);
        }

        $userinfo = new UserInfo(['name' => $user->name ,'surname' => $user->surname ]);
        $cargoPack->userinfo()->save($userinfo);
        return $cargoPack;
    }

    public static function getPacks(){
        $user = Auth::user();
        $packages = CargoPack::where("user_id","=",$user->id)->get();
        return $packages;
    }

    public static function getPack($cargo_id){
        $user = Auth::user();
        $packages = CargoPack::where("user_id","=",$user->id)->find($cargo_id);

        return $packages;
    }

}