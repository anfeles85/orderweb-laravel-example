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

Route::get('/causal/show', function () {
    return view('causal.show');
})->name('causal.show'); 

Route::get('/observation/create', function () {
    return view('observation.create');
})->name('observation.create'); 

Route::get('/observation/index', function () {
    return view('observation.index');
})->name('observation.index'); 

Route::get('/observation/show', function () {
    return view('observation.show');
})->name('observation.show'); 

Route::get('/type_activity/create', function () {
    return view('type_activity.create');
})->name('type_activity.create'); 

Route::get('/type_activity/index', function () {
    return view('type_activity.index');
})->name('type_activity.index'); 

Route::get('/type_activity/show', function () {
    return view('type_activity.show');
})->name('type_activity.show'); 

Route::get('/technician/create', function () {
    return view('technician.create');
})->name('technician.create'); 

Route::get('/technician/index', function () {
    return view('technician.index');
})->name('technician.index'); 

Route::get('/technician/show', function () {
    return view('technician.show');
})->name('technician.show'); 

Route::get('/activity/create', function () {
    return view('activity.create');
})->name('activity.create'); 

Route::get('/activity/index', function () {
    return view('activity.index');
})->name('activity.index'); 

Route::get('/activity/show', function () {
    return view('activity.show');
})->name('activity.show'); 

Route::get('/order/create', function () {
    return view('order.create');
})->name('order.create'); 

Route::get('/order/index', function () {
    return view('order.index');
})->name('order.index'); 

Route::get('/order/show', function () {
    return view('order.show');
})->name('order.show'); 