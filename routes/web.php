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
	Cookie::forget('emailHelpMessage');
    return view('layouts.login');
});

Route::post('/login', function (Request $request) {
	if(isset($request)){
		$email = $request->input('email');
		echo $email;

		$rules = array(
		    'email'    => 'required|email', 
		    'password' => 'required|alphaNum|min:3' 
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
		    $userdata['password'] == "admin" ) 
		    	return Redirect::to('login')
		    			->withErrors(array('loginMessage' => "Giriş başarılı"));
		    ///---------------------------------------------------

		    return Redirect::to('login')
		    		->withErrors(array('loginMessage' => "Hatalı Kullanıcı Adı veya Şifre"));

		}

	}else
		return ;
   
});