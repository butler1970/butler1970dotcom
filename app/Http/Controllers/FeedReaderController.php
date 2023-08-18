<?php

namespace App\Http\Controllers;

use App\Service\FeedReaderService;
use Illuminate\Http\Request;

class FeedReaderController extends Controller
{
    private FeedReaderService $feedReaderService;

    public function __construct(FeedReaderService $feedReaderService)
    {
        $this->feedReaderService = $feedReaderService;
    }

    public function hackernoon(Request $request): string
    {
        return $this->feedReaderService->read("https://hackernoon.com/feed");
    }
}
