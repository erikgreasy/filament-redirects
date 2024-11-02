<?php

namespace Erikgreasy\FilamentRedirects;

use Erikgreasy\FilamentRedirects\Testing\TestsFilamentRedirects;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentRedirectsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-redirects';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            ->hasMigrations(['2024_07_20_161059_create_redirects_table'])
            ->runsMigrations()
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('erikgreasy/filament-redirects');
            });

        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }
    }

    public function packageBooted(): void
    {
        // Handle Stubs
        if (app()->runningInConsole()) {
            foreach (app(Filesystem::class)->files(__DIR__ . '/../stubs/') as $file) {
                $this->publishes([
                    $file->getRealPath() => base_path("stubs/filament-redirects/{$file->getFilename()}"),
                ], 'filament-redirects-stubs');
            }
        }

        // Testing
        Testable::mixin(new TestsFilamentRedirects);
    }

    protected function getAssetPackageName(): ?string
    {
        return 'erikgreasy/filament-redirects';
    }
}
