<?php

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
if (Request::server('HTTP_X_FORWARDED_PROTO') == 'https')
{
	Log::info('redirect secure page ...');
} else {
   	Log::info('redirect unsecure page ...');
}

if (App::environment() === 'production') {
	Log::info('-> forcing Schema ...');
 //   URL::forceScheme('https'); //!!! not for heroku
}

Route::get('/', function () {
	Log::info(' redirect welcome page ...');
    return view('welcome');
});
