<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\UserController ;
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
  public function getCardPage(Request $request)
  {
        $user = Auth::user();
        $card = $user->card()->get();
        
        return  $this->ControlAuth(view('pay2go.pay2Go',[ "tag"=> "card" , "card" => $card ]));
  }
	public function DeleteProductOnCard(Request $request , $package_id){
		
		if ($request->isMethod('get')) {
			echo "product've deleted on your card";
			$user = Auth::user();
			$card = $user->card()->get();

			
        	if($card !== null && $card->packages() !== null){
           		$pack = $card->packages()->find($package_id);
           		if($pack !== null)
           			$pack->delete();
           	}

           	$card->total_cost = $this->calculateTotalCost($card);
	        $user->card()->save($card);
	        
	        return redirect('/user/profile/card');
    	}

	}
	private function calculateTotalCost($card){
        
        $total_cost = 0;
        $packages = $card->packages()->all();
        foreach ($packages as $package) {
             $total_cost += $package->pack_cost;
         } 
        return $total_cost;
    }

}