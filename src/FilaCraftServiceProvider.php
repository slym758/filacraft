<?php

namespace Slym758\FilaCraft;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Slym758\FilaCraft\Console\InstallCommand;

class FilaCraftServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filacraft')
            ->hasViews()
            ->hasMigration('2026_03_05_100000_create_user_theme_settings_table')
            ->hasRoute('web')
            ->hasCommand(InstallCommand::class);
    }

    public function packageBooted(): void
    {
        $this->publishes([
            $this->package->basePath('/../resources/views/errors') => resource_path('views/errors'),
        ], "{$this->package->shortName()}-error-views");

        $this->publishes([
            $this->package->basePath('/../resources/img') => public_path('vendor/filacraft/img'),
        ], "{$this->package->shortName()}-assets");
    }
}