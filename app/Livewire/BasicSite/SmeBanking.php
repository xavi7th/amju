<?php

namespace App\Livewire\BasicSite;

use Livewire\Component;

class SmeBanking extends Component
{
    public $type;

    public function mount($type = 'main')
    {
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.basic-site.sme-banking')
            ->layout('components.layouts.app');
    }
}
