<?php

namespace App\Http\Controllers;

use App\Service\IpLocationService;
use Illuminate\Http\Request;

class IpLocationController extends Controller
{
    private IpLocationService $ipLocationService;

    public function __construct(IpLocationService $ipLocationService) {
        $this->ipLocationService = $ipLocationService;
    }

    public function location(Request $request) {
        return $this->ipLocationService->lookUpIp($request->ip);
    }
}
