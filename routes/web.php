<?php

use App\Http\Controllers\LinguagensController;
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
| Pesquiser por para saber os métodos padrões dos controllers:
|   "Actions Handled By Resource Controller"
|   "laravel controller resource"
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/linguagens', 'LinguagensController@index');

Route::get('/linguagens/criar', 'LinguagensController@create');