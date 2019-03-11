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
	public static function getCategoriWithName($categoriName){
		$categoriName = iconv('UTF-8', 'UTF-8//IGNORE', $categoriName);
		$categori = Categori::where("categori_name","=",$categoriName)->first();
		return $categori;
	}
	public static function getCategories(){
		$categories = Categori::all();
		return $categories;
	}
	public static function getSubCategories($categoriID){
		$subcategories = SubCategori::where("categori_id","=",$categoriID)->get();
		return $subcategories;
	}
}