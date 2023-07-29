<?php

use Illuminate\Support\Facades\Route;
use Sixincode\SixCore\Http\Controllers\Central as Controllers;

Route::middleware(
  config('six-core-middlewares.central.default', ['web']),
)->name('central.')->group(function () {

  Route::get('/',         [Controllers\LandingController::class, 'mainLanding'])->name('landing');
  Route::get('/automation',    [Controllers\AutomationController::class, 'mainAutomation'])->name('automation');
  Route::get('/blog',     [Controllers\BlogController::class, 'mainBlog'])->name('blog');
  Route::get('/careers',  [Controllers\CareersController::class, 'mainCareers'])->name('careers');
  Route::get('/contact',  [Controllers\ContactController::class, 'mainContact'])->name('contact');
  Route::get('/discover', [Controllers\DiscoverController::class, 'mainDiscover'])->name('discover.index');
  Route::get('/help',     [Controllers\HelpController::class, 'mainHelp'])->name('help');
  Route::get('/services', [Controllers\ServicesController::class, 'mainServices'])->name('services');
  Route::get('/hire-us', [Controllers\ServicesController::class, 'hireUSServices'])->name('hireUS');

  Route::get('/domains',  [Controllers\DomainsController::class, 'mainDomains'])->name('domains.index');
  Route::get('/domains/find',  [Controllers\DomainsController::class, 'findDomains'])->name('domains.find');
  Route::get('/domains/transfer',  [Controllers\DomainsController::class, 'transferDomains'])->name('domains.transfer');
  Route::get('/domains/extensions',  [Controllers\DomainsController::class, 'extensionDomains'])->name('domains.extensions');
  Route::get('/whois',  [Controllers\DomainsController::class, 'whois'])->name('domains.whois');

  Route::get('/marketing',[Controllers\MarketingController::class, 'mainMarketing'])->name('marketing.index');
  Route::get('/emails',[Controllers\MarketingController::class, 'emailsMarketing'])->name('marketing.emails');
  Route::get('/referrals',[Controllers\MarketingController::class, 'referralsMarketing'])->name('marketing.referrals');
  Route::get('/seo',[Controllers\MarketingController::class, 'seoMarketing'])->name('marketing.seo');
  Route::get('/analytics',[Controllers\MarketingController::class, 'analyticsMarketing'])->name('marketing.analytics');

  Route::get('/hosting',  [Controllers\HostingsController::class, 'mainHostings'])->name('hostings.index');
  Route::get('/hosting/web',  [Controllers\HostingsController::class, 'webHostings'])->name('hostings.web');
  Route::get('/web-builder',  [Controllers\HostingsController::class, 'webBuilderHostings'])->name('hostings.webBuilder');
  Route::get('/online-store',  [Controllers\HostingsController::class, 'onlineStoreHostings'])->name('hostings.onlineStore');
  Route::get('/applications',  [Controllers\HostingsController::class, 'appsHostings'])->name('hostings.apps');
  Route::get('/vps',  [Controllers\HostingsController::class, 'vpsHostings'])->name('hostings.vps');
  Route::get('/wordpress',  [Controllers\HostingsController::class, 'wordpressHostings'])->name('hostings.wordpress');
  Route::get('/ssl',  [Controllers\HostingsController::class, 'sslHostings'])->name('hostings.ssl');
  Route::get('/vpn',  [Controllers\HostingsController::class, 'vpnHostings'])->name('hostings.vpn');
  Route::get('/back-up',  [Controllers\HostingsController::class, 'backUpHostings'])->name('hostings.backUp');
  Route::get('/hosting/security',  [Controllers\HostingsController::class, 'securityHostings'])->name('hostings.security');

  Route::get('/testing',  [Controllers\LandingController::class, 'testing'])->name('testing');


});
