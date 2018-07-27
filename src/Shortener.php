<?php

namespace DmitryBubyakin\Shortener;

use Hashids\Hashids;
use Illuminate\Support\Facades\Route;

class Shortener
{
    /** @var Hashids */
    protected $hash;

    /** @var string */
    protected $route;

    public function __construct(Hashids $hash, string $route)
    {
        $this->hash = $hash;
        $this->route = $route;
    }

    public function getShortUrl(string $url): string
    {
        $id = ShortUrl::firstOrCreate(compact('url'))->id;

        return url($this->route, $this->hash->encode($id));
    }

    public function getRedirectTo(string $hash): string
    {
        [$id] = $this->hash->decode($hash);

        return ShortUrl::findOrFail($id)->url;
    }

    public function routes(): void
    {
        Route::get("{$this->route}/{hash}", '\DmitryBubyakin\Shortener\Http\Controllers\Redirect');
    }
}
