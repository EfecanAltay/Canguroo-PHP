<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if (App::environment() === 'production') {
	Log::info('-> forcing Schema ...');
 //   URL::forceScheme('https'); //!!! not for heroku
}

Route::get('/', function () {
	Log::info(' redirect welcome page ...');
    return view('welcome');
});

Route::get('/login', function () {
    return view('layouts.login');
});

Route::post('/login', function (Request $request) {
	$isEmailError = false;
	$isPasswordError = false;

	if(isset($request)){
		$email = $request->input('email');

		$rules = array(
		    'email'    => 'required|email', 
		    'password' => 'required|alphaNum|min:8' 
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
		    return Redirect::to('login')
		        ->withErrors($validator) 
		        ->withInput(Input::except('password')); 
		} else {
		    
		    $userdata = array(
		        'email'     => Input::get('email'),
		        'password'  => Input::get('password')
		    );

		    // !!! Giriş Yaparsa Kullanıcı Sayfasına Yönlendir---
		    if($userdata['email'] == "admin@canguroo.com" &&
		    $userdata['password'] == "adminadmin" ) 
		    	return Redirect::to('/')
		    			->withErrors(array('loginSuccessMessage' => "Giriş başarılı"));
		    ///---------------------------------------------------
		    $rules = array(
		    'isEmailError'    => 'false', 
		    'isPassword' => 'false' 
			);

		    return Redirect::to('login')
		    		->withErrors(array('loginMessage' => "Mail Adresi veya Şifre Hatalı"));

		}

	}else
		return ;
});

Route::get('/register', function () {
    return view('layouts.register');
});

Route::post('/register', function (Request $request) {
	$isEmailError = false;
	$isPasswordError = false;

	if(isset($request)){
		$email = $request->input('email');
		$pass = $request->input('password1');

		$rules = array(
		    'email'    => 'required|email', 
		    'password1' => 'required|alphaNum|min:8',
		  	'password2' => 'required|alphaNum|min:8|in:'.$pass
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
		    return Redirect::to('register')
		        ->withErrors($validator) 
		        ->withInput(Input::except('password2'));
		} else {
		    
		    $userdata = array(
		        'email'     => Input::get('email'),
		        'password'  => Input::get('password')
		    );
			
			if($email === "admin@canguroo.com"){
				return Redirect::to('/register')
		    			->withErrors(array('registerMessage' => "Bu mail adresi Zaten Kayıtlı !"));
			}

		    return Redirect::to('/')
		    		->withErrors(array('RegisterSuccessMessage' => "Kayıt başarılı"));
		    ///---------------------------------------------------
		}

	}else
		return ;
});