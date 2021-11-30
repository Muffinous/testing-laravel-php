<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/join', 'App\Http\Controllers\MainController@index');
Route::post('/main/login', 'App\Http\Controllers\MainController@login');

Route::get('/test', 'App\Http\Controllers\MainController@index2');

Route::post('/index2', function () {
    return view('welcome');
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
