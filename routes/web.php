<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/books', [BooksController::class, "index"])->name("books");
Route::get('/contact', [ContactController::class, "index"])->name("contact");
