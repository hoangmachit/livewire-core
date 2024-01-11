<?php

use App\Livewire\Admin\ForgotPassword;
use App\Livewire\Admin\Index;
use App\Livewire\Admin\Locked;
use App\Livewire\Admin\Login;
use App\Livewire\Admin\Product\ProductCreate;
use App\Livewire\Admin\Product\ProductIndex;
use App\Livewire\Admin\Register;
use App\Livewire\Admin\ResetPassword;
use App\Livewire\Admin\User\UserCreate;
use App\Livewire\Admin\User\UserEdit;
use App\Livewire\Admin\User\UserIndex;
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
            Route::get('', UserIndex::class)->name('index');
            Route::get('create', UserCreate::class)->name('create');
            Route::get('edit/{user}', UserEdit::class)->name('edit');
        });
        Route::prefix('product')->name('product.')->group(function () {
            Route::get('', ProductIndex::class)->name('index');
            Route::get('create', ProductCreate::class)->name('create');
        });
    });
});
