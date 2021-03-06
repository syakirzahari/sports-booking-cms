<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', fn() => redirect(route('login')));

Auth::routes();
// Auth::routes(['register' => false]);

Route::get('media/{media}', [App\Http\Controllers\MediaController::class, 'show'])->name('media.show');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('states', App\Http\Controllers\StateController::class);
    
    Route::resource('districts', App\Http\Controllers\DistrictController::class);
    
    Route::resource('sports', App\Http\Controllers\SportController::class);
    
    Route::resource('venues', App\Http\Controllers\VenueController::class);
    
    Route::resource('articles', App\Http\Controllers\ArticleController::class);
    
    Route::resource('users', App\Http\Controllers\UserController::class);
    
    Route::resource('sportVenues', App\Http\Controllers\SportVenueController::class);
    
    Route::resource('vendors', App\Http\Controllers\VendorController::class);

    Route::resource('feedbacks', App\Http\Controllers\FeedbackController::class);

    Route::get('getDistrict',[ App\Http\Controllers\DistrictController::class, 'getDistrict'])->name('getDistrict');

    Route::get('getVenue',[ App\Http\Controllers\VenueController::class, 'getVenue'])->name('getVenue');

    Route::resource('articleTypes', App\Http\Controllers\Xref\ArticleTypeController::class);

    Route::resource('imageSliders', App\Http\Controllers\ImageSliderController::class);

    Route::resource('slots', App\Http\Controllers\SlotController::class);

    Route::resource('slotAvailabilities', App\Http\Controllers\SlotAvailabilityController::class);

    Route::resource('bookings', App\Http\Controllers\BookingController::class);
});














