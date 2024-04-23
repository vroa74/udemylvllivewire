<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Livewire\Home\Inicio;
use App\Livewire\Category\CategoryComponent;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/inicio', Inicio::class)->name('inicio');
Route::get('/categorias', CategoryComponent::class)->name('categories');
