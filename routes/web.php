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
    return view('init');
});

Route::get('/about', function () {
    return "hiya about";
});

Route::get('/contact', function () {
    return "hiya contact";
});

Route::get('/post/{id}', function ($id) {
    return "post number ". $id;
});

Route::get('admin/posts/example', array('admin.home', function() {
    $url = route('admin.home');

    return "this is ". $url;
}));

Route::get('/login', function () {
return view('login');})->name('login');