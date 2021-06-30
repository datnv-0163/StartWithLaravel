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
Route::get('usersss', function () {
    return 'user screen';
})->name('user');

Route::get('product', function () {
    return 'product screen';
});

Route::get('news/{id}', function ($id) {
    return "this is new number ${id}";
});
Route::get('news/{id}/category/{cate}', function ($id,$cate) {
    return "this is new number ${id} and category ${cate}";
})->name('details');

Route::prefix('backend')->namespace('App\Http\Controllers\Backend')->group(function () {
    Route::get('product','ProductController@index')->name('product.manage'); 


    Route::get('user/create', 'UserController@create')->name('user.create');
    Route::post('user/store', 'UserController@store')->name('user.store');


    Route::get('user', 'UserController@index')->name('user.manage');
    Route::get('admin', 'AdminController@index')->name('admin.manage');
});

