<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return  $this->ControlAuth(view('user.profile',["i"=> 0 ]));
    }
    public function card(Request $request)
    {
        return $this->ControlAuth(view('user.profile',["i"=> 0 ]));
    }
    public function coupons(Request $request)
    {
        return $this->ControlAuth(view('user.profile',["i"=> 1 ]));
    }
    public function orders(Request $request)
    {
        return $this->ControlAuth(view('user.profile',["i"=> 2 ]));
    }
    public function adress(Request $request)
    {
        return $this->ControlAuth(view('user.profile',["i"=> 3 ]));
    }
    public function settings(Request $request)
    {
        return $this->ControlAuth(view('user.profile',["i"=> 4 ,"updated"=> 0]));
    }
    public function updateUserData(Request $request){
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->phone = $request->input('phone');
        $user->birthday = $request->input('birthday');
        $user->gender = $request->input('gender');
        $user->save();
        return $this->ControlAuth(view('user.profile',["i"=> 4 ,"updated"=> 1]));
    }
}