<?php

use App\Models\Contact;
use Livewire\Attributes\Title;
use Livewire\Component;

new
    #[Title("Contact")]
    class extends Component
    {
        public $contact;

        function mount()
        {
            /**@var Contact $contact */
            $this->contact = Contact::getData();
        }
    };
