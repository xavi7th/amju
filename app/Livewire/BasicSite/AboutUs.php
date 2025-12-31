<?php

namespace App\Livewire\BasicSite;

use Livewire\Component;
use App\Models\TeamMember;

class AboutUs extends Component
{
    public $type;
    public $person;

    public function mount($type = 'main', $person = null)
    {
        $this->type = $type;
        $this->person = $person;
    }

    public function render()
    {
        $team = TeamMember::all();
        return view('livewire.basic-site.about-us', [
            'team' => $team
        ])->layout('components.layouts.app');
    }
}
