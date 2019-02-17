<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use  Illuminate\Support\Facades\Log;
use  Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;


class homePageController extends Controller
{
    
    function GetHomePage(){
      	//Control UserLogin Cookie ;
    	//Cookie::queue('online_payment_id', "1", 15);
    	$userToken = Cookie::get('userToken');
        $userData = null;
    	//getUserName
    	if(isset($userToken)){
            //$users = DB::collection('users')->get();

            $users = \DB::connection('mongodb')->collection('users')->get();
            $userData = $users->first();
            //$users = DB::collection('users')->get();
            //$userData = DB::collection('users')->where('name', 'Efecan')->first();
    	}
    	return view('welcome' , ['userData' => $userData]);
    }   
      public function index(Request $request)
      {
        $request->user()->authorizeRoles(['employee', 'manager']);
        return view('/');
      }
}
