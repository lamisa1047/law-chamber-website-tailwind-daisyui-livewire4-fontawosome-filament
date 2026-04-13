<?php

use App\Models\Attorney;
use Livewire\Component;

new class extends Component
{
    public $attorneys;

    function mount()
    {
        $this->attorneys = Attorney::getAllActive();
    }
};
