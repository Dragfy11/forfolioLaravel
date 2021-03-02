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


//home

Route::get('/backoffice',[BackofficeController::class, 'index']);

Route::post('/backoffice-storeHeader', [BackofficeController::class, 'storeHeader']);
Route::post('/backoffice-storeFooter', [BackofficeController::class, 'storeFooter']);
Route::post('/backoffice-storeTitre', [BackofficeController::class, 'storeTitre']);

Route::get('/backoffice-showHeader/{id}',[BackofficeController::class,'showHeader']);
Route::get('/backoffice-showFooter/{id}',[BackofficeController::class,'showFooter']);
Route::get('/backoffice-showTitre/{id}',[BackofficeController::class,'showTitre']);

Route::post('/backoffice-deleteHeader/{id}',[BackofficeController::class,'destroyHeader']);
Route::post('/backoffice-deleteFooter/{id}',[BackofficeController::class,'destroyFooter']);
Route::post('/backoffice-deleteTitre/{id}',[BackofficeController::class,'destroyTitre']);



//about

Route::get('/backoffice/about',[BackofficeAboutController::class, 'index']);

Route::post('/backoffice/about-storeHeader', [BackofficeAboutController::class, 'storeHeader']);
Route::post('/backoffice/about-storeFooter', [BackofficeAboutController::class, 'storeFooter']);
Route::post('/backoffice/about-storeTitre', [BackofficeAboutController::class, 'storeTitre']);

Route::get('/backoffice/about-showHeader/{id}',[BackofficeAboutController::class,'showHeader']);
Route::get('/backoffice/about-showFooter/{id}',[BackofficeAboutController::class,'showFooter']);
Route::get('/backoffice/about-showTitre/{id}',[BackofficeAboutController::class,'showTitre']);

Route::post('/backoffice/about-deleteHeader/{id}',[BackofficeAboutController::class,'destroyHeader']);
Route::post('/backoffice/about-deleteFooter/{id}',[BackofficeAboutController::class,'destroyFooter']);
Route::post('/backoffice/about-deleteTitre/{id}',[BackofficeAboutController::class,'destroyTitre']);

//resume
Route::get('/backoffice/resume',[BackofficeResumeController::class, 'index']);

Route::post('/backoffice/resume-storeHeader', [BackofficeResumeController::class, 'storeHeader']);
Route::post('/backoffice/resume-storeFooter', [BackofficeResumeController::class, 'storeFooter']);
Route::post('/backoffice/resume-storeTitre', [BackofficeResumeController::class, 'storeTitre']);

Route::get('/backoffice/resume-showHeader/{id}',[BackofficeResumeController::class,'showHeader']);
Route::get('/backoffice/resume-showFooter/{id}',[BackofficeResumeController::class,'showFooter']);
Route::get('/backoffice/resume-showTitre/{id}',[BackofficeResumeController::class,'showTitre']);

Route::post('/backoffice/resume-deleteHeader/{id}',[BackofficeResumeController::class,'destroyHeader']);
Route::post('/backoffice/resume-deleteFooter/{id}',[BackofficeResumeController::class,'destroyFooter']);
Route::post('/backoffice/resume-deleteTitre/{id}',[BackofficeResumeController::class,'destroyTitre']);

// services
Route::get('/backoffice/services',[BackofficeServicesController::class, 'index']);

Route::post('/backoffice/services-storeService1', [BackofficeServicesController::class, 'storeService1']);
Route::post('/backoffice/services-storeService2', [BackofficeServicesController::class, 'storeService2']);

Route::get('/backoffice/services-showService1/{id}',[BackofficeServicesController::class,'showService1']);
Route::get('/backoffice/services-showService2/{id}',[BackofficeServicesController::class,'showService2']);

Route::post('/backoffice/services-deleteService1/{id}',[BackofficeServicesController::class,'destroyService1']);
Route::post('/backoffice/services-deleteService2/{id}',[BackofficeServicesController::class,'destroyService2']);

//portfolio

Route::get('/backoffice/portfolio',[BackofficePortfolioController::class, 'index']);
Route::get('/backoffice/contact',[BackofficeContactController::class, 'index']);