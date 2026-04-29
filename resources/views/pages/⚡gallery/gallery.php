<?php

use App\Models\Gallery;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;

new 
#[Title("Galleris")]
class extends Component
{
    #[Computed()]
    public function galleries()
    {
        return Gallery::getAllActive();
    }
};
