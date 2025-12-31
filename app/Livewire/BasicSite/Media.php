<?php

namespace App\Livewire\BasicSite;

use Livewire\Component;

class Media extends Component
{
    public $type;

    public function mount($type = 'news')
    {
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.basic-site.media')
            ->layout('components.layouts.app');
    }
}
