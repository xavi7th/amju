<?php

namespace App\Livewire\Admin;

use Livewire\Component;

use App\Models\User;
use App\Models\Admin;
use App\Models\Testimonial;
use App\Models\Message;

class Dashboard extends Component
{
    public $stats = [];

    public function mount()
    {
        $this->stats = [
            'total_users' => User::count(),
            'total_admins' => Admin::count(),
            'total_testimonials' => Testimonial::count(),
            'total_messages' => Message::count(),
        ];
    }

    public function render()
    {
        return view('livewire.admin.dashboard')
            ->layout('components.layouts.admin');
    }
}
