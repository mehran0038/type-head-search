<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('form', [TestController::class, 'index']);
Route::get('search-autocomplete', [TestController::class, 'searchAutocomplete']);