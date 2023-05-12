<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\Register;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail($username){
        try{
            Mail::to('abdelrahmansayed171@gmail.com')->send(new Register($username));
            $customer = Customer::where('username', $username )->first();

            return redirect('/customer/'. $customer->id);
        }
        catch (Exception $th){
            return response()->json(['Email delivery failed '.$th]);
        }
        
    }
}
