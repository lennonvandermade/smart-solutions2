<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $list = [
        'one',
        'two',
        'three',
    ];
    return view('home', ['list' => $list]);
})->name('home');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/welcome', function () {
    return view('welcome');
});