<?php

namespace App\Livewire\BasicSite;

use Livewire\Component;
use Livewire\WithFileUploads;

class Careers extends Component
{
    use WithFileUploads;

    public $type;
    
    // Form fields
    public $fullName;
    public $email;
    public $phone;
    public $position;
    public $resume;
    public $message;

    public function mount($type = 'main')
    {
        $this->type = $type;
    }

    public function submit()
    {
        $this->validate([
            'fullName' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'nullable',
            'position' => 'required',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120', // 5MB max
        ]);

        // In a real app, we'd save to DB or send email
        // For migration parity, we'll just show success
        
        $this->reset(['fullName', 'email', 'phone', 'position', 'resume', 'message']);
        session()->flash('success', 'Your application has been submitted successfully!');
    }

    public function render()
    {
        return view('livewire.basic-site.careers')
            ->layout('components.layouts.app');
    }
}
