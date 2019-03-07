<?php
namespace App\Http\Controllers\Database;

use Illuminate\Support\Facades\Auth;

use App\Store;
use App\Product;
use App\SubCategori;

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

	public static function createProduct($title,$subtitle,$cost,$sub_categori_id,$store_id,$props){		
		$sub_categori = SubCategori::find($sub_categori_id)->first();
		
		if($sub_categori == null)
			return null ;
		$store = Store::find($store_id)->first();
		if($store == null)
			return null ;

		$product = new Product(
			[
				'title' => $title,
				'subtitle' => $subtitle,
				'cost' => $cost,
				'store_id' => $store_id,
				'props' => $props
			]);
		$product->save();
		$sub_categori->product()->save($product);
		$store->products()->save($product);

		return $product->_id;
	}
}