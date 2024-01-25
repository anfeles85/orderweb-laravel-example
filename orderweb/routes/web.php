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
    return view('test');
})->name('test'); 

Route::get('/test2', function () {
    return view('test2');
})->name('test2'); 

Route::get('/causal/create', function () {
    return view('causal.create');
})->name('causal.create'); 

Route::get('/causal/index', function () {
    return view('causal.index');
})->name('causal.index'); 

Route::get('/observation/create', function () {
    return view('observation.create');
})->name('observation.create'); 

Route::get('/observation/index', function () {
    return view('observation.index');
})->name('observation.index'); 

Route::get('/type_activity/create', function () {
    return view('type_activity.create');
})->name('type_activity.create'); 

Route::get('/type_activity/index', function () {
    return view('type_activity.index');
})->name('type_activity.index'); 