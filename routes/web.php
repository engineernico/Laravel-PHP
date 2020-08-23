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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/index','Auth\VarController@index');





Route::get('/hels', function () {
    return "hellooooooooo";
});



Route::namespace('Auth')->group(function(){


Route::get('/users','UserController@ShowUserName');
Route::get('/users','VarController@index');

});


Route::get('landing',function(){
   return view('landing');
});
Route::get('source',function(){

});

Auth::routes(['verify' => true]);

Route::get('home','HomeController@index')-> name('home') -> middleware('verified');


Route::get('/', function (){

    return view('welcome') ;
});





//Route::group(['namespace' => 'Auth','prefix' => 'users' , 'middleware' => 'web'], function () {
//
//Route::post('/logins', function () {
//    return view('home');
//})->name('login');
//});
