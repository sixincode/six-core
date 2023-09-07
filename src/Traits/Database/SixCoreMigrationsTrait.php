<?php

namespace Sixincode\SixCore\Traits\Database;

use Sixincode\HiveAlpha\SixCore\Migrations as Migrations;

trait SixCoreMigrationsTrait
{
  public function migrateUp(): void
  {
    Migrations\SixCoreTables::up();
  }

  public function migrateUpAll(): void
  {
    \HiveAlpha::migrateUp();
    \HivePosts::migrateUp();
    Migrations\SixCoreTables::up();
  }

  public function migrateDown(): void
  {
    Migrations\SixCoreTables::down();
  }

  public function migrateDownAll(): void
  {
    \SixCore::migrateTldsDown();
    \HivePosts::migrateDown();
    Migrations\SixCoreTables::down();
  }
}
