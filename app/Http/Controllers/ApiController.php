<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getNames($month, $day){

        $curl = curl_init();
    
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/list-born-today?month=$month&day=$day",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
                "X-RapidAPI-Key: a36d152b57mshc729389e1f91e23p1ea9e0jsnbeea7a615574"
            ],
        ]);
        
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            $phpResult = json_decode($response);
            $actorsNameList = array();
            
            for ($i = 0; $i < 5 ; $i++) {
                
                $nameAPI = $phpResult[$i];
                $substring = '/name/';
                $nameAPI = substr($nameAPI, strlen($substring));
                $nameAPI = substr($nameAPI, 0, -1);
            
                error_log(print_r($nameAPI, true));
    
                array_push($actorsNameList,$this->GetBio($nameAPI));
    
            }
            return $actorsNameList;
        }
    }

    public function GetBio($actor){
        sleep(0.2);
    
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst=$actor",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
                "X-RapidAPI-Key: a36d152b57mshc729389e1f91e23p1ea9e0jsnbeea7a615574"
            ],
        ]);
        
         $response = curl_exec($curl);
         $err = curl_error($curl);
        
         curl_close($curl);
        
         if ($err) {
            return "cURL Error #:" . $err;
         } 
         else {
            $phpResult = json_decode($response);
            $actorName = $phpResult->name;
            return $actorName;
        }
    }


    public function isUsername(Request $request){
        $userName = $request['userName'];
        // error_log($month);
        error_log($userName);

        $username = Customer::where('username', $userName )->first();

        if($username){
            return response()->json("f");      
        }
        else{
            return response()->json("t");
        }
    }


    public function getActorsName(Request $request){
        $month = $request['month'];
        $day = $request['day'];
        error_log($month);
        error_log($day);
    
        return response()->json($this->getNames($month,$day));
    }
}
