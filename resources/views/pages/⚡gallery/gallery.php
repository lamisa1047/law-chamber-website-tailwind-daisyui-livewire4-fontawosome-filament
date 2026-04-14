<?php

use App\Models\Gallery;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component
{
    #[Computed()]
    public function galleries()
    {
        return Gallery::getAllActive();
    }
};
