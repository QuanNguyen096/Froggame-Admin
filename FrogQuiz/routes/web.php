<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;



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

Route::redirect('/', '/login');

Route::get('/login',[CustomAuthController::class,'login'])->name('login');
Route::post('/login',[CustomAuthController::class,'login_action'])->name('login_action');
Route::get('/logout',[CustomAuthController::class,'logout'])->name('logout');
Route::get('/home',[CustomAuthController::class,'home'])->name('home')->middleware('AdminRole');


Route::get('/users',[UserInfoController::class,'index'])->name('users')->middleware('AdminRole');

Route::get('/categories',[CategoryController::class,'index'])->name('category')->middleware('AdminRole');

Route::get('/add-questions',[QuestionController::class,'index'])->name('add-questions')->middleware('AdminRole');

Route::post('/add-questions',[QuestionController::class,'create'])->name('add-questions-action');


Route::get('/global-leaderboard', function () {
    return view('global-leaderboard');
})->name('global-leaderboard');

Route::get('/monthly-leaderboard', function () {
    return view('monthly-leaderboard');
})->name('monthly-leaderboard');

Route::get('/daily-leaderboard', function () {
    return view('daily-leaderboard');
})->name('daily-leaderboard');


Route::get('/view-questions', function () {
    return view('view-questions');
})->name('view-questions');

Route::get('/question-packs', function () {
    return view('question-packs');
})->name('question-packs');

Route::get('/payment-requests', function () {
    return view('payment-requests');
})->name('payment-requests');

Route::get('/question-reports', function () {
    return view('question-reports');
})->name('question-reports');

Route::get('/send-notifications', function () {
    return view('send-notifications');
})->name('send-notifications');

Route::get('/re-password', function () {
    return view('re-password');
})->name('re-password');


