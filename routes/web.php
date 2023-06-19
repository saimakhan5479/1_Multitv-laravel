<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\SettingController;

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
    return view('admin.login');
});



Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
        Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [DashboardController::class, 'logout'])->name('admin.logout');
    });
});


//Category Routes
Route::group(['middleware' => 'admin.auth'], function () {
    
Route::group(['prefix' => 'category'], function () {

    Route::get('/category_show', [CategoryController::class, 'category_show'])->name('category.category_show');
    Route::get('/category_add', [CategoryController::class, 'category_add'])->name('category.category_add');
    Route::post('/category_submit', [CategoryController::class, 'category_submit'])->name('category.category_submit');
    Route::get('/category_smt_show', [CategoryController::class, 'category_smt_show'])->name('category.category_smt_show');
    Route::get('/category_delete/{id}', [CategoryController::class, 'category_delete'])->name('category.category_delete');
    Route::get('/category_update/{id}', [CategoryController::class, 'category_update'])->name('category.category_update');
    Route::post('/category_edit/{id}', [CategoryController::class, 'category_edit'])->name('category.category_edit');
    Route::post('/update-status', [CategoryController::class, 'updateStatus'])->name('category.update-status');

});





//Content Routes
Route::group(['prefix' => 'content'], function () {

    Route::get('/content_show', [ContentController::class, 'content_show'])->name('content.content_show');
    Route::get('/content_add', [ContentController::class, 'content_add'])->name('content.content_add');
    Route::post('/content_submit', [ContentController::class, 'store'])->name('content.content_submit');
    Route::get('/content_delete/{id}', [ContentController::class, 'destroy'])->name('content.content_delete');
    Route::get('/content_update/{id}', [ContentController::class, 'update'])->name('content.content_update');
    Route::post('/content_edit/{id}', [ContentController::class, 'edit'])->name('content.content_edit');
    Route::post('/update-status', [ContentController::class, 'updateStatus'])->name('content.update-status');
    Route::post('/update-live', [ContentController::class, 'updateLive'])->name('content.update-live');

});



//Banner Routes
Route::group(['prefix' => 'banner'], function () {

    Route::get('/banner_show', [BannerController::class, 'banner_show'])->name('banner.banner_show');
    Route::get('/banner_add', [BannerController::class, 'banner_add'])->name('banner.banner_add');
    Route::post('/banner_submit', [BannerController::class, 'store'])->name('banner.banner_submit');
    Route::get('/banner_delete/{id}', [BannerController::class, 'destroy'])->name('banner.banner_delete');
    Route::get('/banner_update/{id}', [BannerController::class, 'update'])->name('banner.banner_update');
    Route::post('/banner_edit/{id}', [BannerController::class, 'edit'])->name('banner.banner_edit');
    Route::post('/update-status', [BannerController::class, 'updateStatus'])->name('banner.update-status');

});





//FeedBack Routes
Route::get('/feedback/feedback_show', [FeedbackController::class, 'feedback_show'])->name('feedback.feedback_show');
Route::get('/feedback/feedback_delete/{id}', [FeedbackController::class, 'destroy'])->name('feedback.feedback_delete');



//Report
Route::get('/report/report_show', [ReportController::class, 'report_show'])->name('report.report_show');
Route::get('/report/report_delete/{id}', [ReportController::class, 'destroy'])->name('report.report_delete');




//Notification
Route::group(['prefix' => 'notification'], function () {

    Route::get('/notification_show', [NotificationController::class, 'notification_show'])->name('notification.notification_show');
    Route::get('/notification_add', [NotificationController::class, 'notification_add'])->name('notification.notification_add');
    Route::post('/notification_submit', [NotificationController::class, 'store'])->name('notification.notification_submit');
    Route::get('/notification_delete/{id}', [NotificationController::class, 'destroy'])->name('notification.notification_delete');
});


//Settings
Route::get('/setting/setting_show', [SettingController::class, 'setting_show'])->name('setting.setting_show');
Route::post('/setting/setting_submit', [SettingController::class, 'setting_submit'])->name('setting.setting_submit');


// Update_password
Route::get('/change-password',[DashboardController::class,'change_password'])->name('change.password');
Route::post('/update-password',[DashboardController::class,'update_password'])->name('update.password');
});
