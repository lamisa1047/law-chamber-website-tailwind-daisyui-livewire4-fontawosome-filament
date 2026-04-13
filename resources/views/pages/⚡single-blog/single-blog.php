<?php

use App\Models\Blog;
use Livewire\Attributes\Url;
use Livewire\Component;

new class extends Component
{
    #[Url()]
    public string $slug;


    public function post()
    {
        return Blog::getBySlug($this->slug);
    }
};
