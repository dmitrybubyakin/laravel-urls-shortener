<?php

if (! function_exists('shorten')) {
    function shorten(string $url): string
    {
        return app('shortener')->getShortUrl($url);
    }
}
