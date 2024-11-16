<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/product_add', function () {
    return view('admin.product_add');
});
Route::get('/admin', function () {
    return view('admin.home');
});
Route::get('/', function () {
    return view('welcome');
});
