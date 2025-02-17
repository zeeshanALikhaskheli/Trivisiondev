<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;

use App\Http\Controllers\VideoDownloadController;

Route::get('/', function () {
    return view('layout.index');
});



Route::get('/blog', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/generate', [BlogController::class, 'generate'])->name('blog.generate');


Route::get('download', [VideoDownloadController::class, 'index']);
Route::post('download', [VideoDownloadController::class, 'download']);

