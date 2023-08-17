<?php

namespace App\Service;

use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class IpLocationService
{
    private string $token;

    /**
     * @param string $token
     */
    public function __construct(string $token) {
        $this->token = $token;
    }

    /**
     * @param string $ip
     * @return string|null
     * @throws RequestException
     */
    public function lookUpIp(string $ip): ?string {
        return Http::withUrlParameters([
            'endpoint' => 'https://api.findip.net',
            'ip' => $ip,
        ])->get('{+endpoint}/{ip}/', ['token' => $this->token])->body();
    }
}
