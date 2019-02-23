<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Resources\User as UserResource;
use App\Http\Resources\LoginingUser as LoginingUser;

class UserController extends Controller
{
        public function register(Request $request){
        	$userData = new UserResource($request); 
        	
        	return $userData;
        }

        public function login(Request $request){
        	$userData = new LoginingUser($request); 
        	return $userData;
        }
}
