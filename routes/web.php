<?php

use Illuminate\Support\Facades\Route;
use Sixincode\SixCore\Http\Controllers\Central as Controllers;

Route::middleware(
  config('six-core-middlewares.central.default', ['web']),
)->name('central.')->group(function () {

  Route::get('/',         [Controllers\LandingController::class, 'mainLanding'])->name('landing');
  Route::get('/automation',     [Controllers\AutomationController::class, 'mainAutomation'])->name('automation');
  Route::get('/blog',     [Controllers\BlogController::class, 'mainBlog'])->name('blog');
  Route::get('/careers',  [Controllers\CareersController::class, 'mainCareers'])->name('careers');
  Route::get('/contact',  [Controllers\ContactController::class, 'mainContact'])->name('contact');
  Route::get('/discover', [Controllers\DiscoverController::class, 'mainDiscover'])->name('discover');
  Route::get('/domains',  [Controllers\DomainsController::class, 'mainDomains'])->name('domains');
  Route::get('/help',     [Controllers\HelpController::class, 'mainHelp'])->name('help');
  Route::get('/hosting',  [Controllers\HostingsController::class, 'mainHostings'])->name('hostings');
  Route::get('/marketing',[Controllers\MarketingController::class, 'mainMarketing'])->name('marketing');
  Route::get('/services', [Controllers\ServicesController::class, 'mainServices'])->name('services');


});
