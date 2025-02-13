<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('layout.index');
});



Route::get('/blog', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/generate', [BlogController::class, 'generate'])->name('blog.generate');
