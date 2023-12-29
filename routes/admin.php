<?php

use App\Http\Livewire\Admin\ForgotPassword;
use App\Http\Livewire\Admin\Index;
use App\Http\Livewire\Admin\Locked;
use App\Http\Livewire\Admin\Login;
use App\Http\Livewire\Admin\Register;
use App\Http\Livewire\Admin\ResetPassword;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('admin.auth')->group(function () {
        Route::get('', Index::class)->name('index');
    });

    Route::middleware('admin.non.login')->group(function () {
        Route::get('login', Login::class)->name('login');
    });

    Route::get('forgot-password', ForgotPassword::class)->name('forgot_password');
    Route::get('locked', Locked::class)->name('locked');
    Route::get('register', Register::class)->name('register');
    Route::get('reset-password/{id}', ResetPassword::class)->name('reset_password');
});
