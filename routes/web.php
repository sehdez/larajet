<?php

use Illuminate\Support\Facades\Route;

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

// Ruta con parámetro
Route::get('/parametro/{parametro?}', function( $parametro = 'abcd' ){
    return '<h1> '. $parametro . ' </h1>';
})  -> name ('parametro') 
    -> where('parametro','[0-9]+');


Route::get('/', 'App\Http\Controllers\InicioController@index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



 