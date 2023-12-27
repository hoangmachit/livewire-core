<?php

use App\Http\Livewire\Admin\ForgotPassword;
use App\Http\Livewire\Admin\Home;
use App\Http\Livewire\Admin\Locked;
use App\Http\Livewire\Admin\Login;
use App\Http\Livewire\Admin\Register;
use App\Http\Livewire\Admin\ResetPassword;
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
    return view('welcome');
});

Route::get('home', Home::class);
Route::get('login', Login::class);
Route::get('forgot-password', ForgotPassword::class);
Route::get('locked', Locked::class);
Route::get('register', Register::class);
Route::get('reset-password', ResetPassword::class);
