<?php

namespace App\Lib;

use GuzzleHttp\Client;
use Exception;

class MyHelper
{
    public static function get($url)
    {
        $prefix = env('CORE_API_URL');
        $client = new Client();
        $endpoint = $prefix . $url;
        $content = array(
            'headers'   => [
                'Accept'        => 'application/json',
                'Content-Type'  => 'application/json',
            ],
        );


        try {
            $response =  $client->request('GET', $endpoint, $content);
            return json_decode($response->getBody(), true);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            try {
                if ($e->getResponse()) {
                    $response = $e->getResponse()->getBody()->getContents();
                    $error = json_decode($response, true);

                    if (!$error) {
                        return $e->getResponse()->getBody();
                    } else {
                        return $error;
                    }
                } else {
                    return ['status' => 'fail', 'messages' => [0 => 'Check your internet connection.']];
                }
            } catch (Exception $e) {
                return ['status' => 'fail', 'messages' => [0 => 'Check your internet connection.']];
            }
        }
    }
}
