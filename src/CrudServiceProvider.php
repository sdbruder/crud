<?php

namespace Sdbruder\Crud;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sdbruder\Crud\Commands\CrudCommand;

class CrudServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('crud')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_crud_table')
            ->hasCommand(CrudCommand::class);
    }
}
