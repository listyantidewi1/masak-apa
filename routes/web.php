<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\RecipesController;
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

// Route::get('/', function () {
//     return "Test route";
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin home controller routes
Route::get('/admin', [AdminHomeController::class, 'home'])->name('admin.home.index');

//route resource for ingredients
Route::resource('/admin/ingredients', IngredientsController::class);

//route resource for recipes
Route::resource('/admin/recipes', RecipesController::class);
