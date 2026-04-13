<?php

use App\Models\Contact;
use App\Models\HeroSection;
use Livewire\Component;

new class extends Component
{
    public $heroSection, $contact;

    function mount()
    {
        /** @var CompanyInfo $company */
        $this->heroSection = HeroSection::getData();

        //** @var Contact $contact */
        $this->contact = Contact::getData();
    }
};
