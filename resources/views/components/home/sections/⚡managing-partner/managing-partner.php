<?php

use App\Models\CompanyInfo;
use App\Models\Contact;
use Livewire\Component;

new class extends Component
{
   public $managingPartner;

   function mount()
   {
      $this->managingPartner = CompanyInfo::getData();
   }
};
