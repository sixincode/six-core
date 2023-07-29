<?php

namespace Sixincode\SixCore\Http\Livewire\Central\Domains;

use Livewire\Component;

class FindDomains extends Component
{
  public $domainToInquire;
  public bool $inquireAvailability;

  public function mount(
    $domainToInquire = null,
    $inquireAvailability = false,
    )
  {
    $this->domainToInquire = $domainToInquire;
    $this->inquireAvailability = $inquireAvailability;
  }

  public function render()
  {
    return view('six-core::livewire.central.domains.findDomains');
  }

}
