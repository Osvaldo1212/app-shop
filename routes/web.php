<?php
Route::get('/','TestController@welcome');
 Route::get('/prueba',function()
 {
  return 'Hola Soy una ruta';
 });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
