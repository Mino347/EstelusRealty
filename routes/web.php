<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\PropertyTypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\CustomerController;


//use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;


Route::get('/', function (){
    return view('home');
})->name('home');




 Route::resource('houses', HouseController::class)
     -> middleware(['auth','verified'])
     ->name('index', 'houses');

Route::resource('categories', CategoryController::class)
    -> middleware(['auth','verified'])
    ->name('index', 'categories');

Route::resource('properties', PropertyController::class)
    -> middleware(['auth','verified'])
    ->name('index', 'properties');

Route::resource('propertytype', PropertyTypeController::class)
    -> middleware(['auth','verified'])
    ->name('index', 'propertytype')

;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
});

//Route::middleware(['auth', 'role:admin'])->group(function () {
//    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
//    // Other admin routes...
//});
//
//Route::middleware(['auth', 'role:customer'])->group(function () {
//    Route::get('/home', [CustomerController::class, 'home']);
//    // Other customer routes...
//});




Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/propertytype', [PropertyTypeController::class, 'index'])->name('admin.propertytype.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
