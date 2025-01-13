<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::resource('/books', BooksController::class);
    Route::get('/contact', [ContactController::class, "index"])->name("contact");
    Route::post('/contact', [ContactController::class, "send"]);
});


