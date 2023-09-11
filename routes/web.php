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



Route::get('admin-poolvilla', function () {
    return view('admin-poolvilla');
});

Route::get('admin-beetle', function () {
    return view('admin-beetle');
});
Route::get('admin-jacuzzivilla', function () {
    return view('admin-jacuzzivilla');
});

Route::get('admin-bougainvilla', function () {
    return view('admin-bougainvilla');
});

Route::get('admin-pavilionroom', function () {
    return view('admin-pavilionroom');
});

Route::get('admin-penthouse', function () {
    return view('admin-penthouse');
});
Route::get('/', function () {
    return view('admin-homepage');
});
Route::get('admin-amenities', function () {
    return view('admin-amenities');
});

Route::get('admin-activities', function () {
    return view('admin-activities');
});

Route::get('admin-wayanad', function () {
    return view('admin-wayanad');
});

Route::get('admin-gallery', function () {
    return view('admin-gallery');
});

Route::get('admin-spa', function () {
    return view('admin-spa');
});

Route::get('admin-blog', function () {
    return view('admin-blog');
});

Route::get('admin-contact', function () {
    return view('admin-contact');
});

Route::get('login', function () {
    return view('login');
});
