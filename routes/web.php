<?php

use App\Http\Controllers\WelcomeController;
use \App\Http\Controllers\ProfileController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\FAQController;
use \App\Http\Controllers\ViewController;
use \App\Http\Controllers\MotivationController;
use \App\Http\Controllers\ProfessionController;
use \App\Http\Controllers\ArticleController;
use \App\Http\Controllers\GradeController;

use \App\Http\Controllers\PostController;

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

Route::get('/', [WelcomeController::class, 'returnHomePage']);

Route::get('/home', [WelcomeController::class, 'returnHomePage']);

Route::get('/profile', [ProfileController::class, 'returnProfilePage'])->middleware(['auth']);

Route::get('/dashboard', [DashboardController::class, 'returnDashboardPage'])->name("dashboard");

Route::get('/motivation', [MotivationController::class, 'returnMotivationPage']);

Route::get('/view', [ViewController::class, 'returnViewPage']);

Route::resource('/profession', ProfessionController::class);

Route::resource('/FAQ', FAQController::class);

Route::resource('/grade', GradeController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
