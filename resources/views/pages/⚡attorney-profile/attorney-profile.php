<?php

use App\Models\Attorney;
use Livewire\Attributes\Url;
use Livewire\Component;

new class extends Component
{
    #[Url()]
    public $id;

    public $attorney;

    function mount()
    {
        $this->attorney = Attorney::getById((int) $this->id);

        // abort_if(!$this->attorney, 404);
    }
};
