<?php

namespace Sixincode\SixCore\Traits\Database;

use Sixincode\SixCore\Database\Seeders as Seeders;

trait SixCoreSeedersTrait
{
  public function seed()
  {
    $thid->seedTlds();
    $thid->seedHostings();
    $thid->seedServers();
    $thid->seedEmails();
    $thid->seedServices();
    $thid->seedDomains();
  }

  public function seedAll()
  {
    \HiveAlpha::seedAdmin();
    $thid->seed();
  }

  public function seedTlds()
  {
    $seeder = new Seeders\SixCoreTldsDatabaseSeeder;
    return $seeder->run();
  }

  public function seedHostings()
  {
    $seeder = new Seeders\SixCoreHostingsDatabaseSeeder;
    return $seeder->run();
  }

  public function seedServers()
  {
    $seeder = new Seeders\SixCoreServersDatabaseSeeder;
    return $seeder->run();
  }

  public function seedEmails()
  {
    $seeder = new Seeders\SixCoreEmailsDatabaseSeeder;
    return $seeder->run();
  }

  public function seedServices()
  {
    $seeder = new Seeders\SixCoreServicesDatabaseSeeder;
    return $seeder->run();
  }

  public function seedDomains()
  {
    $seeder = new Seeders\SixCoreDomainsDatabaseSeeder;
    return $seeder->run();
  }

}
