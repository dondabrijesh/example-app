<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\displayController;
use App\Http\Controllers\userAuth;
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
    return view('list');
});
Route::get('users',[
    'uses' => 'userController@index',
    'as' => 'users'
]);
Route::post('users/save',[
    'uses' => 'userController@saveData',
    'as' => 'users-save'
]);
Route::get('list',[
    'uses'=>'userController@show',
    ]);
Route::get('delete/{id}',[
    'uses'=>'userController@destroy'
]);


Route::get('display',[
    'uses'=>'displayController@show'
]);
Route::get('delete/{id}',[
    'uses'=>'displayController@destroy'
]);
Route::get('insert',[
    'uses'=>'displayController@index',
    'as'=>'insert'
]);
Route::post('insert/save',[
    'uses'=>'displayController@saveData',
    'as'=>'insert-data'
]);
Route::get('insert/{id}',[
    'uses'=>'displayController@index',
]);
//Route::post('login',[
//    'uses'=>'userAuth@userLogin',
//    'as'=>'user-check'
//]);
Route::get('login',[
    'uses'=>'userAuth@index'
]);
Route::post('users-check',[
    'uses'=>'userAuth@userLogin',
    'as'=>'user-check'
]);
Route::get('/logout',[
    'uses'=>'userAuth@logOut',
    'as'=>'logout'
]);
Route::view('upload','upload');
Route::post('upload',[
    'uses'=>'userAuth@upload',
    'as'=>'upload'
]);