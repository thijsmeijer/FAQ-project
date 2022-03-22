<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AskController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LocationController;
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

//get routes

Route::get('/', WelcomeController::class)->name('welcome');

Route::get('/faqs', QuestionController::class);

Route::get('/faqs/{question:slug}', [QuestionController::class, 'show']);

Route::get('/faqs/location/{location:slug}', LocationController::class)->name('location');

Route::get('/faqs/category/{category:slug}', CategoryController::class)->name('category');

Route::get('/ask-question', AskController::class);

//post routes

Route::post('/faqs', [CreateController::class, 'create']);

Route::post('/', [AskController::class, 'store']);

Route::post('/faqs/{question:slug}', [QuestionController::class, 'update']);

//middleware routes

Auth::routes();

Route::get('/create', CreateController::class)->middleware('auth');

Route::post('/create', [CreateController::class, 'update'])->middleware('auth');

Route::view('/home', 'home')->middleware('auth')->name('home');
