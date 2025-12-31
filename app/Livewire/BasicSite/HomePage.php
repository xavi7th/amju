<?php

namespace App\Livewire\BasicSite;

use Livewire\Component;

class HomePage extends Component
{
    public $slideCount = 8;

    public function render()
    {
        return view('livewire.basic-site.home-page');
    }
}
