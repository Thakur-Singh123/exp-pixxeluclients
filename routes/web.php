<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

//Middlewares
Route::group(['middleware' => 'auth'], function() { 
    //Admin middleware
    Route::group(['middleware' => 'Admin'], function() { 
        //Dashboard 
        Route::get('admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');
        //Profile 
        Route::get('admin/profile', [App\Http\Controllers\Admin\Profile\ProfileController::class, 'profile']);
        Route::get('admin/edit-profile', [App\Http\Controllers\Admin\Profile\ProfileController::class, 'edit_profile']);
        Route::post('admin/update-profile/{id}', [App\Http\Controllers\Admin\Profile\ProfileController::class, 'update_profile'])->name('admin.update.profile');
        Route::get('admin/change-password', [App\Http\Controllers\Admin\Profile\ProfileController::class, 'change_password']);
        Route::post('admin/submit-change-password/{id}', [App\Http\Controllers\Admin\Profile\ProfileController::class, 'submit_change_password'])->name('admin.submit.change.password');
        Route::get('admin/settings', [App\Http\Controllers\Admin\Profile\ProfileController::class, 'profile']);
        //Services
        Route::get('admin/services', [App\Http\Controllers\Admin\ServiceController::class, 'all_services']);
        Route::get('admin/service-create', [App\Http\Controllers\Admin\ServiceController::class, 'add_service']);
        Route::post('admin/service-submit', [App\Http\Controllers\Admin\ServiceController::class, 'submit_service'])->name('admin.service.submit');
    });
    //Customer middleware
    Route::group(['middleware' => 'Customer'], function() { 
        //Dashboard
        Route::get('customer/dashboard', [App\Http\Controllers\Customer\DashboardController::class, 'dashboard']); 
    });

});

Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
