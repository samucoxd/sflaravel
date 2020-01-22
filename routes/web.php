<?php

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

use Illuminate\Support\Facades\Route; 


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('cliente', 'ClienteController');
Route::resource('vendedor', 'VendedorController');
Route::resource('transporte', 'TransporteController');
Route::resource('destino', 'DestinoController');
Route::resource('personalalmacen', 'PersonalalmacenController');
Route::resource('pedido', 'PedidoController')->only('index', 'create', 'store');
Route::resource('envio', 'EnviosController');

Route::get('/cancelar/{nombre}', function($nombre) {
    return redirect()->route($nombre.'.index')->with('cancelar', 'Registro Cancelado');
})->name('cancelar');

