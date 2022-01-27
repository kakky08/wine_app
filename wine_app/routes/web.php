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
    return view('wine');
});
Route::get('/item', function () {
    return view('item');
});
Route::get('/wineSarch', function () {
    return view('wine-search');
});
Route::get('/memo', function () {
    return view('memo');
});
Route::get('/memo_create', function () {
    return view('memo-create');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
