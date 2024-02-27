<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CausalController;
use App\Http\Controllers\ObservationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TechnicianController;
use App\Http\Controllers\TypeActivityController;
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

Route::get('/', [AuthController::class, 'index']); 

Route::middleware('auth')->get('/index', function () {
    return view('index');
})->name('index'); 

/*Route::get('/test2', function () {
    return view('test2');
})->name('test2'); */

Route::prefix('auth')->group(function(){
    Route::get('/index', [AuthController::class, 'index'])->name('auth.index');   
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login'); 
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout'); 
    Route::get('/register', [AuthController::class, 'create'])->name('auth.register'); 
    Route::post('/register', [AuthController::class, 'store'])->name('auth.store'); 
});

Route::middleware(['auth', 'can:administrador'])->prefix('causal')->group(function(){
    Route::get('/index', [CausalController::class, 'index'])->name('causal.index');
    Route::get('/create', [CausalController::class, 'create'])->name('causal.create');
    Route::get('/edit/{id}', [CausalController::class, 'edit'])->name('causal.edit'); 
    Route::post('/create', [CausalController::class, 'store'])->name('causal.store'); 
    Route::put('/edit/{id}', [CausalController::class, 'update'])->name('causal.update'); 
    Route::get('/destroy/{id}', [CausalController::class, 'destroy'])->name('causal.destroy'); 
});

Route::middleware(['auth', 'can:administrador'])->prefix('observation')->group(function(){
    Route::get('/index', [ObservationController::class, 'index'])->name('observation.index');
    Route::get('/create', [ObservationController::class, 'create'])->name('observation.create');
    Route::get('/edit/{id}', [ObservationController::class, 'edit'])->name('observation.edit'); 
    Route::post('/create', [ObservationController::class, 'store'])->name('observation.store'); 
    Route::put('/edit/{id}', [ObservationController::class, 'update'])->name('observation.update'); 
    Route::get('/destroy/{id}', [ObservationController::class, 'destroy'])->name('observation.destroy'); 
});

Route::middleware(['auth', 'can:administrador'])->prefix('type_activity')->group(function(){
    Route::get('/index', [TypeActivityController::class, 'index'])->name('type_activity.index');
    Route::get('/create', [TypeActivityController::class, 'create'])->name('type_activity.create');
    Route::get('/edit/{id}', [TypeActivityController::class, 'edit'])->name('type_activity.edit'); 
    Route::post('/create', [TypeActivityController::class, 'store'])->name('type_activity.store'); 
    Route::put('/edit/{id}', [TypeActivityController::class, 'update'])->name('type_activity.update'); 
    Route::get('/destroy/{id}', [TypeActivityController::class, 'destroy'])->name('type_activity.destroy'); 
});

Route::middleware(['auth', 'can:supervisor'])->prefix('technician')->group(function(){
    Route::get('/index', [TechnicianController::class, 'index'])->name('technician.index');
    Route::get('/create', [TechnicianController::class, 'create'])->name('technician.create');
    Route::get('/edit/{document}', [TechnicianController::class, 'edit'])->name('technician.edit'); 
    Route::post('/create', [TechnicianController::class, 'store'])->name('technician.store'); 
    Route::put('/edit/{document}', [TechnicianController::class, 'update'])->name('technician.update'); 
    Route::get('/destroy/{document}', [TechnicianController::class, 'destroy'])->name('technician.destroy');
});

Route::middleware(['auth', 'can:admin-supervisor'])->prefix('activity')->group(function(){
    Route::get('/index', [ActivityController::class, 'index'])->name('activity.index');
    Route::get('/create', [ActivityController::class, 'create'])->name('activity.create');
    Route::get('/edit/{id}', [ActivityController::class, 'edit'])->name('activity.edit'); 
    Route::post('/create', [ActivityController::class, 'store'])->name('activity.store'); 
    Route::put('/edit/{id}', [ActivityController::class, 'update'])->name('activity.update'); 
    Route::get('/destroy/{id}', [ActivityController::class, 'destroy'])->name('activity.destroy');
});

Route::middleware(['auth', 'can:admin-supervisor'])->prefix('order')->group(function(){
    Route::get('/index', [OrderController::class, 'index'])->name('order.index');
    Route::get('/create', [OrderController::class, 'create'])->name('order.create');
    Route::get('/edit/{id}', [OrderController::class, 'edit'])->name('order.edit'); 
    Route::post('/create', [OrderController::class, 'store'])->name('order.store'); 
    Route::put('/edit/{id}', [OrderController::class, 'update'])->name('order.update'); 
    Route::get('/destroy/{id}', [OrderController::class, 'destroy'])->name('order.destroy');
    Route::get('/add_activity/{order_id}/{activity_id}', [OrderController::class, 'add_activity'])->name('order.add_activity');
    Route::get('/remove_activity/{order_id}/{activity_id}', [OrderController::class, 'remove_activity'])->name('order.remove_activity');
});


Route::middleware(['auth', 'can:administrador'])->prefix('reports')->group(function(){
    Route::get('/index', [ReportController::class, 'index'])->name('reports.index');
    Route::get('/export_technicians', [ReportController::class, 'export_technicians'])->name('reports.technicians');
    Route::post('/export_activities_by_technician', [ReportController::class, 'export_activities_by_technician'])->name('reports.activities_technician');
});


