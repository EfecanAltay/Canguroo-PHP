<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            $user = Auth::user();
            $userData = array(
                'name' => $user->name,
                'surname' => $user->surname,
                'email' => $user->email,
                'gender' => $user->gender,
                'birthday' => $user->birthday,
                'phone' => $user->phone,
                'id' => $user->id );
            $returningView->with('userData' , $userData); 
            return $returningView;
        }
        return redirect('/');
    }
    public function index(Request $request)
    {
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
        return $this->card($request);
    }
    public function card(Request $request)
    {
        //$user = Auth::user();
        //$productList = $user->card();
        $product = new Product(["title"=>"asd","desc"=>"abc abc"]);
        $productList = array($product);

        return  $this->ControlAuth(view('user.profile',["tag"=> "card" , "productList" => $productList]));
    }
    public function coupons(Request $request)
    {
        return $this->ControlAuth(view('user.profile',["tag"=> "coupons" ]));
    }
    public function orders(Request $request)
    {
        return $this->ControlAuth(view('user.profile',["tag"=> "orders" ]));
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
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->phone = $request->input('phone');
        $user->birthday = $request->input('birthday');
        $user->gender = $request->input('gender');
        $user->save();
        return $this->ControlAuth(view('user.profile',["tag"=> "settings" ,"updated"=> 1]));
    }
}