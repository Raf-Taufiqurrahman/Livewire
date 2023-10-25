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


Route::group(['prefix' => 'apps', 'as' => 'apps.', 'middleware' => ['auth']], function(){
    // dashboard route
    Route::get('/dashboard', App\Livewire\Dashboard\Index::class)->name('dashboard');
    // categories route
    Route::group(['as' => 'categories.', 'prefix' => 'categories'], function(){
        Route::get('/', App\Livewire\Categories\Index::class)->name('index');
        Route::get('/create', App\Livewire\Categories\Create::class)->name('create');
        Route::get('/edit/{category}', App\Livewire\Categories\Edit::class)->name('edit');
    });
});
