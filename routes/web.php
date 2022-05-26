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

Route::get('/', function () {
    return view('welcome');
});
//vista controller
//ruta de vista usuario
Route::get('usuario','App\Http\Controllers\vistaController@usuario');
//ruta de vista administrador
Route::get('admin','App\Http\Controllers\vistaController@admin');
//usuario controller
Route::get('panel','App\Http\Controllers\usuarioController@panel');
//validacion login
Route::post('sesion','App\Http\Controllers\usuarioController@login')->name('validado');
//recupercacion de correo
Route::post('password','App\Http\Controllers\usuarioController@correo')->name('recuperacion');
Route::get('recuperacion','App\Http\Controllers\UsuarioController@recuperar');
//perfil usuario
Route::get('perfil','App\Http\Controllers\UsuarioController@perfil_user');
//Actulizar perfil
Route::get('actulizar/{id}','App\Http\Controllers\UsuarioController@Actulizar_user');
Route::post('estado','App\Http\Controllers\UsuarioController@Actulizar_datos')->name('estado_cambiado');
//Marcacion
Route::get('marcacion/{id}','App\Http\Controllers\UsuarioController@Marcacion');
//salir
Route::get('Salir','App\Http\Controllers\usuarioController@logout');
//admin Controller
Route::get('Panel_admin','App\Http\Controllers\AdminController@admin_panel');
Route::post('bienvenido','App\Http\Controllers\AdminController@validar')->name('proceso-admin');

Route::get('listado','App\Http\Controllers\AdminController@cargar_usuario');
Route::get('new_user','App\Http\Controllers\AdminController@crear_usuario');

Route::post('insert','App\Http\Controllers\AdminController@guradar_usuario')->name('guardando');
Route::get('eleminar/{id}','App\Http\Controllers\AdminController@eliminar_usuario');
Route::get('user/{id}','App\Http\Controllers\AdminController@ver');//validar
Route::post('hora','App\Http\Controllers\UsuarioController@hora_marcacion')->name('resultado');
Route::get('recibiendo','App\Http\Controllers\UsuarioController@usuario_horas');//validar
//pdf rutas

Route::get('pdf_view/{id}','App\Http\Controllers\AdminController@pdf_visualizadorWeb')->name('estilo');
