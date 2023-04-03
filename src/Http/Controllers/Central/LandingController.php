<?php

namespace Sixincode\SixCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function mainLanding()
    {
      return view('six-core::central.landing.mainLanding');
    }
}
