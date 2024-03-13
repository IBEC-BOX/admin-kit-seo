<?php

namespace AdminKit\SEO;

use AdminKit\SEO\UI\Filament\Resources\PageSEOResource;
use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-plugin-admin-kit-seo';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            PageSEOResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
    }

    public static function make(): static
    {
        return app(static::class);
    }
}