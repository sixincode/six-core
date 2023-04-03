<?php

namespace Sixincode\SixCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class DomainsController extends Controller
{
    public function mainDomains()
    {
      return view('six-core::central.domains.mainDomains');
    }
}
