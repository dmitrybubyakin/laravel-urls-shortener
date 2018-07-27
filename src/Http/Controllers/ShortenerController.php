<?php

namespace DmitryBubyakin\Shortener\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ShortenerController
{
    public function handle(Request $request): RedirectResponse
    {
        return response()->redirectTo(
            app('shortener')->getRedirectTo($request->hash)
        );
    }
}
