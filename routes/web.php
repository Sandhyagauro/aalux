<?php

//Route::get('/','PagesController@index');
//Route::get('/index','PagesController@index');

Route::get('/message','PagesController@message');
Route::get('/message',['as'=>'message','uses'=>'PagesController@message']);

//contact forms
Route::post('/vacanciesform',['as'=>'vacanciesform','uses'=>'PagesController@postVacanciesForm']);
Route::post('/reservationform',['as'=>'reservationform','uses'=>'PagesController@postReservationForm']);
Route::post('/quoteform',['as'=>'quoteform','uses'=>'PagesController@postQuoteForm']);

//Auth::routes();


Route::match(['get', 'post'], '/{slug}', 'PagesController@index')->where('slug', '.*');


Route::get('/home', 'HomeController@index')->name('home');
