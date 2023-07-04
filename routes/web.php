<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CaretakerController;

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
    return view('/register');
});
Route::group(['middleware' => 'guest'], function (){
    Route::get('/register', [CustomAuthController::class, 'register'])->name('register');
    Route::post('/register', [CustomAuthController::class, 'registerPost'])->name('register');

    Route::get('/login', [CustomAuthController::class, 'login'])->name('login');
    Route::post('/login', [CustomAuthController::class, 'loginPost'])->name('login');
});
Route::group(['middleware' => 'auth'], function (){
    Route::get('', [PatientController::class, 'index'])->name('patients');
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [CustomAuthController::class, 'logout'])->name('logout');

    Route::prefix('patients')->group(function () {
        Route::get('', [PatientController::class, 'index'])->name('patients');
        Route::get('create', [PatientController::class, 'create'])->name('patients.create');
        Route::post('store', [PatientController::class, 'store'])->name('patients.store');
        Route::get('show/{id}', [PatientController::class, 'show'])->name('patients.show');
        Route::get('edit/{id}', [PatientController::class, 'edit'])->name('patients.edit');
        Route::put('edit/{id}', [PatientController::class, 'update'])->name('patients.update');
        Route::delete('destroy/{id}', [PatientController::class, 'destroy'])->name('patients.destroy');
    });

    Route::prefix('caretakers')->group(function () {
        Route::get('', [CaretakerController::class, 'index'])->name('caretakers');
        Route::get('create', [CaretakerController::class, 'create'])->name('caretakers.create');
        Route::post('store', [CaretakerController::class, 'store'])->name('caretakers.store');
        Route::get('show/{id}', [CaretakerController::class, 'show'])->name('caretakers.show');
        Route::get('edit/{id}', [CaretakerController::class, 'edit'])->name('caretakers.edit');
        Route::put('edit/{id}', [CaretakerController::class, 'update'])->name('caretakers.update');
        Route::delete('destroy/{id}', [CaretakerController::class, 'destroy'])->name('caretakers.destroy');

    Route::get('/profile', [App\Http\Controllers\CustomAuthController::class, 'profile'])->name('profile');

});

});


