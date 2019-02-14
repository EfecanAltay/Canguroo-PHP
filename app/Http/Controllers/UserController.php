<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Adresses;
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
        return  $this->ControlAuth(view('user.profile',["tag"=> "card" ]));
    }
    public function card(Request $request)
    {
        return $this->ControlAuth(view('user.profile',["tag"=> "card" ]));
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
        $adress = array('title' => "Home" , 'adress' => 'vıdı vıdı mah. Akşemsettin cad. no 10 kat 2', 'postcode' => "34882");
        $adress2 = array('title' => "Office" , 'adress' => 'vıdı vıdı st. Akşemsettin cad. no 10 kat 2', 'postcode' => "34882");
        $adress3 = array('title' => "MyDear's home" , 'adress' => 'vıdı vıdı mah. Akşemsettin cad. no 10 kat 2', 'postcode' => "34882");
        $adress4 = array('title' => "MyDear's home" , 'adress' => 'vıdı vıdı mah. Akşemsettin cad. no 10 kat 2', 'postcode' => "34882" ,"");
        $adressList = array();
        //array_push($adressList, $adress, $adress2 , $adress3 , $adress4);
        return $this->ControlAuth(view('user.profile',["tag"=> "adresses","adressList" => $adressList ]));
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
    public function addAdress(Request $request){
      $user = Auth::user();
      $adress = new Adresses();
      $adress->AddAdress();
      $adress->save();
      $adress->user()->attach($user);
      return redirect('user/profile/adress');
    }
}