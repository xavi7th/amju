<?php

namespace App\Livewire\BasicSite;

use Livewire\Component;

class InvestorRelations extends Component
{
    public $type;

    public function mount($type = 'main')
    {
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.basic-site.investor-relations')
            ->layout('components.layouts.app');
    }
}
