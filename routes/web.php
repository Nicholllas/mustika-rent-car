<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\DetailController;
use App\Http\Controllers\Front\LandingController;
use App\Http\Controllers\Front\PaymentController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Admin\ItemController as AdminItemController;
use App\Http\Controllers\Admin\TypeController as AdminTypeController;
use App\Http\Controllers\Admin\BrandController as AdminBrandController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\VariantController as AdminVariantController;
use App\Http\Controllers\Admin\FAQController as AdminFAQController;
use App\Http\Controllers\Admin\PromotionController as AdminPromotionController;
use App\Http\Controllers\Front\CatalogueController;
use App\Http\Controllers\Front\ProfileController;

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

Route::name('front.')->group(function (){
    Route::get('/', [LandingController::class, 'index'])->name('index');
    Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue');
    Route::get('/catalogue/brand/{brand}', [CatalogueController::class, 'brand'])->name('catalogue.brand');
    Route::get('/catalogue/type/{type}', [CatalogueController::class, 'type'])->name('catalogue.type');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/detail/{slug}', [DetailController::class, 'index'])->name('detail');
    Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success');

    Route::group(['middleware' => 'auth'], function()
    {
        Route::get('/checkout/{slug}', [CheckoutController::class, 'index'])->name('checkout');
        Route::post('/checkout/{slug}', [CheckoutController::class, 'store'])->name('checkout.store');
        Route::get('/payment/{bookingId}', [PaymentController::class, 'index'])->name('payment');
        Route::post('/payment/{bookingId}', [PaymentController::class, 'update'])->name('payment.update');
    });
});

//Jetsteam Auth
Route::prefix('admin')->name('admin.')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'admin',
])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('brands', AdminBrandController::class);
    Route::resource('types', AdminTypeController::class);
    Route::resource('faqs', AdminFAQController::class);
    Route::resource('items', AdminItemController::class);
    Route::resource('bookings', AdminBookingController::class);
    Route::resource('promotions', AdminPromotionController::class);




});
