<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Create New user
    public function register(Request $request){
        // dd($request);
        $formFields = $request->validate([
            'full_name' => ['required', 'min:3'],
            'email' => ['required','email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:8',
            'address' => ['required'],
            'birthdate' => ['required'],
            'phone' => ['required'],
            'username' => ['required']
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User in DataBase
        $user = User::create($formFields);

        // Login
        auth()->login($user);
        
        // Redirect
        return redirect('/')->with('message', 'User created and logged in');
    }

    public function login(Request $request){
        // dd($request);
        $formFields = $request->validate([
            'full_name' => ['required', 'min:3'],
            'email' => ['required','email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:8',
            'address' => ['required'],
            'birthdate' => ['required'],
            'phone' => ['required'],
            'username' => ['required']
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/')->with('message','Logged in successfully!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput();
    }
    
}
