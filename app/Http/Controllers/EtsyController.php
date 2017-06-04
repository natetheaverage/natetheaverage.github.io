<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class EtsyController extends Controller
{
     /**
     * Api consumption for etsy store info
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
      $etsyKey = env('ETSY_KEY');
      $baseUrl = "https://openapi.etsy.com/v2";
      $etsyShopId = '6577223';
      $etsyUserId = '9311200';
      $url = $baseUrl.'/shops/'.$etsyShopId.'/sections?callback=getData&api_key='.$etsyKey;

      $client = new Client();
      $request = new \GuzzleHttp\Psr7\Request('GET', $url);
      $promise = $client->sendAsync($request)->then(function ($response) {
        $body = $response->getBody();
        $body = $response->getBody();
          echo $body;
          $stringBody = (string) $body;
        return $body;
      });
      $promise->wait();

    }

    /**
     * Api consumption for etsy listings
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function listings(Request $request)
    {
      
      $etsyKey = env('ETSY_KEY');
      $baseUrl = "https://openapi.etsy.com/v2";
      $etsyShopId = '6577223';
      $etsyUserId = '9311200';
      $url = $baseUrl.'/shops/'.$etsyShopId.'/listings/active?callback=getData&api_key='.$etsyKey;

      $client = new Client();
      $request = new \GuzzleHttp\Psr7\Request('GET', $url);
      $promise = $client->sendAsync($request)->then(function ($response) {
          $body = $response->getBody();
          echo $body;
          $stringBody = (string) $body;
          return $body;
      });
      $promise->wait();

      // return 'errrr getting data from etsy @ etsyController';
    }


    /**
     * Api consumption for etsy listing images
     *
     * @param  $listingId
     * @return  json
     */
    public function images($listingId)
    {
      
      $etsyKey = env('ETSY_KEY');
      $baseUrl = "https://openapi.etsy.com/v2";
      $url = $baseUrl.'/listings/'.$listingId.'/images?api_key='.$etsyKey;

      $client = new Client();
      $request = new \GuzzleHttp\Psr7\Request('GET', $url);
      $promise = $client->sendAsync($request)->then(function ($response) {
          $body = $response->getBody();
          echo $body;
          $stringBody = (string) $body;
          return $body;
      });
      $promise->wait();

      // return 'errrr getting data from etsy @ etsyController';
    }
}
