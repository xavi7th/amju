<?php

namespace App\Livewire\BasicSite;

use Livewire\Component;

class Legal extends Component
{
    public $type;

    public function mount($type = 'privacy')
    {
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.basic-site.legal')
            ->layout('components.layouts.app');
    }
}
