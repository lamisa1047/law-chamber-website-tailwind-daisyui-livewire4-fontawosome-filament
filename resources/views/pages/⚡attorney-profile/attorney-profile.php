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
    }

    public function render()
    {
        return $this->view()
            ->title("Attorney: {$this?->attorney?->name}");
    }
};
