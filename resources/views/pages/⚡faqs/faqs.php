<?php

use App\Models\Faq;
use Livewire\Component;

new class extends Component
{
    public $faqs;

    function mount()
    {
        $this->faqs = Faq::getAllActive();
    }
};
