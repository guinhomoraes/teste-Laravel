<?php

Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('contato');
});



Route::group(['prefix' => "panel"], function(){
	Route::get('/empresa', function () {
   		 return view('empresa');
	});

	Route::get('/contato', function () {
	     return view('contato');
	})->name('contato');
});


Route::get('/teste', 'SiteController@index');
