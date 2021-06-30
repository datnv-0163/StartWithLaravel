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

Route::prefix('backend')->group(function () {
    Route::get('product-management', function () {
        return "product management";
    })->name('product.manage'); 
    Route::get('user-management', function () {
        return "user management";
    })->name('user.manage');
    Route::get('admin-management', function () {
        return "admin management";
    })->name('admin.manage');
});

Route::get('backend/product-management', function () {
    return "product management";
})->name('product.manage');
Route::get('backend/user-management', function () {
    return "user management";
})->name('user.manage');
Route::get('backend/admin-management', function () {
    return "admin management";
})->name('admin.manage');