<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

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
///thuc hien tao bang trong Database

Route::get('/', function () {
    return view('welcome');
});

Route::get('/taobang',function(){
    Schema::create('loaisanpham',function($table){
        $table->increments('id');
        $table->string('ten',200);
    });
    echo "Da thuc hien thanh cong";
});



//Route::get('/','UsersController@index');


Route::get('/ca','CustomerController@getList');
Route::get('/c','CustomerController@getAdd');
Route::post('/c','CustomerController@postAdd');

Route::get('delete/{id}','CustomerController@delete');
Route::get('delete/{id}','CustomerController@delete');

Route::get('edit/{id}','CustomerController@getEdit');
Route::post('edit/{id}','CustomerController@postEdit');
