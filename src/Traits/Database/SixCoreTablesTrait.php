<?php

namespace Sixincode\SixCore\Traits\Database;

use Illuminate\Database\Schema\Blueprint;
use Sixincode\HiveHelpers\Traits\FieldsTrait;
use Sixincode\HiveAlpha\Traits\HiveAlphaDatabase;

trait SixCoreTablesTrait
{
  use FieldsTrait, HiveAlphaDatabase;

  public static function addServicesFields(Blueprint $table , $properties =[]): void
  {
    $table->addAlphaModelFields($table);
    $table->slugField('code');
    $table->isFeaturedField();
    $table->isDefaultField();
    $table->isPrivateField();
    $table->sortOrderField();
  }

  public static function addTldsFields(Blueprint $table , $properties =[]): void
  {
    $table->addAlphaModelFields($table);
    $table->slugField('code');
    $table->isFeaturedField();
    $table->isPrivateField();
    $table->sortOrderField();
  }

  public static function addDomainsFields(Blueprint $table , $properties =[]): void
  {
    $table->addAlphaModelFields($table);
    $table->slugField('code');
    $table->morphToOwner();
    $table->isFeaturedField();
    $table->isDefaultField();
    $table->isPrivateField();
    $table->sortOrderField();
  }



}
