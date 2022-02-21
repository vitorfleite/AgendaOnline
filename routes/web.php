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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index'); 
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'index'])->name('calendar.index');


Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/users/show/{id}', [App\Http\Controllers\AdminController::class, 'show'])->name('admin.user.show');
    Route::post('/admin/users/edit/update/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.user.update');
    Route::get('/admin/users/destroy/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.user.destroy');
});

Route::middleware(['role:finance'])->group(function () {
    Route::get('/finance', [App\Http\Controllers\FinanceController::class, 'index'])->name('finance.index');
});

Route::middleware(['role:support'])->group(function () {
    Route::get('/support', [App\Http\Controllers\SupportController::class, 'index'])->name('support.index');
});

Route::middleware(['role:service'])->group(function () {
    Route::get('/service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service.index');
});