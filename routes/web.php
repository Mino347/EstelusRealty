<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HouseController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;


Route::get('/', function (){
    return view('home');
})->name('home');


 Route::resource('houses', HouseController::class)
     -> middleware(['auth','verified'])
     ->name('index', 'houses');

Route::resource('categories', CategoryController::class)
    -> middleware(['auth','verified']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    });
});



Route::resource('agents', AgentController::class)
    ->middleware(['auth', 'verified'])
    ->name('index', 'agents');
