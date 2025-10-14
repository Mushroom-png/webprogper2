<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\friendcontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/friend',[friendcontroller::class,'index'])->name('frenCon'); 