<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Pay2GoController extends Controller
{
  public function index(Request $request)
  {
    return $this->goCard($request);
  }
  public function ControlAuth($returningView){
        if(Auth::check()){
            $userData = Auth::user();
            $returningView->with('userData' , $userData); 
            return $returningView;
        }
        return redirect('/');
  }
  public function goCard(Request $request)
  {
        $user = Auth::user();
        $card = $user->card()->get();
        
        return  $this->ControlAuth(view('pay2go.pay2Go',[ "tag"=> "card" , "card" => $card ]));
  }
  public function goPayment(Request $request)
  {
        $user = Auth::user();
        $card = $user->card()->get();
        
        return  $this->ControlAuth(view('pay2go.pay2Go',[ "tag"=> "payment" , "card" => $card ]));
  }
  public function goSuccess(Request $request)
  {
        $user = Auth::user();
        $card = $user->card()->get();
        
        return  $this->ControlAuth(view('pay2go.pay2Go',[ "tag"=> "success" , "card" => $card ]));
  }
}
