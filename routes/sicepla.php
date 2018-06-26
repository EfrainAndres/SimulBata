<?php
//Rutas Super Administrador

Route::resource('usuarios','UserController');

Route::prefix('/perfil')->group(function (){
    Route::get('/', 'PerfilController@index')->name('perfil.index');
    Route::post('/', 'PerfilController@update')->name('perfil.update');
    Route::post('password', 'PerfilController@updatePassword')->name('perfil.password');
    Route::post('foto', 'PerfilController@fotoUp')->name('perfil.foto');
});


Route::resource('mapacom','FormatoController');

Route::resource('mapa','MapaController');

Route::get('/informacion', '\App\Container\Sicepla\Src\Controllers\InfoGeneralController@index')
        ->name('informacion');

Route::get('/slide', '\App\Container\Sicepla\Src\Controllers\InfoGeneralController@slide')
        ->name('slide');
        
Route::get('/images', '\App\Container\Sicepla\Src\Controllers\InfoGeneralController@images')
        ->name('images');

Route::get('/simulacion', '\App\Container\Sicepla\Src\Controllers\InfoGeneralController@simulacion')
        ->name('simulacion');

Route::get('/lumenmdos', '\App\Container\Sicepla\Src\Controllers\LumenController@lumenmdos')
        ->name('lumenmdos');

Route::get('/lumenIlu', '\App\Container\Sicepla\Src\Controllers\LumenController@lumenIlu')
        ->name('lumenIlu');