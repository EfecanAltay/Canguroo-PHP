<?php
namespace App\Http\Controllers\Database;

use Illuminate\Support\Facades\Auth;

use App\Store;
use App\User;

class DBStoreController
{
	public static function getStore($store_id){

		$store = Store::find($store_id);
		if($store !== null)
			return $store->first();
		return null;
	}

	public static function getStoreProducts($store_id){

		$store = DBStoreController::getStore($store_id);

		if($store !== null)
		{
			$products = DBProductController::getProductWithStoreId($store_id);
			if($products !== null)
				return $products;
		}
		return null;
	}
	public static function getOwner($store_id){

		$store = Store::find($store_id);
		if($store !== null)
		{
			$user = User::find($store->owner);
			if($user !== null)
				return $user;
		}
		return null;
	}	
}