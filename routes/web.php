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

/*Route::get('/', function () {
    return view('welcome');
});*/


/*
Route::get('/encode', function () {
   return redirect('/test/index'); 
});*/

Route::get('/',[ 'uses'=>'TestController@index']);
 
 Route::post('encode_it',['as'=>'encode_it','uses'=>'TestController@encodeStr']);
 Route::post('decode_it',['as'=>'decode_it','uses'=>'TestController@decodeStr']);

 


 

