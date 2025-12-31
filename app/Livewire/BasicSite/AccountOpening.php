<?php

namespace App\Livewire\BasicSite;

use Livewire\Component;

use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AccountOpening extends Component
{
    use WithFileUploads;

    public $currentStep = 1;
    public $totalSteps = 3;

    // Form fields
    public $full_name;
    public $email;
    public $phone;
    public $gender;
    public $dob;
    public $acc_type;
    public $bvn;
    public $address;
    public $user_passport;

    public $successMessage = '';

    public function nextStep()
    {
        $this->validateCurrentStep();
        $this->currentStep++;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    public function validateCurrentStep()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'full_name' => 'required|max:255|string|unique:users,full_name',
                'email' => 'required|email|max:100|unique:users,email',
                'phone' => 'required|string|max:35|unique:users,phone',
                'gender' => 'required|string',
                'dob' => 'required|date',
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'acc_type' => 'required|string|max:15',
                'bvn' => 'nullable|numeric|digits_between:11,12|unique:users,bvn',
                'address' => 'required|string',
            ]);
        }
    }

    public function submit()
    {
        $this->validate([
            'user_passport' => 'required|image|max:2048', // 2MB Max
        ]);

        $passportPath = $this->user_passport->store('user_passports', 'public');
        $passportUrl = '/storage/' . $passportPath;

        User::create([
            'full_name' => $this->full_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'bvn' => $this->bvn,
            'gender' => $this->gender,
            'acc_type' => $this->acc_type,
            'acc_num' => (string) rand(1000000000, 9999999999),
            'address' => $this->address,
            'dob' => Carbon::parse($this->dob),
            'user_passport' => $passportUrl,
            'is_processed' => false,
        ]);

        $this->successMessage = 'Your account opening request has been submitted successfully! We will contact you shortly.';
        $this->currentStep = 4; // Success step
    }

    public function render()
    {
        return view('livewire.basic-site.account-opening')
            ->layout('components.layouts.app');
    }
}
