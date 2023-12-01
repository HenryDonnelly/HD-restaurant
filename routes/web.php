<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FoodController as AdminFoodController;
use App\Http\Controllers\User\FoodController as UserFoodController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Route::resource('App\Http\Controllers\User\FoodController');
// Route::resource('App\Http\Controllers\Admin\FoodController');

Route::resource('/admin/foods', AdminFoodController::class)->middleware(['auth'])->names('admin.foods');
Route::resource('/user/foods', UserFoodController::class)->middleware(['auth'])->names('user.foods')->only(['index','show']);
Route::post('/admin/foods', [FoodController::class, 'store'])->name('admin.foods.store');
require __DIR__.'/auth.php';
