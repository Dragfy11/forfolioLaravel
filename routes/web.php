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

Route::get('/backoffice-editHeader/{id}',[BackofficeController::class,'editHeader']);
Route::post('/backoffice-updateHeader/{id}',[BackofficeController::class,'updateHeader']);

Route::get('/backoffice-editFooter/{id}',[BackofficeController::class,'editFooter']);
Route::post('/backoffice-updateFooter/{id}',[BackofficeController::class,'updateFooter']);

Route::get('/backoffice-editTitre/{id}',[BackofficeController::class,'editTitre']);
Route::post('/backoffice-updateTitre/{id}',[BackofficeController::class,'updateTitre']);




//about

Route::get('/backoffice/about',[BackofficeAboutController::class, 'index']);

Route::post('/backoffice/about-storeUserList1', [BackofficeAboutController::class, 'storeUserList1']);
Route::post('/backoffice/about-storeUserList2', [BackofficeAboutController::class, 'storeUserList2']);


Route::get('/backoffice/about-showUserList1/{id}',[BackofficeAboutController::class,'showUserList1']);
Route::get('/backoffice/about-showUserList2/{id}',[BackofficeAboutController::class,'showUserList2']);


Route::post('/backoffice/about-deleteUserList1/{id}',[BackofficeAboutController::class,'destroyUserList1']);
Route::post('/backoffice/about-deleteUserList2/{id}',[BackofficeAboutController::class,'destroyUserList2']);


Route::get('/backoffice/about-editUserList1/{id}',[BackofficeAboutController::class,'editUserList1']);
Route::post('/backoffice/about-updateUserList1/{id}',[BackofficeAboutController::class,'updateUserList1']);
Route::get('/backoffice/about-editUserList2/{id}',[BackofficeAboutController::class,'editUserList2']);
Route::post('/backoffice/about-updateUserList2/{id}',[BackofficeAboutController::class,'updateUserList2']);
Route::get('/backoffice/about-editUserList4/{id}',[BackofficeAboutController::class,'editUserList4']);
Route::post('/backoffice/about-updateUserList4/{id}',[BackofficeAboutController::class,'updateUserList4']);
Route::get('/backoffice/about-editUserTimeList/{id}',[BackofficeAboutController::class,'editUserTimeList']);
Route::post('/backoffice/about-updateUserTimeList/{id}',[BackofficeAboutController::class,'updateUserTimeList']);

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

Route::get('/backoffice/services-editService1/{id}',[BackofficeServicesController::class,'editService1']);
Route::post('/backoffice/services-updateService1/{id}',[BackofficeServicesController::class,'updateService1']);


Route::get('/backoffice/services-editService2/{id}',[BackofficeServicesController::class,'editService2']);
Route::post('/backoffice/services-updateService2/{id}',[BackofficeServicesController::class,'updateService2']);

//portfolio

Route::get('/backoffice/portfolio',[BackofficePortfolioController::class, 'index']);

//contact
Route::get('/backoffice/contact',[BackofficeContactController::class, 'index']);

Route::post('/backoffice/contact-storeContact1', [BackofficeContactController::class, 'storeContact1']);
Route::post('/backoffice/contact-storeContact2', [BackofficeContactController::class, 'storeContact2']);
Route::post('/backoffice/contact-storeContactIcon', [BackofficeContactController::class, 'storeContactIcon']);

Route::get('/backoffice/contact-showContact1/{id}',[BackofficeContactController::class,'showService1']);
Route::get('/backoffice/contact-showContact2/{id}',[BackofficeContactController::class,'showContact2']);
Route::get('/backoffice/contact-showContactIcon/{id}',[BackofficeContactController::class,'showContactIcon']);

Route::post('/backoffice/contact-deleteContact1/{id}',[BackofficeContactController::class,'destroyContact1']);
Route::post('/backoffice/contact-deleteContact2/{id}',[BackofficeContactController::class,'destroyContact2']);
Route::post('/backoffice/contact-deleteContactIcon/{id}',[BackofficeContactController::class,'destroyContactIcon']);

Route::get('/backoffice/contact-editContact1/{id}',[BackofficeContactController::class,'editContact1']);
Route::post('/backoffice/contact-updateContact1/{id}',[BackofficeContactController::class,'updateContact1']);


Route::get('/backoffice/contact-editContact2/{id}',[BackofficeContactController::class,'editContact2']);
Route::post('/backoffice/contact-updateContact2/{id}',[BackofficeContactController::class,'updateContact2']);
