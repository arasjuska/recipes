<?php

use App\Http\Controllers\PageController;
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

// Guest routes
Route::get('/', [PageController::class, 'homePage'])->name('home');
Route::get('/categories/{slug}', [PageController::class, 'categoryPage'])->name('category');
Route::get('/recipes/{slug}', [PageController::class, 'singleRecipePage'])->name('single_recipe');

// Auth routes
Route::group(['middleware' => 'auth'], function () {

    // User routes
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/auth.php';
