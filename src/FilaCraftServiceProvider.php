<?php

namespace Slym758\FilaCraft;

use Slym758\FilaCraft\Console\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilaCraftServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filacraft')
            ->hasViews()
            ->discoversMigrations()
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
