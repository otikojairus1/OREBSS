<?php

namespace App\Http\Controllers;
use App\cart;
use App\Bill;

use Illuminate\Http\Request;

class paymentsController extends Controller
{
    public function mpesa($id){
        $userBills = Bill::where('userid', $id)->get();
        dd($userBills);
    }

    public function create( ){
        return view('payments');
    }

    public function pay( Request $request){
        // get the Oauth Bearer access Token from safaricom
        //dd(int($request->amount));
        $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
  
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        $credentials = base64_encode('UrsGc9lFwXGkkhALW6v2mOdJ3pJpAWBD:yLvuma0CU4YOPD0w');
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials)); //setting a custom header
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        
        $curl_response = curl_exec($curl);
    
        $responce = json_decode($curl_response)->access_token;
         //dd($responce["access_token"]);
         //dd($responce->access_token);
         $accessToken = $responce; // access token here
        

        //mpesa user credentials
        $mpesaOnlineShortcode = "174379";
        $BusinessShortCode = $mpesaOnlineShortcode;
        $partyA = "254722753364";
        $partyB = $BusinessShortCode;
        $phoneNumber = $partyA;
        $mpesaOnlinePasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        date_default_timezone_set('Africa/Nairobi');
        $timestamp =  date('YmdHis');
        $amount = number_format($request->amount);
        $dataToEncode = $BusinessShortCode.$mpesaOnlinePasskey.$timestamp;
        //dd($dataToEncode);
        $password = base64_encode($dataToEncode);
        //dd($password);

        //payment request to safaricom

        $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
  
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$accessToken)); //setting custom header
        
        
        $curl_post_data = array(
          //Fill in the request parameters with valid values
          'BusinessShortCode' => $BusinessShortCode,
          'Password' => $password,
          'Timestamp' => $timestamp,
          'TransactionType' => 'CustomerPayBillOnline',
          'Amount' => 1,
          'PartyA' => $partyA,
          'PartyB' => $partyB,
          'PhoneNumber' => '254796640399',
          'CallBackURL' => 'https://orebscafe.com/mpesacallback',
          'AccountReference' => 'OREBS',
          'TransactionDesc' => 'PAYING BILLS FOR OREBS'
        );
        
        $data_string = json_encode($curl_post_data);
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        
        $curl_response = curl_exec($curl);
        print_r($curl_response);
        
        dd($curl_response);



        return "sdtse";
        

    }


}
