<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Database\DBCardController;
use App\Http\Controllers\Database\DBCargoPack;
use App\Http\Controllers\Database\DBAdressController;

//CargoPacks = Orders
class OrderController extends Controller 
{
	public function getOrderDetail(Request $request , $order_id){
		$userData = Auth::user();
		$pack = DBCargoPack::getPack($order_id);

		return view('user.profile.order.orderDetailPage',['userData'=>$userData , 'cargoPack'=> $pack ]);
	}
}