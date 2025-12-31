<?php

namespace App\Livewire\Admin;

use Livewire\Component;

use App\Models\Transaction;
use Livewire\WithPagination;

class TransactionManagement extends Component
{
    use WithPagination;

    public $search = '';

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $transactions = Transaction::with('user')
            ->whereHas('user', function ($query) {
                $query->where('full_name', 'like', '%' . $this->search . '%')
                      ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->orWhere('trans_type', 'like', '%' . $this->search . '%')
            ->orWhere('description', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(15);

        return view('livewire.admin.transaction-management', [
            'transactions' => $transactions
        ])->layout('components.layouts.admin');
    }
}
