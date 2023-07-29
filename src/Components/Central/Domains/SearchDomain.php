<?php

namespace Sixincode\SixCore\Components\Central\Domains;

use Illuminate\View\Component;

class SearchDomain extends Component
{
  public function render()
  {
      return view('six-core::components.central.domains.searchDomain');
  }
}
