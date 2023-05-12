<?php

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

Route::get('customer/{id}', function($id){
    return view('customer', [
        'customer' => Customer::find($id)
    ]);
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
    Customer::create($validatedData);
    $customer = Customer::where('email', $validatedData['email'] )->first();
    return redirect('/sendmail/'. $customer->username);
});


Route::post('/authenticate', function (Request $request) {
    // dd($request);
    $validatedData = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    $customer = Customer::where('email', $validatedData['email'] )
    ->where('password', $validatedData['password'])
    ->first();
    
    if($customer){
        return redirect('/customer/'. $customer->id);
    }
    else{
        return redirect('/error404');
    }
});

Route::get('/sendmail/{username}', [MailController::class, 'sendMail']);




