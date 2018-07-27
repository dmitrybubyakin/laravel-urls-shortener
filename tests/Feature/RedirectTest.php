<?php

namespace DmitryBubyakin\Shortener\Tests\Feature;

use DmitryBubyakin\Shortener\Tests\TestCase;

class RedirectTest extends TestCase
{
    /** @test */
    public function it_redirects_to_the_original_url()
    {
        $url = 'https://dummy-url.test';

        $shortUrl = $this->shortener->getShortUrl($url);

        $this->get($shortUrl)->assertRedirect($url);
    }

    /** @test */
    public function it_returns_the_same_short_url_for_identical_urls()
    {
        $url = 'https://dummy-url.test';

        $this->assertSame($this->shortener->getShortUrl($url), $this->shortener->getShortUrl($url));
    }
}
