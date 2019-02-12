<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('user.profile',["i"=> 0]);
    }
    public function adress(Request $request)
    {
        return view('user.profile' , ["i"=> 3]);
    }
 	public function orders(Request $request)
    {
        return view('user.profile',["i"=> 2]);
    }
    public function settings(Request $request)
    {
        return view('user.profile',["i"=> 4]);
    }
    public function coupons(Request $request)
    {
        return view('user.profile',["i"=> 1]);
    }
    public function card(Request $request)
    {
        return view('user.profile',["i"=> 0]);
    }
}
