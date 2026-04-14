<?php

use App\Models\Blog;
use App\Models\Category;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component
{

    use WithPagination;

    #[Url()]
    public $category;

    #[Computed()]
    public function posts()
    {
        return Blog::getPaginated($this->category);
    }

    #[Computed()]
    public function categories()
    {
        return Category::getAll();
    }
};
