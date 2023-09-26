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
    return view('welcome');
});









use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplicationController;
use App\Http\Controllers\SupplicationViewController;

Route::middleware(['auth'])->group(function () {
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/supplications/{category}', [SupplicationController::class, 'index'])->name('supplications.index');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

Route::get('/supplications', [SupplicationController::class, 'index'])->name('supplications');
Route::get('/user_counts/{supplication_id}', [SupplicationController::class,'count'])->name('user_counts');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
