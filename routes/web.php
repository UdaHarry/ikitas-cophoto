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

/*-----==========Front End==========-----*/
Route::get('/','FrontController@home');
Route::get('/home','FrontController@home')->name('home');
Route::get('/galeri','FrontController@galeri')->name('galeri');
Route::get('/service','FrontController@service')->name('service');
Route::get('/about','FrontController@about')->name('about');
Route::get('/contact','FrontController@contact')->name('contact');
/*-----==========Front End==========-----*/

Auth::routes();

Route::group(['middleware'=>['auth']],function(){

    /*-----==========Back End==========-----*/
    Route::get('/my-admin','PrDefaultController@index')->name('my-admin');
        // Landing Top
        Route::get('/my-admin/{id}/editTop','PrDefaultController@editTop');
        Route::post('/my-admin/{id}/updateTop','PrDefaultController@updateTop');
        Route::get('/my-admin/{id}/editOther','PrDefaultController@editOther');
        Route::post('/my-admin/{id}/updateOther','PrDefaultController@updateOther');

    // Secondary Layout
    // --Galeri
    Route::get('/galeri','ScGaleriController@galeri')->name('sc-galeri');
    Route::get('/galeri/listGaleri','ScGaleriController@getGaleriList')->name('listGaleri');
    Route::post('/galeri/addGaleri','ScGaleriController@addGaleri');
    Route::get('/galeri/{id}/editGaleri','ScGaleriController@editGaleri');
    Route::post('/galeri/updateGaleri','ScGaleriController@updateGaleri');
    Route::delete('/deleteGaleri/{id}','ScGaleriController@deleteGaleri');
    // --Galeri -> list
    Route::get('/listGaleriLabel','ScGaleriController@getGaleriLabelList')->name('listGaleriLabel');
    // --Service
    Route::get('/service','ScServiceController@service')->name('sc-service');
    // --About
    Route::get('/sambutan','ScAboutController@sambutan')->name('sc-sambutan');
    Route::get('/team','ScAboutController@team')->name('sc-team');
    // --Contact
    Route::get('/kontak','ScContactController@kontak')->name('sc-kontak');
    Route::get('/my-admin/{id}/editKontak','ScContactController@editKontak');
    Route::post('/my-admin/{id}/updateKontak','ScContactController@updateKontak');

    /*-----==========Back End==========-----*/

});