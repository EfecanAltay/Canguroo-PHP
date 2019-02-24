<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Database\DBAdressController;

class AdressController extends Controller
{  


    public function ControlAuth($returningView){
        if(Auth::check()){
            $userData = Auth::user();
            $returningView->with('userData' , $userData); 
            return $returningView;
        }
        return redirect('/');
    }
	public function addAdress(Request $request){
      
		if ($request->isMethod('post')) {

	      	$title = $request->input('title');
	      	$adress = $request->input('adress');
	      	$post_code = $request->input('post_code');

	        DBAdressController::AddAdress($title,$adress,$post_code);
	      	
            return redirect('user/profile/adress/');

		}else if($request->isMethod('get')){
			return $this->ControlAuth(view('user.profile',
				[
					"tag"=> "adresses",
					"adressTag" => "addAdresses",
					"adressList" => ""
				]));
		}else{

		}
    }

    public function getAdress(Request $request){
        $adress_id = $request->input('adress_id');

        $adress = DBAdressController::getAdress($adress_id );
     
        return $this->ControlAuth(view('user.profile',
                [
                    "tag" => "adresses",
                    "adressTag" => "updateAdresses",
                    "adressList" => $adress
                ]));
    }

    public function deleteAdress(Request $request){
        $adress_id = $request->input('adress_id');
        
        DBAdressController::deleteAdress($adress_id);
        
        $adressList = DBAdressController::getAdresses();
     
        return $this->ControlAuth(view('user.profile',
            [
                "tag" => "adresses",
                "adressTag" => "getAdresses",
                "adressList" => $adressList 
            ]));
    }
    
    public function updateAdress(Request $request){
        
        $adress_id = $request->input('adress_id');

        $updatedArray = array(
                'title' => $request->input('title'),
                'adress_text' => $request->input('adress'),
                'post_code' => $request->input('post_code')
            );

        DBAdressController::updateAdress($adress_id,$updatedArray);
        
        $adressList = DBAdressController::getAdresses();
     
        return $this->ControlAuth(view('user.profile',
            [
                "tag" => "adresses",
                "adressTag" => "getAdresses",
                "adressList" => $adressList 
            ]));
    }
}
