<?php

namespace Slym7\FilaCraft\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallCommand extends Command
{
    protected $signature = 'filacraft:install';

    protected $description = 'Install the FilaCraft CSS into your Filament theme file.';

    public function handle(): int
    {
        $themePath = resource_path('css/filament/admin/theme.css');

        if (! File::exists($themePath)) {
            $this->error('Theme file not found at: ' . $themePath);
            $this->info('Please run `php artisan make:filament-theme admin` first.');

            return self::FAILURE;
        }

        $contents = File::get($themePath);
        $importLine = "@import '../../../../packages/filacraft/resources/css/theme.css';";

        if (str_contains($contents, $importLine)) {
            $this->info('FilaCraft import already exists in theme.css');

            return self::SUCCESS;
        }

        $newContents = $importLine . "\n" . $contents;
        File::put($themePath, $newContents);

        $this->info('FilaCraft CSS import added to theme.css');
        $this->info('Run `npm run build` to compile the theme.');

        return self::SUCCESS;
    }
}
