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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// recruitment routes
Route::get('/InsertRecruitment', [App\Http\Controllers\RecruitmentController::class, 'create'])->name('addRecruitment');
Route::post('/InsertRecruitment/store', [App\Http\Controllers\RecruitmentController::class, 'store'])->name('addRecruitment');
Route::get('/ViewRecruitment', [App\Http\Controllers\RecruitmentController::class, 'ViewRecruitment'])->name('ViewRecruitment');


// resume routes
Route::get('/ViewResume', [App\Http\Controllers\ResumeController::class, 'ViewResume'])->name('ViewResume');