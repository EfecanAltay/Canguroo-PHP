<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Database\DBCardController;
use App\Http\Controllers\Database\DBCargoPack;
use App\Http\Controllers\Database\DBStoreController;


class StoreController extends Controller
{
	public function getStore(Request $request ,$storeId){
		$user = Auth::user();

		$store = DBStoreController::getStore($storeId);
		$products = DBStoreController::getStoreProducts($storeId);
		$store_owner = DBStoreController::getOwner($storeId);

		return view("store.storePage",["userData"=> $user ,"store" => $store,"store_owner" => $store_owner,"products" => $products]);
	}

}