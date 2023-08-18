<?php

namespace App\Service;

use Illuminate\Support\Facades\Http;

class FeedReaderService
{
    public function read(string $feedUrl): string {
        return Http::get($feedUrl);
    }
}
