<?php

namespace App\Http\Controllers;
use  Illuminate\Support\Facades\Validator;
use  Illuminate\Support\Facades\Input;
use  Illuminate\Support\Facades\Redirect;
use  Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class registerController extends Controller
{
	 /// GET Register -----------------------------
    function GetRegister(){
		return view('layouts.register');
    }

     /// POST Register -----------------------------
    function PostRegister(Request $request){
		$isEmailError = false;
		$isPasswordError = false;

		if(isset($request)){
			$email = $request->input('email');
			$pass = $request->input('password1');

			$rules = array(
			    'email'    => 'required|email', 
			    'password1' => 'required|alphaNum|min:8',
			  	'password2' => 'required|alphaNum|min:8|in:'.$pass
			);

			$validator = Validator::make(Input::all(), $rules);

			if ($validator->fails()) {
			    return Redirect::to('register')
			        ->withErrors($validator) 
			        ->withInput(Input::except('password2'));
			} else {
			    
			    $userdata = array(
			        'email'     => Input::get('email'),
			        'password'  => Input::get('password')
			    );
				
				if($email === "admin@canguroo.com"){
					return Redirect::to('/register')
			    			->withErrors(array('registerMessage' => "Bu mail adresi Zaten Kayıtlı !"));
				}
				//userToken --------
				Cookie::queue('userToken', "123456", 45000);
			    return Redirect::to('/');
			    ///---------------------------------------------------
			}

		}else
			return "Dont req";
	    }
}
