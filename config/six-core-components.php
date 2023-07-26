<?php

use Sixincode\SixCore\Http\Livewire   as SixCoreLivewire;
use Sixincode\SixCore\Components as SixCoreComponents;

return [
  /*
  |--------------------------------------------------------------------------
  | Blade Components
  |--------------------------------------------------------------------------
  | Below are listed all the blade components that should be loaded
  | by the packageBooted method on the package ServiceProder.
  */

  'blade' => [
    'header'         => SixCoreComponents\Partials\Footers\Header::class,
    'footer'         => SixCoreComponents\Partials\Footers\Footer::class,

    'central-landing-top'           => SixCoreComponents\Central\Landing\TopLanding::class,
    'central-landing-features'      => SixCoreComponents\Central\Landing\FeaturesLanding::class,
    'central-landing-services'      => SixCoreComponents\Central\Landing\ServicesLanding::class,
    'central-landing-domain'        => SixCoreComponents\Central\Landing\DomainLanding::class,
    'central-landing-faq'           => SixCoreComponents\Central\Landing\FaqLanding::class,
    'central-landing-presentation'  => SixCoreComponents\Central\Landing\PresentationLanding::class,
    'central-landing-smb'           => SixCoreComponents\Central\Landing\SmbLanding::class,

    'central-automation'    => SixCoreComponents\Central\Automation::class,
    'central-blog'          => SixCoreComponents\Central\Blog::class,
    'central-contact'       => SixCoreComponents\Central\Contact::class,
    'central-domains'       => SixCoreComponents\Central\Domains::class,
    'central-help'          => SixCoreComponents\Central\Help::class,
    'central-hosting'       => SixCoreComponents\Central\Hosting::class,
    'central-marketing'     => SixCoreComponents\Central\Marketing::class,

    ],
  /*
  |--------------------------------------------------------------------------
  | Livewire Components
  |--------------------------------------------------------------------------
  | Below are listed all the Livewire components that should be loaded
  | by the bootingPackage method on the package ServiceProder.
  */
  'livewire' => [
    'central-landing-main'     => SixCoreLivewire\Central\Landing\MainLanding::class,
    'central-automation-main'  => SixCoreLivewire\Central\Automation\MainAutomation::class,
    'central-blog-main'        => SixCoreLivewire\Central\Blog\MainBlog::class,
    'central-careers-main'     => SixCoreLivewire\Central\Careers\MainCareers::class,
    'central-contact-main'     => SixCoreLivewire\Central\Contact\MainContact::class,
    'central-discover-main'    => SixCoreLivewire\Central\Discover\MainDiscover::class,
    'central-domains-main'     => SixCoreLivewire\Central\Domains\MainDomains::class,
    'central-help-main'        => SixCoreLivewire\Central\Help\MainHelp::class,
    'central-hostings-main'    => SixCoreLivewire\Central\Hostings\MainHostings::class,
    'central-marketing-main'   => SixCoreLivewire\Central\Marketing\MainMarketing::class,
    'central-services-main'    => SixCoreLivewire\Central\Services\MainServices::class,

   ],

  /*
  |--------------------------------------------------------------------------
  | Components Prefix
  |--------------------------------------------------------------------------
  |
  | This value will set a prefix for all Shopper Admin components.
  | By default it's shopper. This is useful if you want to avoid
  | collision with components from other libraries.
  |
  | For example, it's reference components like:
  |
  | <x-hive-index />
  | <livewire:hive-index />
  |
  */
  'prefix' => 'six-core',
];
