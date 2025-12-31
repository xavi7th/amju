<?php

namespace App\Livewire\BasicSite;

use Livewire\Component;

class PersonalBanking extends Component
{
    public $type;

    public function mount($type = 'main')
    {
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.basic-site.personal-banking')
            ->layout('components.layouts.app');
    }
}
