<?php

namespace App\Http\Controllers;

use App\Mail\Register;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail($username){
        try{
            Mail::to('abdelrahmansayed171@gmail.com')->send(new Register($username));
            // return view('welcome');
            return redirect('/');
        }
        catch (Exception $th){
            return response()->json(['Email delivery failed '.$th]);
        }
        
    }
}
