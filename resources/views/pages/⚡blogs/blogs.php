<?php

use App\Models\Blog;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component
{

    use WithPagination;

    #[Computed()]
    public function posts()
    {
        return Blog::getPaginated();
    }
};
