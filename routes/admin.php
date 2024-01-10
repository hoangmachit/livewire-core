<?php

use App\Http\Livewire\Admin\ForgotPassword;
use App\Http\Livewire\Admin\Index;
use App\Http\Livewire\Admin\Locked;
use App\Http\Livewire\Admin\Login;
use App\Http\Livewire\Admin\Product;
use App\Http\Livewire\Admin\Register;
use App\Http\Livewire\Admin\ResetPassword;
use App\Http\Livewire\Admin\User;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('admin.non.login')->group(function () {
        Route::get('login', Login::class)->name('login');
    });
    Route::get('forgot-password', ForgotPassword::class)->name('forgot_password');
    Route::get('locked', Locked::class)->name('locked');
    Route::get('register', Register::class)->name('register');
    Route::get('reset-password/{id}', ResetPassword::class)->name('reset_password');

    Route::middleware('admin.auth')->group(function () {
        Route::get('', Index::class)->name('index');
        Route::prefix('user')->name('user.')->group(function () {
            Route::get('', User::class)->name('index');
        });
        Route::prefix('product')->name('product.')->group(function () {
            Route::get('', Product::class)->name('index');
        });
    });
});
