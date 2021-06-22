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

 



//User

Route::get('/dash', function () {
    return view('viewAdmin.dashboard');
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
Route::get('/a-propos','afficheController@getAllFormations' );



 Route::get('/showFormation/{formation}', function () {
    return view('test');
}); 

Route::group(['middleware' => 'auth'], function () {
    Route::get('/contactez-nous','ContactController@create');
    Route::post('/contactez-nous','ContactController@store');

    Route::get('/inscription',function(){
        return view('formations.inscription');
    });
    Route::post('/inscri','InscriptionController@store');
});

Route::get('showFormation/{formation}','CRUDController@show');

Route::get('/formation',function(){
    return view('formations.bureautique');
});





//admin
Route::group(['middleware' => 'auth:admin'], function () {

        Route::get('/admin','Auth\CustomAuthController@admin')->middleware('auth:admin');

        Route::get('/actualites','afficheController@getAdminAct');
        Route::get('/references','afficheController@getAdminRef');
        Route::get('/couvertures','afficheController@getAdminCover');
        Route::get('/gallerie','afficheController@getAdminGallerie');
        Route::get('/inscriptions','afficheController@getAdminInscri');
        Route::get('/messages', 'afficheController@getAdminMessages');
        Route::get('/administrateurs', 'afficheController@getAdmins');

        Route::get('/formations', function () {return view('viewAdmin.formations');});
        Route::get('/editFormation/{id}', function () {return view('viewAdmin.editFormation');});

        Route::get('/ajoutFormation','CRUDController@create');
        Route::post('/ajoutFormation','CRUDController@store');
        Route::get('/deleteFormation/{id}','CRUDController@destroy');
        Route::get('/editFormation/{id}','CRUDController@edit');
        Route::post('/updateFormation{id}','CRUDController@update');


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

        Route::get('/addAdmin','CrudAdmin@create');
        Route::post('/addAdmin','CrudAdmin@store');
        Route::get('/deleteAdmin/{id}','CrudAdmin@destroy');
        Route::get('/editAdmin/{id}','CrudAdmin@edit')->name('editAdmin');
        Route::post('/updateActualite{id}','CrudAdmin@update');

    });






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/login', 'Auth\CustomAuthController@adminLogin')->name('admin.login');
Route::post('/admin/login', 'Auth\CustomAuthController@checkAdminLogin')->name('save.admin.login');




