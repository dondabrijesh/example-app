<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
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
Route::view('home','home');
//Route::view('users','users');
Route::view('noaccess','noaccess');
Route::group(['middleware'=>['protectedpage']],function (){
    Route::view('users','users');
});
Route::post('users',[usersController::class,'getData']);
Route::view('login','users');
