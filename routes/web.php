<?php

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth','admin'])->prefix('admin')->group(function(){
    Route::get('/products','ProductController@index'); //Listado
    Route::get('/products/create','ProductController@create'); //Crear (Ver formulario)
    Route::post('/products','ProductController@store'); //Crear (Registrar)
    Route::get('/products/{id}/edit','ProductController@edit'); //Formulario Edición 
    Route::post('/products/{id}/edit','ProductController@update'); //Actualizar 
    Route::post('/products/{id}/delete','ProductController@destroy'); //Eliminar


});




