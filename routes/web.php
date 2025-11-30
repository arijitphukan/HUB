<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');
Route::get('/browsegames', function () {
    return view('gamespage');
})->name('gamepage');
Route::get('/browsecomics', function () {
    return view('comicspage');
})->name('comicpage');
Route::get('/login', function () {
    return view('loginpages.Login');
})->name('login');
Route::get('/registration', function () {
    return view('loginpages.Registration');
})->name('register');
Route::get('/userdashboard',function(){
    return view('userpages.Userdashboard');
})->name('userdash');

//User Controller
Route::post('/registration',[UserController::class,'usercreation'])->name('register');
Route::post('/login',[UserController::class,'userlogin'])->name('login');
