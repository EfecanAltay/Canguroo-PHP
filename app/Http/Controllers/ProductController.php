<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Product ;
class ProductController extends Controller
{
	//name : getProductDetail
    public function getProductDetail(Request $request , $product_id){
    	$userData = Auth::user();
    	$product = Product::find($product_id);

    	return view("product.productDetailPage" , ["userData"=>$userData ,"product" => $product]);
    }
}
