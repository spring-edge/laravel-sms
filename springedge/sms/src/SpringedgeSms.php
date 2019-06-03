<?php

namespace Springedge\Sms;

use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Http\Controllers\Controller;

class SpringedgeSms extends Controller
{
    private $apikey = "SEDEMO";
    private $sender = "API_KEY_HERE";
    
    function sendsms($mobileno, $message){
        
        $message = urlencode($message);
        $baseurl = 'https://instantalerts.co/api/web/send?apikey='.$apikey;
        
        $url = $baseurl.'&sender='.$sender.'&to='.$mobileno.'&message='.$message;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        
        // Use file get contents when CURL is not installed on server.
        if(!$response){
            $response = file_get_contents($url);
        }
        echo $response; //print response
    }
        
}
