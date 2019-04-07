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
    Route::get('/my-galeri','ScGaleriController@galeri')->name('sc-galeri');
    Route::get('/my-galeri/listGaleri','ScGaleriController@getGaleriList')->name('listGaleri');
    Route::post('/my-galeri/addGaleri','ScGaleriController@addGaleri');
    Route::get('/my-galeri/{id}/editGaleri','ScGaleriController@editGaleri');
    Route::post('/my-galeri/updateGaleri','ScGaleriController@updateGaleri');
    Route::delete('/deleteGaleri/{id}','ScGaleriController@deleteGaleri');
    // --Galeri -> list
    Route::get('/my-galeri/listGaleriLabel','ScGaleriController@getGaleriLabelList')->name('listGaleriLabel');
    Route::post('/my-galeri/addLabel','ScGaleriController@addLabel');
    Route::get('/my-galeri/{id}/editLabel','ScGaleriController@editLabel');
    Route::post('/my-galeri/updateLabel','ScGaleriController@updateLabel');
    Route::delete('/deleteLabel/{id}','ScGaleriController@deleteLabel');
    // --Service
    Route::get('/my-service','ScServiceController@service')->name('sc-service');
    Route::get('/my-service/listService','ScServiceController@getServiceList')->name('listService');
    Route::post('/my-service/addService','ScServiceController@addService');
    Route::get('/my-service/{id}/editService','ScServiceController@editService');
    Route::post('/my-service/updateService','ScServiceController@updateService');
    Route::delete('/deleteService/{id}','ScServiceController@deleteService');
    // --About
    Route::get('/my-sambutan','ScAboutController@sambutan')->name('sc-sambutan');
    Route::get('/my-team','ScAboutController@team')->name('sc-team');
    // --Contact
    Route::get('/my-kontak','ScContactController@kontak')->name('sc-kontak');
    Route::get('/my-kontak/{id}/editKontak','ScContactController@editKontak');
    Route::post('/my-kontak/{id}/updateKontak','ScContactController@updateKontak');

    /*-----==========Back End==========-----*/

});