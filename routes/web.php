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

Route::get('/', "homePageController@GetHomePage");

Route::get('/login', "loginController@GetLogin");
Route::post('/login', "loginController@PostLogin");

Route::get('/register',"registerController@GetRegister");
Route::post('/register',"registerController@PostRegister");