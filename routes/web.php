<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('fronts/welcome');
// });
//Front
Route::get('/', [App\Http\Controllers\FrontController::class, 'welcome']);
Route::get('data-bank-details', [App\Http\Controllers\FrontController::class, 'next']);
Route::get('single-service-detail/{id}', [App\Http\Controllers\FrontController::class, 'service_detail']);
Route::get('single-window-detail/{id}', [App\Http\Controllers\FrontController::class, 'window_detail']);
Route::get('single-veer-nari-detail/{id}', [App\Http\Controllers\FrontController::class, 'veer_nari_detail']);
Route::get('about-us', [App\Http\Controllers\FrontController::class, 'about']);
Route::get('forms', [App\Http\Controllers\FrontController::class, 'jobs']);
Route::get('outreach', [App\Http\Controllers\FrontController::class, 'outreach']);
Route::get('doc', [App\Http\Controllers\FrontController::class, 'doc']);
Route::get('Baatcheet', [App\Http\Controllers\FrontController::class, 'Baatcheet']);
Route::get('funeral', [App\Http\Controllers\FrontController::class, 'funeral']);
Route::get('echs', [App\Http\Controllers\FrontController::class, 'echs']);
Route::get('canteen', [App\Http\Controllers\FrontController::class, 'canteen']);
Route::get('awpo', [App\Http\Controllers\FrontController::class, 'awpo']);
Route::get('rallies', [App\Http\Controllers\FrontController::class, 'rallies']);

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
        //Widows
        Route::get('admin/widows', [App\Http\Controllers\Admin\WidowController::class, 'all_widows'])->name('widow.index');;
        Route::get('admin/widow-create', [App\Http\Controllers\Admin\WidowController::class, 'add_widow']);
        Route::post('admin/widow-submit', [App\Http\Controllers\Admin\WidowController::class, 'submit_widow'])->name('admin.submit.widow');
        Route::get('admin/single-widow-detail/{id}', [App\Http\Controllers\Admin\WidowController::class, 'single_widow']);
        Route::get('admin/edit-widow/{id}', [App\Http\Controllers\Admin\WidowController::class, 'edit_widow']);
        Route::post('admin/update-widow/{id}', [App\Http\Controllers\Admin\WidowController::class, 'update_widow'])->name('admin.update.widow');
        Route::get('admin/delete-widow', [App\Http\Controllers\Admin\WidowController::class, 'destroy']);
        //Veer Naries
        Route::get('admin/veer-naries', [App\Http\Controllers\Admin\VeerNariController::class, 'all_veer_naries'])->name('veer.index');
        Route::get('admin/veer-nari-create', [App\Http\Controllers\Admin\VeerNariController::class, 'add_veer_nari']);
        Route::post('admin/submit-veer-nari', [App\Http\Controllers\Admin\VeerNariController::class, 'submit_veer_nari'])->name('admin.submit.vnari');
        Route::get('admin/edit-veer-nari/{id}', [App\Http\Controllers\Admin\VeerNariController::class, 'edit_veer_nari']);
        Route::get('admin/single-veer-nari-detail/{id}', [App\Http\Controllers\Admin\VeerNariController::class, 'single_veer_nari']);
        Route::post('admin/update-veer-nari/{id}', [App\Http\Controllers\Admin\VeerNariController::class, 'update_veer_nari'])->name('admin.update.vnari');
        Route::get('admin/delete-veer-nari', [App\Http\Controllers\Admin\VeerNariController::class, 'destroy']);
        //News
        Route::get('admin/news', [App\Http\Controllers\Admin\NewsController::class, 'all_news'])->name('admin.news');
        Route::get('admin/news-create', [App\Http\Controllers\Admin\NewsController::class, 'add_news']);
        Route::post('admin/submit-news', [App\Http\Controllers\Admin\NewsController::class, 'submit_news'])->name('admin.submit.news');
        Route::get('admin/edit-news/{id}', [App\Http\Controllers\Admin\NewsController::class, 'edit_news']);
        Route::get('admin/single-news-detail/{id}', [App\Http\Controllers\Admin\NewsController::class, 'single_news']);
        Route::post('admin/update-news/{id}', [App\Http\Controllers\Admin\NewsController::class, 'update_news'])->name('admin.update.news');
        Route::get('admin/delete-news', [App\Http\Controllers\Admin\NewsController::class, 'destroy']);
        //Import data
        Route::get('admin/import-create', [App\Http\Controllers\Admin\ImportController::class, 'add_import']);
        Route::post('admin/import-submit', [App\Http\Controllers\Admin\ImportController::class, 'submi_import'])->name('admin.submit.import');
        //Export data
        Route::get('admin/export-service', [App\Http\Controllers\Admin\ExportController::class, 'export_page']);
        Route::get('admin/download-service', [App\Http\Controllers\Admin\ExportController::class, 'export_service'])->name('export.download');
    });
    //Customer middleware
    Route::group(['middleware' => 'Customer'], function() { 
        //Dashboard
        Route::get('customer/dashboard', [App\Http\Controllers\Customer\DashboardController::class, 'dashboard']); 
    });
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
