<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\MaterialController;

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

Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [HomeController::class, 'contact']);

Route::resource('forms', FormController::class);

Route::get('/plastic', [BlogController::class, 'index']);
Route::get('plastic/{blog:slug}', [BlogController::class, 'show'])->name('plastic');

Route::get('/category-parts/{partCategory:slug}', [PartController::class, 'index'])->name('category-parts');
Route::get('/plastic-part/{part:slug}', [PartController::class, 'show'])->name('plastic-part');
Route::get('/category-parts', [PartController::class, 'showCategories']);

Route::get('/category-materials', [MaterialController::class, 'showCategories']);
Route::get('/category-materials/{slug}', [MaterialController::class, 'index'])->name('category-materials');
Route::get('/plastic-material/{material:slug}', [MaterialController::class, 'show'])->name('plastic-material');
