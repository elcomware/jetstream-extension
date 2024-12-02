<?php

namespace Thereline\JetstreamExtension;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Thereline\JetstreamExtension\Commands\JetstreamExtensionCommand;

class JetstreamExtensionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('jetstream-extension')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_jetstream_extension_table')
            ->hasCommand(JetstreamExtensionCommand::class);
    }
}
