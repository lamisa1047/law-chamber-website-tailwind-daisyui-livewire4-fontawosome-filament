<?php

use App\Models\Faq;
use Livewire\Attributes\Title;
use Livewire\Component;

new
    #[Title("Frequently Asked Questions - FAQs")]
    class extends Component
    {
        public $faqs;

        function mount()
        {
            $this->faqs = Faq::getAllActive();
        }
    };
