<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackofficeAboutController;
use App\Http\Controllers\BackofficeContactController;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\BackofficePortfolioController;
use App\Http\Controllers\BackofficeResumeController;
use App\Http\Controllers\BackofficeServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServicesController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/resume', [ResumeController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/portfolio', [PortfolioController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);


Route::get('/backoffice',[BackofficeController::class, 'index']);
Route::get('/backoffice/about',[BackofficeAboutController::class, 'index']);
Route::get('/backoffice/resume',[BackofficeResumeController::class, 'index']);
Route::get('/backoffice/services',[BackofficeServicesController::class, 'index']);
Route::get('/backoffice/portfolio',[BackofficePortfolioController::class, 'index']);
Route::get('/backoffice/contact',[BackofficeContactController::class, 'index']);