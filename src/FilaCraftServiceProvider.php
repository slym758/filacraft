<?php

namespace Slym7\FilaCraft;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Slym7\FilaCraft\Console\InstallCommand;

class FilaCraftServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filacraft')
            ->hasViews()
            ->hasCommand(InstallCommand::class);
    }
}
