<?php
//Packages Product Veri tabanında hataları çözülecek.... İç içe eklenemiyor..
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Product ;
use App\Package ;
use App\Card ;

class ProductController extends Controller
{ 

	//name : getProductDetail
    public function getProductDetail(Request $request , $product_id){
    	$userData = Auth::user();
    	$product = Product::find($product_id);

    	return view("product.productDetailPage" , ["userData"=>$userData ,"product" => $product]);
    }
    public function takeProduct(Request $request , $product_id){

        if ($request->isMethod('get')) {
            
            $product = new Product(['title' => 'Klavye & Mouse ',
                                    'subtitle' => 'Süper Oyuncu Klavye ve Mouse Ucuza ',
                                    'cost' => 5
                                    ]);
            $product->save();
            
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

        
        $product = Product::find($product_id);

        // Paket fiyat hesabı yap ....
        $pack_cost = $product->cost * $amount;

        //Reading Package Props ----
        $color = $request->input('color');
        $props = array('color' => $color );

        $package = new Package
            ([
                "amount" => $amount,
                "pack_cost" => $pack_cost,
                "product_id" => $product->id,
                "product_title" => $product->title,
                "product_props" => $props
            ]);

        switch ($process) {
    		case 'addToCard':
    			//Sepete Ekle ve Devam Et --
    			$this->AddToCard($user , $package , $props);
    			break;
    		case 'fastPay':
    			//Satın Alma Sayfasına Git --
				$this->FastPay($user , $package);
    			break;
    		default:
    			
    			break;
    	}

    	return view("product.productDetailPage" , ["userData"=>$user ,"product" => $product]);
    }
    private function AddtoCard($user , $package , $props){

        $card = $user->card()->get();
        if($card !== null && $card->packages() !== null){
            
            $packages = $card->packages()->where("product_id" ,"=", $package->product_id);
            $pack = $this->isHaveSamePackage($packages , $props);
            
            if($pack !== null )
            {
                $pack->amount += $package->amount;
                $pack->pack_cost += $package->pack_cost;  
            }
            else
                $pack = $package;

            $card->packages()->save($pack);
            // Calculating Total Cost ---
            $card->total_cost = $this->calculateTotalCost($card);
            $user->card()->save($card);
        }
        else
        {   
            $card = new Card();
            $user->card()->save($card);
            $card->packages()->save($package);
            $card->total_cost = $this->calculateTotalCost($card);
            $user->card()->save($card);
        }
        
    }
    private function FastPay($user , $package){

    	// Task 3 : Satın alma sayfasına yönlendir...
    
    }
    private function isHaveSamePackage($packages , $props){

        foreach ($packages as $pack) {

            $pack_props = $pack->product_props;
            if($pack_props !== null && $pack_props === $props){
                return $pack;
            }
        }
        return null;
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
