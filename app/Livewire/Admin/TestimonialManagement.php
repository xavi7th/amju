<?php

namespace App\Livewire\Admin;

use Livewire\Component;

use App\Models\Testimonial;
use Livewire\WithPagination;

class TestimonialManagement extends Component
{
    use WithPagination;

    public function deleteTestimonial($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        session()->flash('message', 'Testimonial deleted successfully.');
    }

    public function render()
    {
        $testimonials = Testimonial::latest()->paginate(10);

        return view('livewire.admin.testimonial-management', [
            'testimonials' => $testimonials
        ])->layout('components.layouts.admin');
    }
}
