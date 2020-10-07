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

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/about', function () {return view('frontend.about');});
Route::get('/heartful-listening', function () {return view('frontend.heartful-listening');});
Route::get('/how-it-work', function () {return view('frontend.how-it-work');});
Route::get('/faq', function () {return view('frontend.faq');});
Route::get('/contact', function () {return view('frontend.contact');});
// Route::get('/booking-session2', function () {return view('frontend.booking-session2');});
// Route::view('/booking-session2', 'frontend.booking-session2');
// Route::get('/paymentSuccess', function(){
//     return view('frontend.paymentSuccess');
// });



// Auth::routes();
Auth::routes(['register' => false]);
Route::middleware(['auth'])->group(function () {
    Route::get('/Dashboard', [App\Http\Controllers\BookingController::class, 'AllBooking']);
    Route::post('/filterBooking', [App\Http\Controllers\BookingController::class, 'filterBooking'])->name('filterBooking');
    Route::resource('Counsellor', App\Http\Controllers\CounsellorController::class);

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/booking-session', function () {return view('frontend.booking-session');});
Route::get('/booking-session', [App\Http\Controllers\BookingController::class, 'sessionStep1Index']);
// Route::get('/booking-session2', [App\Http\Controllers\BookingController::class, 'sessionStep1Index2']);
Route::get('/booking-session3', [App\Http\Controllers\BookingController::class, 'sessionStep1Index3']);
Route::get('/booking-payment', [App\Http\Controllers\BookingController::class, 'sessionPayment']);

Route::post('/booking', [App\Http\Controllers\BookingController::class, 'sessionStep1'])->name('sessionStep1');
Route::post('/booking2', [App\Http\Controllers\BookingController::class, 'sessionStep2'])->name('sessionStep2');
Route::post('/booking3', [App\Http\Controllers\BookingController::class, 'sessionStep3'])->name('sessionStep3');
Route::post('/getCounsellorDay', [App\Http\Controllers\BookingController::class, 'getCounsellorDay'])->name('getCounsellorDay');
Route::post('/getCounsellorTime', [App\Http\Controllers\BookingController::class, 'getCounsellorTime'])->name('getCounsellorTime');

//payment Routes
Route::get('paymentSuccess', [App\Http\Controllers\PaymentController::class, 'index']);
Route::Post('pay', [App\Http\Controllers\PaymentController::class, 'pay'])->name('pay');
Route::get('pay-success', [App\Http\Controllers\PaymentController::class, 'success']);
// Route::post('/booking', 'BookingController@sessionStep1')->name('sessionStep1');
