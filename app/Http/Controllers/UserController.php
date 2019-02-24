<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Database\DBCargoPack;
use App\Adress;
use App\Product;
use App\Store;


class UserController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public $userData = null ;

    public function ControlAuth($returningView){
        if(Auth::check()){
            $userData = Auth::user();
            $returningView->with('userData' , $userData); 
            return $returningView;
        }
        return redirect('/');
    }
    public function index(Request $request)
    {
        /*
        //$store = new Store(["name" => "my shop store"]);
        //$store->save();
        $product = new Product(
            [
                "title" => "LG Android",
                "subtitle" =>"lg android telefon muhteşem fiyatla",
                "cost" => "2.000"
            ]);
        //$product->save();

        //$storeclass = Store::where("name","my shop store")->first();
        //$storeclass->products()->save($product);
        */
            
        return $this->orders($request);
    }
    public function orders(Request $request)
    {
        $cargoPacks = DBCargoPack::getPacks();

        return $this->ControlAuth(view('user.profile',["tag"=> "orders","cargoPacks" => $cargoPacks]));
    }
    public function coupons(Request $request)
    {
        return $this->ControlAuth(view('user.profile',["tag"=> "coupons" ]));
    }
    public function adress(Request $request)
    {
        $user = Auth::user();
        $adressList = $user->adresses()->get();
        
        //$adressList = array();
        //array_push($adressList, $adress, $adress2 , $adress3 , $adress4);
        return $this->ControlAuth(view('user.profile',
            [
                "tag" => "adresses",
                "adressTag" => "getAdresses",
                "adressList" => $adressList 
            ]));
    }
    public function settings(Request $request)
    {
        return $this->ControlAuth(view('user.profile',["tag"=> "settings" ,"updated"=> 0]));
    }
    public function updateUserData(Request $request){

        $userDataArray = array(
           "name" => $request->input('name'),
           "surname" =>$request->input('surname'),
           "phone" => $request->input('phone'),
           "birthday" => $request->input('birthday'),
           "gender" => $request->input('gender')
        );

        DBUserController::updateUserInfo($userDataArray);

        return $this->ControlAuth(view('user.profile',["tag"=> "settings" ,"updated"=> 1]));
    }
}