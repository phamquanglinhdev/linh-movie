<?php

use App\Http\Controllers\CategoryController;
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
})->name("index");;
Route::get('/login', function () {
    return view('login');
})->name("login");
Route::get('/register', function () {
    return view('register');
})->name("register");

Route::resource("category", CategoryController::class);
Route::get('/blogs', function () {
    return view('blog');
})->name("blogs");
Route::get("/blog/{id}",function (){
    return view("blog-detail");
})->name("blog");
Route::get("/detail/{id}",function (){
    return view("anime-detail");
})->name("detail");
Route::get("/watch/{id}",function (){
    return view("watch");
})->name("watch");
