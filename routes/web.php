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
    Route::get('/my-admin/secondary-layout/galeri','ScGaleriController@galeri')->name('sc-galeri');
    // --Service
    Route::get('/my-admin/secondary-layout/service','ScServiceController@service')->name('sc-service');
    // --About
    Route::get('/my-admin/secondary-layout/sambutan','ScAboutController@sambutan')->name('sc-sambutan');
    Route::get('/my-admin/secondary-layout/team','ScAboutController@team')->name('sc-team');
    // --Contact
    Route::get('/my-admin/secondary-layout/kontak','ScContactController@kontak')->name('sc-kontak');
    Route::get('/my-admin/{id}/editKontak','ScContactController@editKontak');
    Route::post('/my-admin/{id}/updateKontak','ScContactController@updateKontak');

    /*-----==========Back End==========-----*/

});