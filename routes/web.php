<?php

use App\Http\Controllers\Admin\CityController as AdminCityController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DomainController as AdminDomainController;
use App\Http\Controllers\Admin\OfferController as AdminOfferController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Agent\OfferController;

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

// agent route 

Route::prefix('agent')->name('agent.')->group(function () {
    Route::resource('offers', OfferController::class);
});



////////// Admine routes /////////////////////////////////////////////////////////////////

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('index');
    Route::get('/users',[AdminUserController::class,'index'])->name('users.index');
    Route::get('/offers',[AdminOfferController::class,'index'])->name('offers.index');
    Route::get('/cities',[AdminCityController::class,'index'])->name('cities.index');
    Route::get('/domains',[AdminDomainController::class,'index'])->name('domains.index');
});

require __DIR__.'/auth.php';
