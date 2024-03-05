<?php

namespace AdminKit\SEO;

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
            ]);
    }
}
