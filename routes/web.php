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
    return view('test');
});
Route::get('user', function () {
    return 'user screen';
});

Route::get('product', function () {
    return 'product screen';
});

Route::get('news/{id}', function ($id) {
    return "this is new number ${id}";
});
Route::get('news/{id}/category/{cate}', function ($id,$cate) {
    return "this is new number ${id} and category ${cate}";
});
