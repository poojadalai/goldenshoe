<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomAuthController;



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


Route::get('/index', function () {
    return view('index');
});

// Route::get('/products', function () {
//     return view('components.product');
// });

 Route::get('/products', [ProductController::class, 'show']);

Route::get('/details', function () {
    return view('components.details');
});


Route::get('/cart', function () {
    return view('components.cart');
});

Route::get('/account', function () {
    return view('auth.login');
});

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('post-login', [CustomAuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register');
Route::post('post-registration', [CustomAuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');  