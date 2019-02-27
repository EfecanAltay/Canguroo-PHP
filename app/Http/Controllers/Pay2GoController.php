<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Database\DBCardController;
use App\Http\Controllers\Database\DBCargoPack;
use App\Http\Controllers\Database\DBAdressController;


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
        $card = DBCardController::getCard();
        $adressList = DBAdressController::getAdresses();
        
        return  $this->ControlAuth(view('pay2go.pay2Go',[ "tag"=> "card" , "card" => $card ,"adressList" => $adressList ]));
  }
  public function goPayment(Request $request)
  {
        $card = DBCardController::getCard();
        
        return  $this->ControlAuth(view('pay2go.pay2Go',[ "tag"=> "payment" , "card" => $card ]));
  }

  // when user payed product cost , start this function ... 
  public function goSuccess(Request $request)
  {
        $user = Auth::user();
        //$card = $user->card()->get();
        $card = DBCardController::getCard();
        $cargoPack = DBCargoPack::createPack();
        
        //Create CargoPack();

        return  $this->ControlAuth(view('pay2go.pay2Go',[ "tag"=> "success" , "card" => $card ]));
  }
}
