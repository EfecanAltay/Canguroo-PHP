<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

use App\Product;
use App\SubCategori;
use App\Categori;
use App\Http\Controllers\Database\DBCategoriController;
use App\Http\Controllers\Database\DBProductController;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //$request->user()->authorizeRoles(['employee', 'manager']);
        $userData = null ;
        if(Auth::check()){
            $userData = Auth::user();
        }
    
        //Ürünler listesi
        $productList = Product::all();

        return view('welcome',['userData' => $userData , "products" => $productList]);
    }

  /*
  public function someAdminStuff(Request $request)
  {
    $request->user()->authorizeRoles('manager');
    return view(‘some.view’);
  }
  */
}
