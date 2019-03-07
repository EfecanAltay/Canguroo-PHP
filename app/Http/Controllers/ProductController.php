<?php
//Packages Product Veri tabanında hataları çözülecek.... İç içe eklenemiyor..
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//Events 
use App\Events\AddingToCardEvent;
use App\Http\Controllers\Database\DBCardController;

use App\Product ;
use App\Package ;
use App\Card ;

use App\Http\Controllers\HomeController;

class ProductController extends Controller
{

   
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('guest');
    }
	//name : getProductDetail
    public function getProductDetail(Request $request , $product_id){
        
    	$userData = Auth::user();
    	$product = Product::find($product_id);

    	return view("product.productDetailPage" , ["userData"=>$userData ,"product" => $product]);
    }
    public function takeProduct(Request $request , $product_id){

        if ($request->isMethod('get')) {            
            return redirect('/products/'.$product_id.'/detail/');
        }
    	// is User Not connected redirect to Login Page
    	$user = Auth::user();
    	if($user == null)
    		return redirect("/login");
    	//------------
    	
    	$process = $request->input('take');
    	//cotrol properties adding properties to product  
    	//color , wide , lenght ... 
    	$amount = $request->input('amount');

        //Reading Package Props ----
        $color = $request->input('color');
        $props = array('color' => $color );

        //paketi oluştur...
        $package = DBCardController::createPackage($amount,$product_id,$props);

        switch ($process) {
    		case 'addToCard':
    			//Paketi Sepete Ekle ve Devam Et --
    			$this->AddToCard($package , $props);
    			break;
    		case 'fastPay':
    			//Paketi Satın Alma Sayfasına ilet --
				$this->FastPay($user , $package);
    			break;
    		default:
    			
    			break;
    	}

    	return $this->getProductDetail($request,$product_id);
    }
    private function AddtoCard($package , $props){
        DBCardController::addPackageToCard($package,$props);
    }
    private function FastPay($user , $package){
    	// Task 3 : Satın alma sayfasına yönlendir..
    }

}
