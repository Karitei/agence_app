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
})->name('welcome');

Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin_dashboard')->middleware('admin');
Route::get('/agency', [App\Http\Controllers\AgenceController::class, 'index'])->name('agency_dashboard')->middleware('agency');
Route::get('/buisness', [App\Http\Controllers\BuisnessController::class, 'index'])->name('buisness_dashboard')->middleware('buisness');

Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'select_dashboard'])->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add_user', [App\Http\Controllers\UserController::class, 'add_user'])->name('add_user');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::get('/users_list', [App\Http\Controllers\UserController::class, 'userList'])->name('users_list');


Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

