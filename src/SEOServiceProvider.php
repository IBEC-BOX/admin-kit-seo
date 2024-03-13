<?php

namespace AdminKit\SEO;

use AdminKit\SEO\Providers\RouteServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SEOServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-kit-seo')
            ->hasConfigFile()
            ->hasTranslations()
            ->hasMigrations([
                'create_admin_kit_seo_table',
                'add_og_columns_to_admin_kit_seo_table',
                'create_admin_kit_page_seo_table',
            ]);
    }

    public function registeringPackage()
    {
        if (config('admin-kit-seo.seo_routes')) {
            $this->app->register(RouteServiceProvider::class);
        }
    }
}
