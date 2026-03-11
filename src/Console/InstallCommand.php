<?php

namespace Slym7\FilaCraft\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallCommand extends Command
{
    protected $signature = 'filacraft:install';

    protected $description = 'Install FilaCraft: CSS import, error views, and migration.';

    public function handle(): int
    {
        $this->installCss();
        $this->publishErrorViews();
        $this->runMigrations();

        $this->newLine();
        $this->info('FilaCraft installed successfully!');
        $this->info('Run `npm run build` to compile the theme.');

        return self::SUCCESS;
    }

    protected function installCss(): void
    {
        $themePath = resource_path('css/filament/admin/theme.css');

        if (! File::exists($themePath)) {
            $this->info('Theme file not found, creating it...');
            $this->call('make:filament-theme', ['panel' => 'admin']);
        }

        if (! File::exists($themePath)) {
            $this->warn('Could not create theme file at: ' . $themePath);

            return;
        }

        $contents = File::get($themePath);

        // Detect the correct import path
        $vendorPath = base_path('vendor/slym7/filacraft/resources/css/theme.css');
        $localPath = base_path('packages/filacraft/resources/css/theme.css');

        if (File::exists($localPath)) {
            $importLine = "@import '../../../../packages/filacraft/resources/css/theme.css';";
        } else {
            $importLine = "@import '../../../../vendor/slym7/filacraft/resources/css/theme.css';";
        }

        $hasImport = str_contains($contents, 'filacraft/resources/css/theme.css');
        $hasSource = str_contains($contents, 'filacraft/resources/views');

        if ($hasImport && $hasSource) {
            $this->info('FilaCraft CSS import already exists in theme.css');

            return;
        }

        // Add @source for package views (Tailwind CSS v4)
        $sourceLine = File::exists($localPath)
            ? "@source '../../../../packages/filacraft/resources/views/**/*';"
            : "@source '../../../../vendor/slym7/filacraft/resources/views/**/*';";

        $newContents = $importLine . "\n" . $sourceLine . "\n" . $contents;
        File::put($themePath, $newContents);

        $this->info('FilaCraft CSS import and @source added to theme.css');
    }

    protected function publishErrorViews(): void
    {
        $this->call('vendor:publish', [
            '--tag' => 'filacraft-error-views',
            '--force' => true,
        ]);

        $this->info('Error page views published.');
    }

    protected function runMigrations(): void
    {
        $this->call('migrate');
    }
}
