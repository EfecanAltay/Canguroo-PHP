<?php
namespace App\Http\Controllers\Database;

use Illuminate\Support\Facades\Auth;

use App\CargoPack;
use App\Package;
use App\Product;



class DBOrderController //CargoPack
{
	public static function getOrderList(){
		$user = Auth::user();
		$CargoPacks = CargoPack::where();
	}

}