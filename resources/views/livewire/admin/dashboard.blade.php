<div class="space-y-8 animate-in fade-in duration-700">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-3xl font-black text-slate-900 tracking-tight">System Overview</h1>
            <p class="text-slate-500 mt-1">Monitor your bank's performance and user activity.</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="px-5 py-2.5 bg-white border border-slate-200 rounded-xl text-sm font-bold text-slate-700 hover:bg-slate-50 transition shadow-sm">
                Generate Report
            </button>
            <button class="px-5 py-2.5 bg-blue-600 rounded-xl text-sm font-bold text-white hover:bg-blue-700 transition shadow-lg shadow-blue-600/20">
                Quick Action
            </button>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ([
            ['label' => 'Total Users', 'value' => $stats['total_users'], 'icon' => 'user-group', 'color' => 'blue'],
            ['label' => 'System Admins', 'value' => $stats['total_admins'], 'icon' => 'shield-check', 'color' => 'indigo'],
            ['label' => 'Total Messages', 'value' => $stats['total_messages'], 'icon' => 'chat-bubble-left-right', 'color' => 'emerald'],
            ['label' => 'Testimonials', 'value' => $stats['total_testimonials'], 'icon' => 'star', 'color' => 'amber'],
        ] as $item)
            <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm hover:shadow-xl hover:shadow-slate-200/50 transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-{{ $item['color'] }}-50 text-{{ $item['color'] }}-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            @if ($item['icon'] == 'user-group')
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            @elseif ($item['icon'] == 'shield-check')
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            @elseif ($item['icon'] == 'chat-bubble-left-right')
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.827-1.213L3 20l1.391-3.952A9.195 9.195 0 018 4c4.97 0 9 3.582 9 8z" />
                            @elseif ($item['icon'] == 'star')
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.382-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            @endif
                        </svg>
                    </div>
                </div>
                <p class="text-sm font-bold text-slate-500 uppercase tracking-widest">{{ $item['label'] }}</p>
                <div class="flex items-end justify-between mt-2">
                    <h3 class="text-3xl font-black text-slate-900">{{ number_format($item['value']) }}</h3>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Charts & Tables Section placeholder -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 bg-white rounded-[2.5rem] border border-slate-200 p-8 shadow-sm">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-xl font-bold text-slate-800">Recent Activity</h3>
                <a href="#" class="text-sm font-bold text-blue-600 hover:text-blue-700 transition">View All</a>
            </div>
            <div class="space-y-6">
                <!-- Empty state for now -->
                <div class="flex flex-col items-center justify-center py-20 text-center">
                    <div class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center mb-4 text-slate-400">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012-2" />
                        </svg>
                    </div>
                    <p class="text-slate-500 font-medium">No recent activity detected.</p>
                </div>
            </div>
        </div>
        
        <div class="bg-blue-600 rounded-[2.5rem] p-8 text-white relative overflow-hidden shadow-2xl shadow-blue-600/30">
            <div class="relative z-10 space-y-6">
                <h3 class="text-xl font-bold">Quick Insight</h3>
                <p class="text-blue-100 leading-relaxed">Your bank's user base has seen a 12% growth over the past month. Keep up the great work!</p>
                <div class="pt-4">
                    <button class="w-full py-4 bg-white text-blue-600 font-bold rounded-2xl transition hover:bg-slate-50">
                        View Growth Analytics
                    </button>
                </div>
            </div>
            <!-- Decorative circle -->
            <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
        </div>
    </div>
</div>
llment, you will never truly be fulfilled. --}}
</div>
