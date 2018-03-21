<?php

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}','ProductController@show'); 

Route::post('/cart','CartDetailController@store'); 
Route::delete('/cart','CartDetailController@destroy'); 
Route::post('/order','CartController@update'); 


Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function(){
    Route::get('/products','ProductController@index'); //Listado
    Route::get('/products/create','ProductController@create'); //Crear (Ver formulario)
    Route::post('/products','ProductController@store'); //Crear (Registrar)
    Route::get('/products/{id}/edit','ProductController@edit'); //Formulario Edición 
    Route::post('/products/{id}/edit','ProductController@update'); //Actualizar 
    Route::post('/products/{id}/delete','ProductController@destroy'); //Eliminar

    Route::get('/products/{id}/images','ImageController@index'); //Listado
    Route::post('/products/{id}/images','ImageController@store'); //Crear (Registrar)
    Route::delete('/products/{id}/images','ImageController@destroy'); //Eliminar
    Route::get('/products/{id}/images/select/{image}','ImageController@select'); //Listado


});




