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
Route::get('/ahome', 'HomeController@index')->name('ahome');

/*-----==========Back End==========-----*/
Route::get('/my-admin','PrDefaultController@index')->name('my-admin');

// Primary Layout
Route::get('/my-admin/primary-layout/default','PrDefaultController@index')->name('pr-default');

// Secondary Layout
Route::get('/my-admin/secondary-layout/galeri','ScGaleriController@galeri')->name('sc-galeri');
Route::get('/my-admin/secondary-layout/service','ScServiceController@service')->name('sc-service');
Route::get('/my-admin/secondary-layout/sambutan','ScAboutController@sambutan')->name('sc-sambutan');
Route::get('/my-admin/secondary-layout/pengenalan','ScAboutController@pengenalan')->name('sc-pengenalan');
Route::get('/my-admin/secondary-layout/team','ScAboutController@team')->name('sc-team');
Route::get('/my-admin/secondary-layout/kontak','ScContactController@kontak')->name('sc-kontak');
Route::get('/my-admin/secondary-layout/pesan','ScContactController@pesan')->name('sc-pesan');

/*-----==========Back End==========-----*/
