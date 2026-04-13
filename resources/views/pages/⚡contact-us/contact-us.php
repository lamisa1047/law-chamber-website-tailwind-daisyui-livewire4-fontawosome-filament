<?php

use App\Models\Contact;
use Livewire\Component;

new class extends Component
{
    public $contact;

    function mount()
    {
        /**@var Contact $contact */
        $this->contact = Contact::getData();
    }
};
