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


Route::get('/home', function () {
    $username = "Matteo";
    
    $data = [
        'username' => $username,

    ];
    return view('home', $data);
})->name('home');

Route::get('about', function () {
    $myArray = [
        "pippo",
        "pluto",
        "paperino",
    ];
    $data = [
        'myArray' => $myArray,
    ];
    return view('about', $data);
})->name('about');