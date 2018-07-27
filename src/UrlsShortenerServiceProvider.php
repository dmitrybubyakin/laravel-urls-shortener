<?php

namespace DmitryBubyakin\Shortener;

use Hashids\Hashids;
use Illuminate\Support\ServiceProvider;

class UrlsShortenerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('laravel-urls-shortener.php'),
        ]);

        if (! class_exists('CreateShortUrlsTable')) {
            $this->publishes([
                __DIR__.'/../database/migrations/create_short_urls_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_short_urls_table.php'),
            ]);
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-urls-shortener');

        $this->app->bind(Shortener::class, function () {
            $hash = $this->createHashids();
            $route = config('laravel-urls-shortener.route');

            return new Shortener($hash, $route);
        });

        $this->app->alias(Shortener::class, 'shortener');
    }

    public function createHashids(): Hashids
    {
        return new Hashids(
            config('laravel-urls-shortener.hashids.salt'),
            config('laravel-urls-shortener.hashids.min_hash_length'),
            config('laravel-urls-shortener.hashids.alphabet')
        );
    }
}
