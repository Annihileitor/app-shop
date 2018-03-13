<?php

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/products','ProductController@index'); //Listado
Route::get('/admin/products/create','ProductController@create'); //Crear (Ver formulario)
Route::post('/admin/products','ProductController@store'); //Crear (Registrar)