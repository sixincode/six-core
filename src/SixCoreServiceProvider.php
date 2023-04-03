<?php

namespace Sixincode\SixCore;

use Sixincode\ModulesInit\Package;
use Sixincode\ModulesInit\PackageServiceProvider;
use Sixincode\SixCore\Commands\SixCoreCommand;

class SixCoreServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/sixincode/hive-template
         */
        $package
            ->name('six-core')
            ->hasConfigFile(['six-core','six-core-components','six-core-middlewares'])
            ->hasRoutes(['web','user','api','admin'])
            ->hasViews()
            ->hasMigration('create_six-core_table')
            ->hasCommand(SixCoreCommand::class);
    }
}
