<?php

require_once('vendor/autoload.php');

class ApiEasyBrokerController 
{

    var $urlApi = "";
    var $versionApi = "";
    var $tokenAuthentication = "l7u502p8v46ba3ppgvj5y2aad50lb9";

    public function __construct()
    {

        $this->urlApi = "https://api.stagingeb.com/"; // se inicializa la url de la api que sera utilizada en diferentes partes del codigo, si sufriera un cambio.
        $this->versionApi = "v1"; // se inicializa una version, debido a que en muchas ocaciones, existen diferentes versiones de la misma api.

    }

    public function getProperties($page, $limit ){

        try {
    
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', $this->urlApi.$this->versionApi.'/properties?page='.$page.'&limit='.$limit, [
                'headers' => [
                    'X-Authorization' => $this->tokenAuthentication,
                    'accept' => 'application/json',
                ],
            ]);
            
            if( is_object($response->getBody()) ){
                echo $response->getBody();
                die;
            }

        } catch (\Throwable $th) {
            error_log($th);
        }
    }
}
