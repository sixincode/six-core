<?php

namespace Sixincode\SixCore;

use Sixincode\ModulesInit\Package;
use Sixincode\ModulesInit\PackageServiceProvider;
use Sixincode\SixCore\Commands\SixCoreCommand;
use Sixincode\HiveDisplay\Traits\RenderingViewTrait;
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;

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
            ->runsMigrations()
            ->hasCommand(SixCoreCommand::class);

            $this->overwriteComponents();

    }

    public function packageBooted()
    {
      $this->bootSixCoreBladeAndLivewireComponents();
    }

    public function overwriteComponents()
    {
      RenderingViewTrait::macro('base_layouts', function () {
        return 'six-core::components';
      });

      RenderingViewTrait::macro('base_headers', function () {
        return 'six-core::components';
      });

      RenderingViewTrait::macro('base_navigations', function () {
        return 'six-core::components';
      });

      RenderingViewTrait::macro('base_sidebars', function () {
        return 'six-core::components';
      });

      RenderingViewTrait::macro('base_footers', function () {
        return 'six-core::components';
      });
    }

    public function bootSixCoreBladeAndLivewireComponents()
    {
       $prefix = config('six-core-components.prefix', 'six-core');

       foreach (config('six-core-components.livewire', []) as $alias => $component)
       {
          $alias = $prefix ? "$prefix-$alias" : $alias;
          Livewire::component($alias, $component);
        }

       foreach (config('six-core-components.blade', []) as $alias => $component)
       {
          $alias = $prefix ? "$prefix-$alias" : $alias;
          Blade::component($alias, $component);
        }
     }
}
