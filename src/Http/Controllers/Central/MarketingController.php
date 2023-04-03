<?php

namespace Sixincode\SixCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    public function mainMarketing()
    {
      return view('six-core::central.marketing.mainMarketing');
    }
}
