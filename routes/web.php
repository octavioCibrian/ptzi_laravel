<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers;

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
});*/

Route::get('/',[UserControllers::class,'index']);
Route::post('/users',[UserControllers::class,'store'])->name('users.store');
Route::delete('/users/{user}',[UserControllers::class,'destroy'])->name('users.destroy');

//Route::get('/','UserControllers@index')->name('user.index');
//Route::post('users', 'UserControllers@store')->name('user.store');
//Route::delete('users/{user}', 'UserControllers@destroy')->name('user.destroy');