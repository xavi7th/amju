<div class="space-y-8 animate-in fade-in duration-700">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-3xl font-black text-slate-900 tracking-tight">User Management</h1>
            <p class="text-slate-500 mt-1">Manage and monitor all bank customers.</p>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="p-4 rounded-2xl bg-green-50 text-green-700 border border-green-100 font-bold text-sm animate-in slide-in-from-top-4">
            {{ session('message') }}
        </div>
    @endif

    <div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-sm overflow-hidden">
        {{-- Table Header / Search --}}
        <div class="p-8 border-b border-slate-100 flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div class="relative w-full md:w-96">
                <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search by name, email or phone..." 
                       class="w-full pl-12 pr-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none">
                <svg class="w-5 h-5 text-slate-400 absolute left-4 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            
            <button class="px-6 py-4 bg-blue-600 rounded-2xl text-white font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-600/20">
                Export Users
            </button>
        </div>

        {{-- Table Content --}}
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-100">
                        <th class="px-8 py-5 text-xs font-bold text-slate-500 uppercase tracking-widest">Customer</th>
                        <th class="px-8 py-5 text-xs font-bold text-slate-500 uppercase tracking-widest">Contact</th>
                        <th class="px-8 py-5 text-xs font-bold text-slate-500 uppercase tracking-widest">Account Details</th>
                        <th class="px-8 py-5 text-xs font-bold text-slate-500 uppercase tracking-widest">Status</th>
                        <th class="px-8 py-5 text-xs font-bold text-slate-500 uppercase tracking-widest text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($users as $user)
                        <tr class="hover:bg-slate-50/50 transition-colors group">
                            <td class="px-8 py-6">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 rounded-2xl overflow-hidden bg-slate-100 border border-slate-200">
                                        @if ($user->user_passport)
                                            <img src="{{ $user->user_passport }}" class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full flex items-center justify-center text-slate-400 bg-slate-50">
                                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-900">{{ $user->full_name }}</p>
                                        <p class="text-xs text-slate-500">{{ $user->gender }} • {{ $user->dob ? $user->dob->format('d M Y') : 'N/A' }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-6">
                                <p class="text-sm font-medium text-slate-700">{{ $user->email }}</p>
                                <p class="text-xs text-slate-500 mt-1">{{ $user->phone }}</p>
                            </td>
                            <td class="px-8 py-6">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-slate-100 text-slate-600 uppercase">
                                    {{ $user->acc_type ?? 'N/A' }}
                                </span>
                                <p class="text-xs font-mono text-slate-500 mt-1">{{ $user->acc_num ?? 'N/A' }}</p>
                            </td>
                            <td class="px-8 py-6">
                                @if ($user->verified_at)
                                    <span class="inline-flex items-center space-x-1.5 px-3 py-1 bg-green-50 text-green-600 rounded-full text-xs font-bold">
                                        <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                                        <span>Verified</span>
                                    </span>
                                @else
                                    <span class="inline-flex items-center space-x-1.5 px-3 py-1 bg-amber-50 text-amber-600 rounded-full text-xs font-bold">
                                        <span class="w-1.5 h-1.5 bg-amber-500 rounded-full shadow-sm"></span>
                                        <span>Pending</span>
                                    </span>
                                @endif
                            </td>
                            <td class="px-8 py-6 text-right">
                                <div class="flex items-center justify-end space-x-2">
                                    <button class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                    <button onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" 
                                            wire:click="deleteUser({{ $user->id }})" 
                                            class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-xl transition">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-8 py-20 text-center">
                                <div class="flex flex-col items-center justify-center">
                                    <div class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center mb-4 text-slate-400">
                                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </div>
                                    <p class="text-slate-500 font-bold">No users found.</p>
                                    <p class="text-sm text-slate-400 mt-1">Try adjusting your search query.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="px-8 py-6 bg-slate-50 border-t border-slate-100">
            {{ $users->links() }}
        </div>
    </div>
</div>
