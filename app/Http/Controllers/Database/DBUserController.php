<?php
namespace App\Http\Controllers\Database;

use Illuminate\Support\Facades\Auth;

use App\User;
use App\Role;

class DBUserController 
{
    public static function createUser($userData){

       $user = User::create([
              'name' => $userData['name'],
              'surname' => $userData['surname'],
              'email'    => $userData['email'],
              'password' => bcrypt($userData['password'])
            ]);

       	$user
            ->roles()
            	->attach(Role::where('name', 'employee')->first());

        return $user ;

    }
    public static function DeleteUser(){
        //delete user
    }

    //Update user data 
 	public static function updateUserInfo($userInfo){
 		$user = Auth::user();

        $user->name = $userInfo["name"];
     	$user->surname = $userInfo["surname"];
        $user->phone = $userInfo["phone"];
        $user->birthday = $userInfo["birthday"];
        $user->gender = $userInfo["gender"];
        $user->save();

    }
       
}