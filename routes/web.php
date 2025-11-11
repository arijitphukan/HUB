<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');
Route::get('/login', function () {
    return view('loginpages.Login');
})->name('login');
Route::get('/registration', function () {
    return view('loginpages.Registration');
})->name('register');
Route::get('/userdashboard',function(){
    return view('userpages.Userdashboard');
})->name('userdash');
