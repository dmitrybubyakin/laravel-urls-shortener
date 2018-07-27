<?php

namespace DmitryBubyakin\Shortener\Users\Tests\Unit;

use DmitryBubyakin\Shortener\Tests\TestCase;

class HelpersTest extends TestCase
{
    /** @test */
    public function test_shorten()
    {
        $url = 'https://dummy-url.test';

        $this->assertSame($this->shortener->getShortUrl($url), shorten($url));
    }
}
