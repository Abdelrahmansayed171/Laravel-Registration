<?php

use App\Models\Customer;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', function (Request $request) {
    // dd($request);
    $validatedData = $request->validate([
        'full_name' => ['required', 'min:3'],
        'username' => ['required', 'unique:customers,username'],
        'email' => ['required', 'email', 'unique:customers,email'],
        'birthdate' => ['required', 'date'],
        'phone' => ['required', 'numeric'],
        'address' => ['required'],
        'password' => ['required', 'min:8'],
    ]);

    // dd($validatedData);

    Customer::create($validatedData);
});
