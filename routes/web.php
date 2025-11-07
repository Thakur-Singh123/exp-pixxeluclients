<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('fronts/welcome');
});
//Front
Route::get('data-bank-details', [App\Http\Controllers\FrontController::class, 'next']);
Route::get('single-service-detail/{id}', [App\Http\Controllers\FrontController::class, 'get_service_detail']);
//Middlewares
Route::group(['middleware' => 'auth'], function() { 
    //Admin middleware
    Route::group(['middleware' => 'Admin'], function() { 
        //Dashboard 
        Route::get('admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');
        //Profile 
        Route::get('admin/profile', [App\Http\Controllers\Admin\ProfileController::class, 'profile']);
        Route::get('admin/edit-profile', [App\Http\Controllers\Admin\ProfileController::class, 'edit_profile']);
        Route::post('admin/update-profile/{id}', [App\Http\Controllers\Admin\ProfileController::class, 'update_profile'])->name('admin.update.profile');
        Route::get('admin/change-password', [App\Http\Controllers\Admin\ProfileController::class, 'change_password']);
        Route::post('admin/submit-change-password/{id}', [App\Http\Controllers\Admin\ProfileController::class, 'submit_change_password'])->name('admin.submit.change.password');
        Route::get('admin/settings', [App\Http\Controllers\Admin\ProfileController::class, 'profile']);
        //Services
        Route::get('admin/services', [App\Http\Controllers\Admin\ExServiceManController::class, 'all_services'])->name('admin.index');
        Route::get('admin/service-create', [App\Http\Controllers\Admin\ExServiceManController::class, 'add_service']);
        Route::post('admin/service-submit', [App\Http\Controllers\Admin\ExServiceManController::class, 'submit_service'])->name('admin.service.submit');
        Route::get('admin/single-service-detail/{id}', [App\Http\Controllers\Admin\ExServiceManController::class, 'single_service']);
        Route::get('admin/edit-service/{id}', [App\Http\Controllers\Admin\ExServiceManController::class, 'edit_service']);
        Route::post('admin/service-update/{id}', [App\Http\Controllers\Admin\ExServiceManController::class, 'update_service'])->name('admin.service.update');
        Route::get('admin/delete-service-detail', [App\Http\Controllers\Admin\ExServiceManController::class, 'delete_service']);
        //Import data
        Route::get('admin/import-create', [App\Http\Controllers\Admin\ImportController::class, 'add_import']);
        Route::post('admin/import-submit', [App\Http\Controllers\Admin\ImportController::class, 'submi_import'])->name('admin.submit.import');
        //Export data
        Route::get('admin/export-service', [App\Http\Controllers\Admin\ExportController::class, 'export_service']);
    });
    //Customer middleware
    Route::group(['middleware' => 'Customer'], function() { 
        //Dashboard
        Route::get('customer/dashboard', [App\Http\Controllers\Customer\DashboardController::class, 'dashboard']); 
    });

});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
