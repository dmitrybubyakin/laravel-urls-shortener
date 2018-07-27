<?php

namespace DmitryBubyakin\Shortener\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ShortenerController
{
    public function handle(Request $request): RedirectResponse
    {
        return response()->redirectTo(
            app('shortener')->getRedirectTo($request->hash)
        );
    }
}
