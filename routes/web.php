<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
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
    return view('soon');
});
Route::group(['prefix' => 'privet'], function () {
    Route::get('/', [HomeController::class, "index"])->name('home');
    Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs');
    Route::get('/blogs/{id}', [BlogsController::class, 'show'])->name('showPost');
    Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');
    Route::get('/contacts', [\App\Http\Controllers\ContactsController::class, 'index'])->name('contacts');
    Route::post('/contacts', [\App\Http\Controllers\ContactsController::class, 'store'])->name('contacts.store');
    Route::post('/comments/{id}', [\App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
});


