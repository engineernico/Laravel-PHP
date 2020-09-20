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

Route::get('landing',function(){
    return view('landing');
});

Route::get('source',function(){
});
//login with facebook
Route::get('redirect/{service}','social@redirect');
Route::get('callback/{service}','social@callback');



Route::namespace('Auth')->group(function(){

Route::get('/index','VarController@index');


Route::get('/users','UserController@ShowUserName');
Route::get('/users','VarController@index');
    //Route::get('/facebook/redirect/{social}',FaceController@redirect) ;

});




Auth::routes(['verify' => true]);

Route::get('/home','HomeController@index')-> name('home') -> middleware('verified');


Route::get('/', function (){

    return view('welcome') ;
});






//Route::group(['namespace' => 'Auth','prefix' => 'users' , 'middleware' => 'web'], function () {
//
//Route::post('/logins', function () {
//    return view('home');
//})->name('login');
//});
Route::group(['prefix'=>'offers'] , function(){

Route::get('store','OfferClass@store')->name('store_r');


});



Route::group([

    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
             ]

    , function(){



    Route::get('store',function(){

        return view('forms.form2');
    });

    Route::get('offer_all','OfferShow@ShowData');
    Route::get('offer_edit/{id}','EditData@Edit');
    Route::get('offer_update/{id}','EditData@update');


});

