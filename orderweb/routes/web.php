<?php

use App\Http\Controllers\CausalController;
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

Route::prefix('causal')->group(function(){
    Route::get('/index', [CausalController::class, 'index'])->name('causal.index');
    Route::get('/create', [CausalController::class, 'create'])->name('causal.create');
    Route::get('/edit/{id}', [CausalController::class, 'edit'])->name('causal.edit');
    Route::post('/store', [CausalController::class, 'store'])->name('causal.store');
    Route::put('/update/{id}', [CausalController::class, 'update'])->name('causal.update');
    Route::get('/destroy/{id}', [CausalController::class, 'destroy'])->name('causal.destroy');
});



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

Route::get('/activity/create', function () {
    return view('activity.create');
})->name('activity.create');

Route::get('/activity/index', function () {
    return view('activity.index');
})->name('activity.index');

Route::get('/technician/create', function () {
    return view('technician.create');
})->name('technician.create');

Route::get('/technician/index', function () {
    return view('technician.index');
})->name('technician.index');

Route::get('/order/create', function () {
    return view('order.create');
})->name('order.create');

Route::get('/order/index', function () {
    return view('order.index');
})->name('order.index');