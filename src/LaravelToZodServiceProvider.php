<?php

namespace Zakini\LaravelToZod;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Zakini\LaravelToZod\Commands\LaravelToZodCommand;

class LaravelToZodServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-to-zod')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_to_zod_table')
            ->hasCommand(LaravelToZodCommand::class);
    }
}
