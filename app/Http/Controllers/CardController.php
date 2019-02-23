<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\UserController ;
use App\Http\Controllers\Database\DBCardController;
class CardController extends Controller
{ 
  public function index(Request $request)
  {
    return $this->getCardPage($request);
  }
  public function ControlAuth($returningView){
        if(Auth::check()){
            $userData = Auth::user();
            $returningView->with('userData' , $userData); 
            return $returningView;
        }
        return redirect('/');
  }
	public function DeleteProductOnCard(Request $request , $package_id){
		
		if ($request->isMethod('get')) {
         //Delete on Card ...
         DBCardController::deletePackageToCard($package_id);

			   return redirect('/user/profile/card');
    	}

	}
}