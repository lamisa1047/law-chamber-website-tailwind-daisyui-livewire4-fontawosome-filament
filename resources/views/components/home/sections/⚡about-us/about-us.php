<?php

use App\Models\CompanyInfo;
use Livewire\Component;

new class extends Component
{
    public $companyInfo;

    function mount()
    {
        /** @var CompanyInfo $company */
        $this->companyInfo = CompanyInfo::getData();
    }
};