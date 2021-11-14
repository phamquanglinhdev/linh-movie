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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/category', function () {
    return view('categories');
});
Route::get('/blogs', function () {
    return view('blog');
});
Route::get("/blog/{id}",function (){
    return view("blog-detail");
});
Route::get("/detail/{id}",function (){
    return view("anime-detail");
});
Route::get("/watch/{id}",function (){
    return view("watch");
});
