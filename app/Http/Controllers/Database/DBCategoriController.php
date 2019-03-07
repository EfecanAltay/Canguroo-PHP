<?php
namespace App\Http\Controllers\Database;

use Illuminate\Support\Facades\Auth;

use App\Categori;
use App\SubCategori;
use App\Package;

class DBCategoriController
{
	public static function createCategori($categoriName){
  		$categori = new Categori(["categori_name"=>$categoriName]);
        $categori->save();
        return $categori->_id;
	}
	public static function createSubCategori($subCategoriName, $categoriId){
  		
		$categori = DBCategoriController::getCategori($categoriId);
		if($categori != null){
			$subcategori = new SubCategori(["subcategori_name"=>$subCategoriName]);
        	$subcategori->save();
        	$categori->subCategori()->save($subcategori);
        	return $subcategori->_id;
		}
		return null;
  		
	}
	public static function getCategori($categoriId){
		$categori = Categori::find($categoriId)->first();
		return $categori;
	}
}