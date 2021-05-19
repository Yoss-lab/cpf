<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('acceuil');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/a-propos',function(){
    return view('a-propos');
});

Route::get('/BTS',function(){
    return view('BTS');
});
Route::get('/ajoutFormation','CRUDController@create');
Route::post('/ajoutFormation','CRUDController@store');

Route::post('store', 'CrudController@store')->name('offers.store');

Route::get('test','crud@getfn');
Route::get('store','crud@store');
