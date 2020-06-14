<?php
require '../vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Pool;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

 class ClientHttp{
  
    public function get($cedula){
        $client = new Client();
        $response = $client->get("https://apis.gometa.org/cedulas/".$cedula);
        $obj =(array)json_decode($response->getBody());
        return  $obj["results"];
    }
 }
?>