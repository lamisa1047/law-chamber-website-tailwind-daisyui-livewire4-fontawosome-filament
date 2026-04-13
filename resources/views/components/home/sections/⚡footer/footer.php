<?php

use App\Models\CompanyInfo;
use App\Models\Contact;
use Livewire\Component;

new class extends Component
{
    public $companyName;
    public $logo;
    public $contact;

    function mount()
    {
        /** @var CompanyInfo $company */
        $company = CompanyInfo::getData();
        $this->companyName = $company->name;
        $this->logo = $company->logo;

        //** @var Contact $contact */
        $this->contact = Contact::getData();
    }
};
