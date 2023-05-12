<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show($id){
        $customer = Customer::find($id);
        return view('customer', [
            'customer' => $customer
        ]);
    }

    public function register(Request $request){

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
    
    }

    public function authenticate(Request $request){
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
    }
}
