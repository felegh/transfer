<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WHMapi extends Model
{
    public static function retriveRequest($action){
      $user = 'root';
      $token = 'ON1LR3V1EIC8GW11IDCMQ5JYTFI4LG3P';
      $url = "https://165.22.124.226:2087/json-api/" . $action ."?api.version=1";
      $ch = curl_init('');
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
      $header[0] = "Authorization: whm $user:$token";
      curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
      curl_setopt($ch, CURLOPT_URL, $url);
      $result = curl_exec($ch);
      curl_close($ch);
      return $result;
    }
    public static function sendApiRequest($action, $post){
      $user = 'root';
      $send_post = http_build_query($post);
      $url = "https://165.22.124.226:2087/json-api/" . $action ."?api.version=1&";
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_POSTFIELDS, $send_post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: whm $user:$token",
      ));
        $result = curl_exec($ch);
        return $result;
    }
}
