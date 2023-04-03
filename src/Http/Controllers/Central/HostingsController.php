<?php

namespace Sixincode\SixCore\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class HostingsController extends Controller
{
    public function mainHostings()
    {
      return view('six-core::central.hostings.mainHostings');
    }
}
