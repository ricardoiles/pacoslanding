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

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tengounPACOS', 'TengoPACOSController@index')->name('tengounPACOS');
Route::get('/quienessomos', 'QuienesSomosController@index')->name('quienessomos');
Route::get('/contactanos', 'ContactanosController@index')->name('contactanos');

//Route::get('/leads/viewLeads', 'LeadsusuariosController@index')->name('viewLeads');
Route::resource('leads', 'LeadsusuariosController');
Route::resource('leadsPACOS', 'LeadsPACOSController');

