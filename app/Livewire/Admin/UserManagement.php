<?php

namespace App\Livewire\Admin;

use Livewire\Component;

use App\Models\User;
use Livewire\WithPagination;

class UserManagement extends Component
{
    use WithPagination;

    public $search = '';

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        session()->flash('message', 'User deleted successfully.');
    }

    public function render()
    {
        $users = User::where('full_name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orWhere('phone', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(10);

        return view('livewire.admin.user-management', [
            'users' => $users
        ])->layout('components.layouts.admin');
    }
}
