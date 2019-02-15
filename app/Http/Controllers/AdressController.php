<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Adress;

class AdressController extends Controller
{  


    public function ControlAuth($returningView){
        if(Auth::check()){
            $user = Auth::user();
            $userData = array(
                'name' => $user->name,
                'surname' => $user->surname,
                'email' => $user->email,
                'gender' => $user->gender,
                'birthday' => $user->birthday,
                'phone' => $user->phone,
                'id' => $user->id );
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

	      	$adress = new Adress(['title' => $title ,'adress' => $adress , 'post_code' => $post_code ]);
	      
	      	$user = Auth::user();
	      	$useradresses = $user->adresses();
	      	if(isset($useradresses))
	      	{
	      	  $useradresses->save($adress);
	      	}
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
        $user = Auth::user();

        $adress = $user->adresses()->find($adress_id);
     
        return $this->ControlAuth(view('user.profile',
                [
                    "tag" => "adresses",
                    "adressTag" => "updateAdresses",
                    "adressList" => $adress
                ]));
    }
    public function deleteAdress(Request $request){
        $adress_id = $request->input('adress_id');
        $user = Auth::user();

        $adress = $user->adresses()->find($adress_id);
        $adress->delete();

        $adressList = $user->adresses()->get();
     
        return $this->ControlAuth(view('user.profile',
            [
                "tag" => "adresses",
                "adressTag" => "getAdresses",
                "adressList" => $adressList 
            ]));
    }
    public function updateAdress(Request $request){
        $adress_id = $request->input('adress_id');
        $title = $request->input('title');
        $adress_text = $request->input('adress');
        $post_code = $request->input('post_code');

        $user = Auth::user();
        $adress = $user->adresses()->find($adress_id);

        $adress->title = $title;
        $adress->adress = $adress_text;
        $adress->post_code = $post_code;
        $adress->save();

        $adressList = $user->adresses()->get();
     
        return $this->ControlAuth(view('user.profile',
            [
                "tag" => "adresses",
                "adressTag" => "getAdresses",
                "adressList" => $adressList 
            ]));
    }
}
