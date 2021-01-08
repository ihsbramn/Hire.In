<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

//auth
Route::get('/student', [HomeController::class, 'index'])->name('student');
Route::get('/admin', [HomeController::class, 'handleAdmin'])->name('admin')->middleware('admin');
//auth

//Layanan
Route::resource('course', CourseController::class);
Route::resource('certification', CertificationController::class);
Route::resource('seminar', SeminarController::class);
Route::resource('vacancy', VacancyController::class);
//Layanan

Route::group(['prefix' => 'student'], function () {
    Route::get('/daftar', [StudentController::class, 'daftar']);
    Route::get('/course', [StudentController::class, 'course']);
    Route::get('/seminar', [StudentController::class, 'seminar']);
    Route::get('/certification', [StudentController::class, 'certification']);
    Route::get('/vacancy', [StudentController::class, 'vacancy']);
    Route::post('/checkout', [StudentController::class, 'checkout']);
    Route::get('/checkout', [StudentController::class, 'showcheckout']);
    Route::delete('{student}', [StudentController::class, 'destroy']);
});

Route::resource('payment', PaymentController::class);
