<?php

// config for Sixincode/SixCore
return [
  'name' => 'SixCore',
    'identification'     => 'six-core',
    'models'             => [
      'domain'                      => Sixincode\SixCore\Models\Domain::class,
      'service'                     => Sixincode\SixCore\Models\Service::class,
      'tld'                         => Sixincode\SixCore\Models\Tld::class,
     ], 
    'table_names'        => [
      'domains'                     => 'domains',
      'services'                    => 'services',
      'tlds'                        => 'tlds',
     ],
    'column_names' =>[
      'domain_identifiant'          => 'domain_id',
      'service_identifiant'         => 'service_id',
      'tld_identifiant'             => 'tld_id',
     ],
];
