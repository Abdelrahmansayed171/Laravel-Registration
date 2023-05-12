<?php

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LanguageController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/error404', function () {
    return view('error404');
});

Route::get('customer/{id}', [CustomerController::class, 'show']);

Route::get('/sendmail/{username}', [MailController::class, 'sendMail']);



Route::get('/changelang', [LanguageController::class, 'change']);



Route::post('/register', [CustomerController::class, 'register']);


Route::post('/authenticate', [CustomerController::class, 'authenticate']);





