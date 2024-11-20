<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::group(['middleware' => 'auth','prefix' => 'admin-dashboard'],  function () {
    Route::get('/', [DashboardController::class,'dashboard'])->name('admin.dashboard');

    Route::resource('/admin', AdminController::class);
});