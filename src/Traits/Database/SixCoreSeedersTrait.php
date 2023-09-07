<?php

namespace Sixincode\SixCore\Traits\Database;

use Sixincode\SixCore\Database\Seeders\SixCoreSeeder;

trait SixCoreSeedersTrait
{
  public function seed()
  {
    \HiveAlpha::seedAdmin();
    $seeder = new SixCoreSeeder;
    return $seeder->run();
  }

}
