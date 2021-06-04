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



//Route::get('/', 'affichController@getAllFormation');
//Route::get('/contact', 'affichController@getAllFormation');
//Route::get('/a-propos', 'affichController@getAllFormation');

 



Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/', function () {
    return view('acceuil');
});

Route::get('/','afficheController@getacceuil');

        
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/a-propos', function () {
    return view('a-propos');
});

Route::get('/dash', function () {
    return view('viewAdmin.dashboard');
});
Route::get('/form', function () {
    return view('viewAdmin.form');
});

Route::get('/formations', function () {
    return view('viewAdmin.formations');
});

Route::get('/editFormation/{id}', function () {
    return view('viewAdmin.editFormation');
});

Route::get('/showFormation', function () {
    return view('detailsFormation');
});



Route::get('/actualites','afficheController@getAdminAct');
Route::get('/references','afficheController@getAdminRef');
Route::get('/couvertures','afficheController@getAdminCover');
Route::get('/gallerie','afficheController@getAdminGallerie');

Route::get('/a-propos','afficheController@getAllFormations' );

Route::get('/BTS',function(){
    return view('BTS');
});
Route::get('/ajoutFormation','CRUDController@create');
Route::post('/ajoutFormation','CRUDController@store');
Route::get('/deleteFormation/{id}','CRUDController@destroy');
Route::get('/editFormation/{id}','CRUDController@edit');
Route::post('/updateFormation{id}','CRUDController@update');
Route::get('/showFormation/{id}','CRUDController@show');

Route::get('/cover','CrudCover@create');
Route::post('/cover','CrudCover@store');
Route::get('/deleteCouverture/{id}','CrudCover@destroy');

Route::get('/addReference','CrudReference@create');
Route::post('/addReference','CrudReference@store');
Route::get('/deleteReference/{id}','CrudReference@destroy');

Route::get('/addAct','CrudActualite@create');
Route::post('/addAct','CrudActualite@store');
Route::get('/deleteActualite/{id}','CrudActualite@destroy');
Route::get('/editActualite/{id}','CrudActualite@edit')->name('editAct');
Route::post('/updateActualite{id}','CrudActualite@update');

Route::get('/addGallerie','CrudGallerie@create');
Route::post('/addGallerie','CrudGallerie@store');
Route::get('/deleteGallerie/{id}','CrudGallerie@destroy');



Route::post('store', 'CrudController@store')->name('offers.store');

Route::get('test','crud@getfn');
Route::get('store','crud@store');
