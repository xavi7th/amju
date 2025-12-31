<?php

namespace App\Livewire\BasicSite;

use Livewire\Component;

class EBanking extends Component
{
    public $type;

    public function mount($type = 'main')
    {
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.basic-site.e-banking')
            ->layout('components.layouts.app');
    }
}
