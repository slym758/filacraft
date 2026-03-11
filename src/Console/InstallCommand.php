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
            $this->warn('Theme file not found at: ' . $themePath);
            $this->info('Run `php artisan make:filament-theme admin` first, then re-run this command.');

            return;
        }

        $contents = File::get($themePath);
        $importLine = "@import '../../../../packages/filacraft/resources/css/theme.css';";

        if (str_contains($contents, $importLine)) {
            $this->info('FilaCraft CSS import already exists in theme.css');

            return;
        }

        $newContents = $importLine . "\n" . $contents;
        File::put($themePath, $newContents);

        $this->info('FilaCraft CSS import added to theme.css');
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
