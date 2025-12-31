<?php

namespace App\Livewire\BasicSite;

use Livewire\Component;
use App\Models\Message;

class ContactUs extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();

        Message::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        session()->flash('success', 'Your message has been sent successfully!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.basic-site.contact-us')
            ->layout('components.layouts.app');
    }
}
