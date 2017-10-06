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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/','PagesController@index');
Route::get('/index','PagesController@index');

Route::get('/vacancies','PagesController@vacancies');
Route::get('/reservation','PagesController@reservation');
Route::get('/login','PagesController@login');
Route::get('/services','PagesController@services');
Route::get('/blog','PagesController@blog');
Route::get('/about','PagesController@about');
Route::get('/fleet','PagesController@fleet');


Route::get('/message','PagesController@message');
Route::get('/message',['as'=>'message','uses'=>'PagesController@message']);


Route::post('/vacanciesform',['as'=>'vacanciesform','uses'=>'PagesController@postVacanciesForm']);
Route::post('/reservationform',['as'=>'reservationform','uses'=>'PagesController@postReservationForm']);
Route::post('/quoteform',['as'=>'quoteform','uses'=>'PagesController@postQuoteForm']);

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
