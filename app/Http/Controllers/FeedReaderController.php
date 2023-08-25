<?php

namespace App\Http\Controllers;

use App\Service\FeedReaderService;
use Illuminate\Http\Request;

class FeedReaderController extends Controller
{
    /**
     * @var FeedReaderService
     */
    private FeedReaderService $feedReaderService;

    /**
     * @param FeedReaderService $feedReaderService
     */
    public function __construct(FeedReaderService $feedReaderService)
    {
        $this->feedReaderService = $feedReaderService;
    }

    /**
     * @deprecated 1.0.0 This entry point has been replace by FeedReaderController::byDomain().
     *
     * @param Request $request
     * @return string
     */
    public function hackernoon(Request $request): string
    {
        return $this->feedReaderService->read("https://hackernoon.com/feed");
    }

    /**
     * @param Request $request
     * @return string
     */
    public function byDomain(Request $request): string {
        return $this->feedReaderService->read("https://$request->domain/feed");
    }
}
