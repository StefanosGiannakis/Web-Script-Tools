<?php

namespace core\C;
use core\C\Controller;

class StatsController extends Controller{

    protected static $uid;
    function __constuct(){
       exit('hello'); 
    }
    function getIT(){
        exit('hello it'); 
     }
     function getUserID(){
        // i need to allow only POST methods and hide auth api key


        $username = isset($_GET['username']) && !empty($_GET['username'])?$_GET['username']:null;

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://fortnite-api.theapinetwork.com/users/id?username=$username",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: 112e3d45233e745b8a0e9eff63452513",
            "Postman-Token: 80cd069a-781a-4319-a37a-3f4e4d5278ef",
            "cache-control: no-cache"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
          exit('cURL Error #');
        } 

        $userIDobj = json_decode($response);
        
        self::$uid = isset($userIDobj->data->uid) ?$userIDobj->data->uid:null;
        
        $userStats='';
        if(self::$uid)
            $userStats = self::getUserStats(self::$uid);
        
        return $userStats;
    }

    function getUserStats($uid){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://fortnite-api.theapinetwork.com/prod09/users/public/br_stats_v2?user_id=$uid",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Authorization: 112e3d45233e745b8a0e9eff63452513",
            "Postman-Token: fbf26c7e-3a97-4269-a632-9df62e1225f3",
            "cache-control: no-cache"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        return $response;
        }
    }


}