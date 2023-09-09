<?php

namespace Sixincode\SixCore;

use Sixincode\SixCore\Traits\Database as DatabaseTrait;

class SixCore
{
  use DatabaseTrait\SixCoreSeedersTrait;
  use DatabaseTrait\SixCoreMigrationsTrait;

}
