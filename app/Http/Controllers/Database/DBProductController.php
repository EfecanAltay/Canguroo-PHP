<?php
namespace App\Http\Controllers\Database;

use Illuminate\Support\Facades\Auth;

use App\Store;
use App\Product;

class DBProductController
{
	public static function getProduct($product_id){
		$product = Product::find($product_id);
		if($product !== null)
			return $product->first();
		return null;
	}
	public static function getProductWithStoreId($store_id){

		$products = Product::where("store_id" , "=" , $store_id);
		if($products !== null)
			return $products->get();
		return array();
	}
}