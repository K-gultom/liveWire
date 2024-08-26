<?php

use App\Http\Controllers\All\fisrtController;
use App\Http\Controllers\User\userController;
use App\Livewire\TestPost;
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
    return view('firstScreen');
});

Route::controller(userController::class)->group(function(){
    Route::get('/register', 'index');
});

Route::get('/provinsi', function () {
    return view('Screen.provinsi.provinsi');
});