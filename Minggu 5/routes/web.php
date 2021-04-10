<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;

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
    return view('welcome');
});
Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});
Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('page/{nomor}', function($nomor){
	Return 'Ini Halaman ke-' . $nomor;
});
Route::get('/gambar', function () {
    return view('gambar');
});

Route::get('user', [NovitahesController::class, 'index']);
Route::resource('user', NovitahesController::class);

Route::get("/novita", function(){
    return view("novita");
});

//Route::group(['namespace' => 'Frontend'], function() {
Route::resource('home', HomeController::class);

//Route::group(['namespace' => 'Backend'], function() {
Route::resource('dashboard', DashboardController::class);
