<?php

namespace DmitryBubyakin\Shortener\Tests;

use DmitryBubyakin\Shortener\Shortener;
use DmitryBubyakin\Shortener\UrlsShortenerServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public $shortener;

    public function setUp()
    {
        parent::setUp();

        $this->setUpDatabase($this->app);

        $this->shortener = app(Shortener::class);

        $this->shortener->routes();
    }

    protected function getPackageProviders($app)
    {
        return [
            UrlsShortenerServiceProvider::class
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }

    protected function setUpDatabase($app)
    {
        include_once __DIR__ . '/../database/migrations/create_short_urls_table.php.stub';

        (new \CreateShortUrlsTable())->up();
    }
}
