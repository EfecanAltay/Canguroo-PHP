<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\UserController ;
use App\Http\Controllers\Database\DBCategoriController;

class CategoriController extends Controller
{
  public function index(Request $request)
  {
    return redirect('/');
  }
  public function getCategoriList(Request $request){

  	$user = Auth::user();
	  $categories = DBCategoriController::getCategories();

  	return view('categories.categories' , ["userData"=>$user , "categories" => $categories ]);
  }
  public function getSubCategoriPage(Request $request , $categoriName){
  
  $user = Auth::user();
	$categoriName = trim($categoriName);
	$categoriName = strtolower ($categoriName);
	$categori = DBCategoriController::getCategoriWithName($categoriName);
	if($categori != null){
     $sub_categories = DBCategoriController::getSubCategories($categori->_id);
      return view('categories.subcategori' , ["userData"=>$user ,"categori" => $categori ,"sub_categories" => $sub_categories ]);
  }
  	else return redirect('/');
  }
}