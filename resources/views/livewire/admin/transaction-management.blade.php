<div class="space-y-8 animate-in fade-in duration-700">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-3xl font-black text-slate-900 tracking-tight">Financial Transactions</h1>
            <p class="text-slate-500 mt-1">Review and manage all bank-wide financial activities.</p>
        </div>
    </div>

    <div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-sm overflow-hidden">
        {{-- Table Header / Search --}}
        <div class="p-8 border-b border-slate-100 flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div class="relative w-full md:w-96">
                <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search by customer, type or desc..." 
                       class="w-full pl-12 pr-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none">
                <svg class="w-5 h-5 text-slate-400 absolute left-4 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            
            <div class="flex items-center space-x-3">
                <select class="px-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:bg-white focus:border-blue-500 transition-all outline-none appearance-none text-sm font-bold text-slate-700">
                    <option value="">All Types</option>
                    <option value="deposit">Deposits</option>
                    <option value="withdrawal">Withdrawals</option>
                    <option value="profit">Profits</option>
                </select>
                <button class="px-6 py-4 bg-slate-900 border border-transparent rounded-2xl text-white font-bold hover:bg-slate-800 transition shadow-lg">
                    Download CSV
                </button>
            </div>
        </div>

        {{-- Table Content --}}
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-100">
                        <th class="px-8 py-5 text-xs font-bold text-slate-500 uppercase tracking-widest">Date</th>
                        <th class="px-8 py-5 text-xs font-bold text-slate-500 uppercase tracking-widest">Customer</th>
                        <th class="px-8 py-5 text-xs font-bold text-slate-500 uppercase tracking-widest">Amount</th>
                        <th class="px-8 py-5 text-xs font-bold text-slate-500 uppercase tracking-widest">Type</th>
                        <th class="px-8 py-5 text-xs font-bold text-slate-500 uppercase tracking-widest">Description</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($transactions as $transaction)
                        <tr class="hover:bg-slate-50/50 transition-colors group">
                            <td class="px-8 py-6">
                                <p class="text-sm font-bold text-slate-700">{{ $transaction->trans_date->format('d M, Y') }}</p>
                                <p class="text-xs text-slate-400 mt-1">{{ $transaction->trans_date->format('H:i A') }}</p>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600 font-bold text-xs">
                                        {{ substr($transaction->user->full_name, 0, 1) }}
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900">{{ $transaction->user->full_name }}</p>
                                        <p class="text-xs text-slate-500">{{ $transaction->user->acc_num }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-6">
                                <p class="text-sm font-black {{ in_array($transaction->trans_type, ['deposit', 'profit']) ? 'text-green-600' : 'text-red-600' }}">
                                    {{ in_array($transaction->trans_type, ['deposit', 'profit']) ? '+' : '-' }}₦{{ number_format($transaction->amount, 2) }}
                                </p>
                            </td>
                            <td class="px-8 py-6">
                                <span class="capitalize inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-black tracking-widest uppercase {{ 
                                    $transaction->trans_type == 'deposit' ? 'bg-green-50 text-green-700' : (
                                    $transaction->trans_type == 'withdrawal' ? 'bg-red-50 text-red-700' : (
                                    $transaction->trans_type == 'profit' ? 'bg-blue-50 text-blue-700' : 'bg-slate-50 text-slate-700'))
                                }}">
                                    {{ $transaction->trans_type }}
                                </span>
                            </td>
                            <td class="px-8 py-6">
                                <p class="text-sm text-slate-600 truncate max-w-xs">{{ $transaction->description }}</p>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-8 py-20 text-center">
                                <div class="flex flex-col items-center justify-center">
                                    <div class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center mb-4 text-slate-400">
                                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                    </div>
                                    <p class="text-slate-500 font-bold">No transactions recorded yet.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="px-8 py-6 bg-slate-50 border-t border-slate-100">
            {{ $transactions->links() }}
        </div>
    </div>
</div>
