<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChangeRequestController;

Route::get('/', function () {
    return view('welcome');
});



Route::view('login', 'login');
Route::post('login-page', [AuthController::class, 'loginform']);

Route::view('countrychange', 'countrychange');
Route::view('statechange', 'statechange');
Route::view('citieschange', 'citieschange');
Route::view('demo', 'demo');

Route::get('changeall', [ChangeRequestController::class, 'showAllChangeRequests'])->name('changeall');
Route::post('changeall', [ChangeRequestController::class, 'showAllChangeRequests']);
// Route::view('changeall', 'changeall');


// Routes for the status pages
Route::get('/change-requests/approved', [ChangeRequestController::class, 'approved'])->name('change-requests.approved');
Route::get('/change-requests/rejected', [ChangeRequestController::class, 'rejected'])->name('change-requests.rejected');
Route::get('/change-requests/pending', [ChangeRequestController::class, 'pending'])->name('change-requests.pending');


