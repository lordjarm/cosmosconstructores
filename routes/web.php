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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::resource("proyectos", "ProyectosController")->parameters(["proyectos"=>"proyecto"]);
Route::get('proyecto', 'ProyectoController@index')->name('proyecto');
Route::resource("users", "RegistrarController")->parameters(["users"=>"user"]);
Route::resource("tipoaptos", "TipoAptoController")->parameters(["tipoaptos"=>"tipoapto"]);
Route::resource("pisos", "PisoController")->parameters(["pisos"=>"piso"]);
Route::post("pisos", 'PisoController@index1')->name("pisos.index1");
Route::post("pisoss", 'PisoController@store')->name("pisoss.store");
//Route::resource("aptos", "AptoController")->parameters(["aptos"=>"apto"]);
Route::post("aptosc", 'AptoController@create')->name("aptosc.create");
Route::post("aptos", 'AptoController@index1')->name("aptos.index1");
Route::post("aptoss", 'AptoController@store')->name("aptoss.store");
Route::post('proyecto', 'ProyectoController@preventa')->name('proyecto.preventa');
//Route::post('buscar','ProyectosController@busca')->name('buscar');
