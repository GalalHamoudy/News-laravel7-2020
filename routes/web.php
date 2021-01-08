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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

Route::group(['prefix' => 'news','namespace'=>'website'], function () {

    Route::get('/', 'showCON@mainPage')->name('mainPage');
    Route::get('/facebook', 'showCON@facebook')->name('facebook');
    Route::get('/categoriesPage', 'showCON@categoriesPage')->name('categoriesPage');
    Route::get('/userPage', 'showCON@userPage')->name('userPage');
    Route::get('/contactUs', 'showCON@contactUs')->name('contactUs');
    Route::get('/categorySHOW/{id}', 'showCON@categorySHOW')->name('categorySHOW');
    Route::get('/oneSHOW/{id}', 'showCON@oneSHOW')->name('oneSHOW');

    });// $$$$$$$$$$$ end of Route group $$$$$$$$$$$




});// $$$$$$$$$$$ end of LaravelLocalization Route group $$$$$$$$$$$
