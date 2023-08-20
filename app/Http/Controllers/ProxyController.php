<?php

namespace App\Http\Controllers;

use App\Service\ProxyService;
use Illuminate\Http\Request;

class ProxyController extends Controller
{
    /**
     * @var ProxyService
     */
    private ProxyService $proxyService;

    /**
     * @param ProxyService $proxyService
     */
    public function __construct(ProxyService $proxyService) {
        $this->proxyService = $proxyService;
    }

    public function getZenQuoteToday(): string
    {
        return $this->proxyService->get('https://zenquotes.io/api/today');
    }

    public function getZenQuoteRandom(): string
    {
        return $this->proxyService->get('https://zenquotes.io/api/random');
    }
}
