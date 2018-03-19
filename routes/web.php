<?php

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth','admin'])->group(function(){
    Route::get('/admin/products','ProductController@index'); //Listado
    Route::get('/admin/products/create','ProductController@create'); //Crear (Ver formulario)
    Route::post('/admin/products','ProductController@store'); //Crear (Registrar)
    Route::get('/admin/products/{id}/edit','ProductController@edit'); //Formulario Edición 
    Route::post('/admin/products/{id}/edit','ProductController@update'); //Actualizar 
    Route::post('/admin/products/{id}/delete','ProductController@destroy'); //Eliminar


});




