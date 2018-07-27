<?php

namespace DmitryBubyakin\Shortener\Tests;

use DmitryBubyakin\Shortener\Shortener;

class UrlsShortenerServiceProviderTest extends TestCase
{
    /** @test */
    public function it_returns_the_url_Shortener_instance()
    {
        $this->assertInstanceOf(Shortener::class, app(Shortener::class));
        $this->assertInstanceOf(Shortener::class, app('shortener'));
    }
}
