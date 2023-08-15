<?php

namespace App\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class IpLocationService
{
    private string $token;

    public function __construct(string $token) {
        $this->token = $token;
    }

    /**
     * @throws GuzzleException
     */
    public function lookUpIp(string $ip): string {

        $client = new Client([
            'base_uri' => "https://api.findip.net/$ip/?token=$this->token",
        ]);

        return $client->request('GET', '', [])->getBody();
    }

}
