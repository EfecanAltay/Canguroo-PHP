<?php


namespace App\Http\Controllers\Database;

use Illuminate\Support\Facades\Auth;

use App\Adress;

class DBAdressController 
{
    public static function AddAdress($title , $adress , $post_code){

        $adress = new Adress(['title' => $title ,'adress' => $adress , 'post_code' => $post_code ]);
          
        $user = Auth::user();
        $useradresses = $user->adresses();

        if(isset($useradresses))
        {
              $useradresses->save($adress);
        }
    }
    public static function getAdress($adress_id){

        $user = Auth::user();
        return $user->adresses()->find($adress_id);   
    }
    
    public static function getAdresses(){
        $user = Auth::user();
        return $user->adresses()->all();
    }

    public static function updateAdress($adress_id , $updatedArray){
        $user = Auth::user();
        $adress = $user->adresses()->find($adress_id);

        $adress->title = $updatedArray['title'];
        $adress->adress = $updatedArray['adress_text'];
        $adress->post_code = $updatedArray['post_code'];
        $adress->save();
    }
    public static function deleteAdress($adress_id){
        $user = Auth::user();

        $adress = $user->adresses()->find($adress_id);
        $adress->delete();
    }

}