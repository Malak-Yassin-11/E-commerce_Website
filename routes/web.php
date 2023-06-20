<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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
Route::view('add/product', 'Admin.addproduct')->name('add.product');
// Route::view('all/customers', 'Admin.customers')->name('all.customers');
// Route::view('dashboard', 'Admin.dashboard')->name('dashboard');
Route::view('all/orders', 'Admin.orders')->name('all.orders');
// Route::view('all/products', 'Admin.products')->name('all.products');
Route::view('order/receipt', 'Admin.receipt')->name('order.receipt');
// Route::view('login', 'login')->name('login');
// Route::view('signup', 'signup')->name('signup');
Route::view('creditcard', 'Customer.creditcard')->name('creditcard');
Route::view('/', 'Customer.home')->name('home');
Route::view('results', 'customer.results')->name('results');
Route::view('shoppingcart', 'Customer.shoppingcart')->name('shoppingcart');

///////////////////////////////////////////////////////////////////////////
Route::get('signup', [RegisterationController::class, 'Register'])->name('signup');
Route::post('customer/save', [RegisterationController::class, 'SaveCustomer'])->name('save.customer');
Route::get('login', [RegisterationController::class, 'Login'])->name('login');
Route::post('check/login', [RegisterationController::class, 'CheckLogin'])->name('check.login');
Route::get('logout', [RegisterationController::class, 'Logout'])->name('logout');
Route::get('all/customers', [AdminController::class, 'ShowAllCustomer'])->name('all.customers');
Route::get('dashboard', [AdminController::class, 'ShowRecentCustomer'])->name('dashboard');
// Route::get('dashboard', [AdminController::class, 'ShowRecentProducts'])->name('dashboard');
Route::post('add/product', [AdminController::class, 'AddProduct'])->name('addprod');
Route::get('all/products', [AdminController::class, 'ShowProduct'])->name('all.products');

Route::post('results', [HomeController::class, 'search'])->name('search.results');
Route::post('filter/results', [HomeController::class, 'filter'])->name('filter.results');
