<?php

Route::group(['namespace'=>'Echos\Contact\Http\Controllers'],function(){


Route::get('contact',['as'=>'contact','uses'=>'ContactController@index']);
Route::post('contacts',['as'=>'contacts','uses'=>'ContactController@contacts']);

});