<?php

namespace App\Http\Controllers;
use  Illuminate\Support\Facades\Validator;
use  Illuminate\Support\Facades\Input;
use  Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class loginController extends Controller
{
    
    /// GET Login -----------------------------
    function GetLogin(){
    	    return view('layouts.login');
    		//return view('auth.login');
    }

    /// POST Login------------------------------
    function PostLogin(Request $request){

    	$isEmailError = false;
		$isPasswordError = false;

		if(isset($request)){
			$email = $request->input('email');

			$rules = array(
			    'email'    => 'required|email', 
			    'password' => 'required|alphaNum|min:8' 
			);

			$validator = Validator::make(Input::all(), $rules);

			if ($validator->fails()) {
			    return Redirect::to('login')
			        ->withErrors($validator) 
			        ->withInput(Input::except('password')); 
			} else {
			    
			    $userdata = array(
			        'email'     => Input::get('email'),
			        'password'  => Input::get('password')
			    );

			    // !!! Giriş Yaparsa Kullanıcı Sayfasına Yönlendir---
			    if($userdata['email'] == "admin@canguroo.com" &&
			    $userdata['password'] == "adminadmin" ) 
			    	return Redirect::to('/')
			    			->withErrors(array('loginSuccessMessage' => "Giriş başarılı"));
			    ///---------------------------------------------------
			    $rules = array(
			    'isEmailError'    => 'false', 
			    'isPassword' => 'false' 
				);

			    return Redirect::to('login')
			    		->withErrors(array('loginMessage' => "Mail Adresi veya Şifre Hatalı"));

			}

		}else
			return ;
	    }
}
