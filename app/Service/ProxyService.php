<?php

namespace App\Service;

use Illuminate\Support\Facades\Http;

class ProxyService
{
    public function get(string $url): string
    {
        return Http::get($url)->body();
    }
}
