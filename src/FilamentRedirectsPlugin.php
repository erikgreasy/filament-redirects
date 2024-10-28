<?php

namespace Erikgreasy\FilamentRedirects;

use Erikgreasy\FilamentRedirects\Filament\Resources\RedirectResource;
use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentRedirectsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-redirects';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            RedirectResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
