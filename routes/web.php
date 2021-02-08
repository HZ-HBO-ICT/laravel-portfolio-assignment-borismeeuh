<?php

use App\Http\Controllers\WelcomeController;
use \App\Http\Controllers\ProfileController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\FAQController;
use \App\Http\Controllers\ViewController;
use \App\Http\Controllers\MotivationController;

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

//Route::get('posts/{post}', [PostController::class, 'show']);

Route::get('/', [WelcomeController::class, 'returnHomePage']);

Route::get('/home', [WelcomeController::class, 'returnHomePage']);

Route::get('/profile', [ProfileController::class, 'returnProfilePage']);

Route::get('/dashboard', [DashboardController::class, 'returnDashboardPage']);

Route::get('/FAQ', [FAQController::class, 'returnFAQPage']);

Route::get('/motivation', [MotivationController::class, 'returnMotivationPage']);

Route::get('/view', [ViewController::class, 'returnViewPage']);

