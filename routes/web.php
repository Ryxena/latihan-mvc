<?php

use App\Http\Controllers\ClothingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('clothing', ClothingController::class);
