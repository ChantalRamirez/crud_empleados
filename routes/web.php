<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;

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
    return view('auth.login');
});
/*
Route::get('/empleado', function () {
    return view('empleado.index');
});
Route::get('/empleado/create', [EmpleadosController::class,'create']);
*/
Route::resource('empleado', EmpleadosController::class)->middleware('auth');

Auth::routes(["register"=>false]);

//Route::get('/home', [EmpleadosController::class, 'index'])->name('home');
Route::get('/home', 'EmpleadosController@index');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [EmpleadosController::class, 'index'])->name('home');
});