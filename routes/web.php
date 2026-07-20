<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AgeCriteriaController;
use App\Http\Controllers\Api\InquiryFormController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DocContactController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ExamScheduleController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HolidayListController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicDisclosureController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\SurgeonCornerController;
use App\Http\Controllers\SyllabusController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// Route::get('/home', function () {
//     return view('website.index');
// });

Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/about-us', [WebController::class, 'aboutUs'])->name('about-us');
Route::get('/products-data/{id}', [WebController::class, 'products'])->name('products-data');
Route::get('/products-details/{id}', [WebController::class, 'productsDetails'])->name('products-details');
Route::get('/contact-us', [WebController::class, 'contactUs'])->name('contact-us');
Route::get('/inquiryform', [WebController::class, 'inquiryform'])->name('inquiryform');
Route::get('/Surgeon-corner', [WebController::class, 'Surgeon_corner'])->name('Surgeon-corner');
Route::get('/quality', [WebController::class, 'quality'])->name('quality');


Route::get('/lang/{locale}', function ($locale) {
    Session::put('site_locale', $locale);
    return redirect()->back();
})->name('lang.switch');


Route::middleware('guest')->group(function () {

    Route::get('login', function () {
        return view('auth.login');
    });
    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/loginSubmit', [AuthController::class, 'login']);

});



Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [AuthController::class, 'dashboard'])
        ->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

    Route::get('/slider-list', [HomeSliderController::class, 'index'])->name('slider-list');
    Route::get('/slider-form/{id?}', [HomeSliderController::class, 'addEdit'])->name('slider-add-edit');
    Route::post('/slider-store', [HomeSliderController::class, 'homeSliderStore'])->name('slider-store');
    Route::get('/slider-delete/{id}', [HomeSliderController::class, 'delete'])->name('slider-delete');


    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::post('/contact_store', [ContactController::class, 'contactStore'])->name('contact-store');


    // Route::get('/inquiry-form-list', [InquiryFormController::class, 'list'])->name('inquiry-form-list');
    // Route::get('/inquiry-form-view/{id}', [InquiryFormController::class, 'view'])->name('inquiry-form-view');
    // Route::get('/inquiry-form-delete/{id}', [InquiryFormController::class, 'delete'])->name('inquiry-form-delete');

    Route::get('/category-list', [CategoryController::class, 'CategoryList'])->name('category-list');
    Route::get('/category-add-edit/{slug}', [CategoryController::class, 'CategoryAddEdit'])->name('category-add-edit');
    Route::post('/category-store', [CategoryController::class, 'CategoryStore'])->name('category-store');
    Route::get('/category-delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category-delete');

    Route::get('products', [ProductController::class, 'productList'])->name('product-list');
    Route::get('products/{slug}', [ProductController::class, 'productAddEdit'])->name('product-add-edit');
    Route::post('products-store', [ProductController::class, 'productStore'])->name('product-store');
    Route::get('products-delete/{id}', [ProductController::class, 'productDelete'])->name('product-delete');
    Route::get('product-detail-delete/{id}', [ProductController::class, 'productDetailDelete'])->name('product-detail-delete');


    Route::get('surgeon-corner-list', [SurgeonCornerController::class, 'reviewList'])->name('surgeon-corner-list');
    Route::get('surgeon-corner/{slug}', [SurgeonCornerController::class, 'reviewAddEdit'])->name('surgeon-corner-add-edit');
    Route::post('surgeon-corner-store', [SurgeonCornerController::class, 'reviewStore'])->name('surgeon-corner-store');
    Route::get('surgeon-corner-delete/{id}', [SurgeonCornerController::class, 'reviewDelete'])->name('surgeon-corner-delete');


    Route::get('quality-list', [QualityController::class, 'qualityList'])->name('quality-list');
    Route::get('quality/{slug}', [QualityController::class, 'qualityAddEdit'])->name('quality-add-edit');
    Route::post('quality-store', [QualityController::class, 'qualityStore'])->name('quality-store');
    Route::get('quality-delete/{id}', [QualityController::class, 'qualityDelete'])->name('quality-delete');


    Route::get('about', [AboutController::class, 'about'])->name('about');
    Route::post('about-store', [AboutController::class, 'aboutStore'])->name('about-store');


});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

