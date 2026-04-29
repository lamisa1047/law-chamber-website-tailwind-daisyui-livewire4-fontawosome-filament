<?php

use App\Models\Blog;
use App\Models\Category;
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

    public function categories()
    {
        return Category::getAll();
    }

    public function render()
    {
        return $this->view()
            ->title("{$this?->post()?->title}");
    }
};
