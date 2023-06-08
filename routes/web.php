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

Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::view('/', 'welcome')->name('home');

Route::view('/categories', 'admin.categories.index')->name('categories');
Route::view('/services', 'admin.services.index')->name('services');
Route::view('/orders', 'admin.orders.index')->name('orders');
Route::view('/users', 'admin.users.index')->name('users');
Route::view('/customers', 'admin.customers.index')->name('customers');
Route::view('/admin/home', 'admin.index')->name('admin.home');
