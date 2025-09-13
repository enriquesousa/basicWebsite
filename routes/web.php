<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout'); 

Route::post('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::get('/verify', [AdminController::class, 'ShowVerification'])->name('custom.verification.form');
Route::post('/verify', [AdminController::class, 'VerificationVerify'])->name('custom.verification.verify');

Route::middleware('auth')->group(function () {
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile'); 
    Route::post('/profile/store', [AdminController::class, 'ProfileStore'])->name('profile.store');
    Route::post('/admin/password/update', [AdminController::class, 'AdminPasswordUpdate'])->name('admin.password.update'); 
});

Route::middleware('auth')->group(function () {

    // Review Routes
    Route::controller(ReviewController::class)->group(function(){
        Route::get('/all/review', 'AllReview')->name('all.review');
        Route::get('/add/review', 'AddReview')->name('add.review');
        Route::post('/store/review', 'StoreReview')->name('store.review');
        Route::get('/edit/review/{id}', 'EditReview')->name('edit.review');
        Route::post('/update/review', 'UpdateReview')->name('update.review');
        Route::get('/delete/review/{id}', 'DeleteReview')->name('delete.review');
    });

    // Slider (Hero) Routes - Es solo un record
    Route::controller(SliderController::class)->group(function(){
        Route::get('/get/slider', 'GetSlider')->name('get.slider'); 
        Route::post('/update/slider', 'UpdateSlider')->name('update.slider');
        Route::post('/edit-slider/{id}', 'EditSlider');
        Route::post('/edit-features/{id}', 'EditFeatures');
        Route::post('/edit-reviews/{id}', 'EditReviews');
        Route::post('/edit-answers/{id}', 'EditAnswers');
    });

    // All Features
    Route::controller(HomeController::class)->group(function(){
        Route::get('/all/features', 'AllFeatures')->name('all.features');
        Route::get('/add/feature', 'AddFeature')->name('add.feature');
        Route::post('/store/feature', 'StoreFeature')->name('store.feature');
        Route::get('/edit/feature/{id}', 'EditFeature')->name('edit.feature');
        Route::post('/update/feature', 'UpdateFeature')->name('update.feature');
        Route::get('/delete/feature/{id}', 'DeleteFeature')->name('delete.feature');
    });

    // Section Clarifie
    Route::controller(HomeController::class)->group(function(){
        Route::get('/get/clarifies', 'GetClarifie')->name('get.clarifies');
        Route::post('/update/clarifie', 'UpdateClarifie')->name('update.clarifie');
    });

    // Section Financial
    Route::controller(HomeController::class)->group(function(){
        Route::get('/get/financial', 'GetFinancial')->name('get.financial');
        Route::post('/update/financial', 'UpdateFinancial')->name('update.financial');
    });

    // Section Video
    Route::controller(HomeController::class)->group(function(){
        Route::get('/get/video', 'GetVideo')->name('get.video');
        Route::post('/update/video', 'UpdateVideo')->name('update.video');
        Route::get('/all/connect', 'AllConnect')->name('all.connect');
        Route::get('/add/connect', 'AddConnect')->name('add.connect');
        Route::post('/store/connect', 'StoreConnect')->name('store.connect');
        Route::get('/edit/connect/{id}', 'EditConnect')->name('edit.connect');
        Route::post('/update/connect', 'UpdateConnect')->name('update.connect');
        Route::get('/delete/connect/{id}', 'DeleteConnect')->name('delete.connect');
        Route::post('/update-editable-connect/{id}', 'UpdateEditableConnect');
    });

    // Section Faqs
    Route::controller(HomeController::class)->group(function(){
        Route::get('/all/faqs', 'AllFaqs')->name('all.faqs');
        Route::get('/add/faqs', 'AddFaqs')->name('add.faqs');
        Route::post('/store/faqs', 'StoreFaqs')->name('store.faqs');
        Route::get('/edit/faq/{id}', 'EditFaq')->name('edit.faq');
        Route::post('/update/faq', 'UpdateFaq')->name('update.faq');
        Route::get('/delete/faq/{id}', 'DeleteFaq')->name('delete.faq');
    });
   
    
    
});