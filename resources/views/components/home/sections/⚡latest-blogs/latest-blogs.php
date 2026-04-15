<?php

use App\Models\Blog;
use Livewire\Component;

new class extends Component
{
    public $latestPost;

    public function mount()
    {
        $this->latestPost = Blog::getRecent(8);
    }
};
