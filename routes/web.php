<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ChangeRequestController;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('welcome');
});



// Route::view('login', 'login');

Route::view('countrychange', 'countrychange');
Route::view('statechange', 'statechange');
Route::view('citieschange', 'citieschange');
Route::view('demo', 'demo');

Route::get('changeall', [ChangeRequestController::class, 'showAllChangeRequests'])->name('changeall');
Route::post('changeall', [ChangeRequestController::class, 'showAllChangeRequests']);



// Routes for the status pages
Route::get('/change-requests/approved', [ChangeRequestController::class, 'approved'])->name('change-requests.approved');
Route::get('/change-requests/rejected', [ChangeRequestController::class, 'rejected'])->name('change-requests.rejected');
Route::get('/change-requests/pending', [ChangeRequestController::class, 'pending'])->name('change-requests.pending');



// Show the create change request form
Route::get('/change-requests/create', [ChangeRequestController::class, 'create'])->name('change-requests.create');

// Store the new change request in the database
Route::post('/change-requests', [ChangeRequestController::class, 'store'])->name('change-requests.store');

Route::get('send-email', [MailController::class, 'sendEmail']);


Route::middleware('guest')->group(function () {
    Route::get('/login', [RegisterController::class, 'index'])->name('login');
    Route::post('/login', [RegisterController::class, 'create']);
    Route::get('/verify/registration', [RegisterController::class, 'store'])
        ->name('verify.registration')
        ->middleware('signed');
});
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::post('/logout', function (Illuminate\Http\Request $request) {
        Illuminate\Support\Facades\Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    })->name('logout');
});

Route::get('/login2', [LoginController::class, 'index'])->name('login2');
Route::post('/login2', [LoginController::class, 'create']);
Route::get('/verify/login2', [LoginController::class, 'store'])
    ->name('verify.login2')
    ->middleware('signed');
