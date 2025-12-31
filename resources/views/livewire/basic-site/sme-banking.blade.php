<div class="mt-20">
    <!-- Breadcrumb/Header -->
    <div class="bg-slate-900 border-b border-white/5 py-12">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-black text-white mb-4">SME <span class="text-blue-500">Banking</span></h1>
            <nav class="flex text-sm font-bold text-slate-400 uppercase tracking-widest">
                <a href="{{ route('home') }}" class="hover:text-blue-500 transition">Home</a>
                <span class="mx-3">/</span>
                <a href="{{ route('banking.sme') }}" class="{{ $type === 'main' ? 'text-blue-500' : 'hover:text-blue-500 transition' }}">SME Banking</a>
                @if($type !== 'main')
                    <span class="mx-3">/</span>
                    <span class="text-blue-500 uppercase">{{ str_replace(['-account', '-current', '-'], ' ', $type) }}</span>
                @endif
            </nav>
        </div>
    </div>

    <div class="bg-white">
        <div class="container mx-auto px-6 py-16">
            <div class="flex flex-col lg:flex-row gap-16">
                <!-- Sidebar Navigation -->
                <aside class="w-full lg:w-1/4">
                    <div class="sticky top-32">
                        <div class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-6 pl-4 hidden lg:block">SME Solutions</div>
                        
                        <!-- Mobile Dropdown / Horizontal Scroll -->
                        <div class="lg:block overflow-x-auto pb-4 md:pb-0 -mx-6 px-6 lg:mx-0 lg:px-0 scrollbar-hide">
                            <div class="flex lg:flex-col gap-3 min-w-max lg:min-w-0">
                                @php
                                    $links = [
                                        'main' => 'Overview',
                                        'platinum-current-account' => 'Platinum Current',
                                        'coporate-current-account' => 'Corporate Current',
                                        'overdraft-current-account' => 'Overdraft Account',
                                        'divine-current-account' => 'Divine (Churches)',
                                        'cooperative-current-account' => 'Cooperative Account',
                                        'group-leading-current-account' => 'Group Lending',
                                    ];
                                @endphp
        
                                @foreach($links as $linkType => $label)
                                    <a href="{{ $linkType === 'main' ? route('banking.sme') : route('banking.sme.product', ['type' => $linkType]) }}" 
                                       class="flex items-center px-6 py-4 rounded-2xl font-bold transition-all duration-300 whitespace-nowrap lg:whitespace-normal {{ $type === $linkType ? 'bg-blue-600 text-white shadow-xl shadow-blue-600/20' : 'bg-slate-50 lg:bg-transparent text-slate-600 hover:bg-slate-100 hover:text-blue-600' }}">
                                        <span>{{ $label }}</span>
                                        @if($type === $linkType)
                                            <svg class="w-5 h-5 ml-auto hidden lg:block" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                                        @endif
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <div class="mt-12 p-8 bg-blue-600 rounded-[2rem] text-white hidden lg:block">
                            <h4 class="font-black text-xl mb-4">Grow with us</h4>
                            <p class="text-blue-100 text-sm mb-6">Empower your business with tailored credit facilities and support.</p>
                            <a href="{{ route('account.open') }}" class="inline-flex items-center px-6 py-3 bg-white text-blue-600 font-black rounded-xl hover:bg-slate-50 transition">
                                Open Account
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- Main Content Area -->
                <main class="lg:w-3/4">
                    @if($type === 'main')
                        <div class="space-y-16">
                            <div class="max-w-2xl">
                                <h2 class="text-4xl font-black text-slate-900 mb-6 font-display">Fuel your <span class="text-blue-600">Business Growth</span></h2>
                                <p class="text-slate-500 text-lg leading-relaxed">We provide more than just banking; we provide a partnership. Our SME solutions are designed to help wholesalers, traders, and cooperatives scale efficiently.</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                @foreach([
                                    ['title' => 'Platinum Current', 'slug' => 'platinum-current-account', 'desc' => 'Withdraw at any correspondence commercial bank branch nationwide.'],
                                    ['title' => 'Corporate Current', 'slug' => 'coporate-current-account', 'desc' => 'Comprehensive current account for limited liability companies.'],
                                    ['title' => 'Overdraft Account', 'slug' => 'overdraft-current-account', 'desc' => 'Tailored for telecom wholesalers and high-frequency traders.'],
                                    ['title' => 'Divine Account', 'slug' => 'divine-current-account', 'desc' => 'Specialized financial support for churches and religious bodies.'],
                                ] as $item)
                                    <a href="{{ route('banking.sme.product', ['type' => $item['slug']]) }}" class="group p-10 bg-slate-50 rounded-[3rem] border border-slate-100 hover:bg-white hover:shadow-2xl hover:border-blue-100 transition-all duration-500">
                                        <div class="w-14 h-14 bg-white rounded-2xl shadow-sm flex items-center justify-center mb-8 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                                        </div>
                                        <h3 class="text-2xl font-black text-slate-900 mb-4">{{ $item['title'] }}</h3>
                                        <p class="text-slate-500 leading-relaxed mb-8">{{ $item['desc'] }}</p>
                                        <span class="text-blue-600 font-black flex items-center group-hover:translate-x-2 transition-transform">
                                            Learn More
                                            <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                                        </span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="space-y-12 animate-in fade-in slide-in-from-bottom-4 duration-500">
                            @switch($type)
                                @case('platinum-current-account')
                                @case('coporate-current-account')
                                    <h2 class="text-4xl font-black text-slate-900 font-display uppercase">{{ str_replace('-', ' ', $type) }}</h2>
                                    <div class="prose prose-blue max-w-none">
                                        <div class="bg-blue-50 p-8 rounded-[2rem] border border-blue-100 mb-12">
                                            <p class="text-blue-800/80 leading-relaxed">Special current account that allows customers to withdraw with our cheque in any branch of our correspondence commercial bank (Fidelity Bank) all over Nigeria.</p>
                                        </div>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-12">
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6 flex items-center">
                                                    <span class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-3 text-sm">1</span>
                                                    Features
                                                </h4>
                                                <ul class="space-y-4">
                                                    @foreach(['Minimum opening balance of N10,000', 'For individuals and companies', 'Loan & Overdraft applications'] as $feature)
                                                        <li class="flex items-start space-x-3 text-slate-600">
                                                            <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                            <span>{{ $feature }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6 flex items-center">
                                                    <span class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-3 text-sm">2</span>
                                                    Benefits
                                                </h4>
                                                <ul class="space-y-4">
                                                    @foreach(['Nationwide withdrawal via Fidelity Bank', 'Free access to Chequebook', 'Full Mobile & Internet Banking', 'Verve Debit Card'] as $benefit)
                                                        <li class="flex items-start space-x-3 text-slate-600">
                                                            <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                            <span>{{ $benefit }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="mt-16 p-10 bg-slate-50 rounded-[3rem] border border-slate-100">
                                            <h4 class="text-xl font-black text-slate-900 mb-8">Onboarding Requirements</h4>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                                @foreach(['Completed Account Form', '2 Recent Passport Photographs', 'Two independent references', 'Valid ID & Utility Bill'] as $req)
                                                    <div class="flex items-center space-x-4 p-4 bg-white rounded-2xl border border-slate-100 font-bold text-slate-700">
                                                        <svg class="w-6 h-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                                        <span>{{ $req }}</span>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('overdraft-current-account')
                                    <h2 class="text-4xl font-black text-slate-900 font-display uppercase">Overdraft Current Account</h2>
                                    <div class="prose prose-blue max-w-none">
                                        <div class="bg-blue-50 p-8 rounded-[2rem] border border-blue-100 mb-12">
                                            <p class="text-blue-800/80 leading-relaxed">Optimized for high-volume traders and telecom wholesalers. Competitive interest rates and flexible liquidity access.</p>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-12">
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6 flex items-center">
                                                    <span class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-3 text-sm">1</span>
                                                    Features
                                                </h4>
                                                <ul class="space-y-4">
                                                    <li class="flex items-start space-x-3 text-slate-600 font-bold italic text-blue-700">
                                                        Specialized for Telecom Dealers
                                                    </li>
                                                    @foreach(['N10,000 Minimum balance', 'Attractive interest rates', 'Fast credit turnover'] as $feature)
                                                        <li class="flex items-start space-x-3 text-slate-600">
                                                            <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                            <span>{{ $feature }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6 flex items-center">
                                                    <span class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-3 text-sm">2</span>
                                                    Benefits
                                                </h4>
                                                <ul class="space-y-4">
                                                    @foreach(['Instant payment (NIP) support', 'Email/SMS Transaction Alerts', 'Internet Banking Access', 'Free access to Chequebook'] as $benefit)
                                                        <li class="flex items-start space-x-3 text-slate-600">
                                                            <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                            <span>{{ $benefit }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('divine-current-account')
                                    <h2 class="text-4xl font-black text-slate-900 font-display uppercase">Divine Account</h2>
                                    <div class="prose prose-blue max-w-none">
                                        <div class="bg-blue-50 p-8 rounded-[2rem] border border-blue-100 mb-12">
                                            <p class="text-blue-800/80 leading-relaxed">Specialized financial support for churches. We help you fund assets like instruments, building equipment, generators, and vehicles.</p>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-12">
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6 flex items-center">
                                                    <span class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-3 text-sm">1</span>
                                                    Features
                                                </h4>
                                                <ul class="space-y-4">
                                                    @foreach(['Open with N5,000', 'Current or Savings option', '30% asset equity requirement', 'Bank funds 70% of asset cost'] as $feature)
                                                        <li class="flex items-start space-x-3 text-slate-600">
                                                            <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                            <span>{{ $feature }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6 flex items-center">
                                                    <span class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-3 text-sm">2</span>
                                                    Benefits
                                                </h4>
                                                <ul class="space-y-4">
                                                    <li class="flex items-start space-x-3 text-slate-600 font-bold italic text-blue-700">
                                                        Specifically designed to promote the gospel
                                                    </li>
                                                    @foreach(['Easy access to credit facilities', 'Asset repayment up to 12 months', 'Mobile App & SMS Alerts'] as $benefit)
                                                        <li class="flex items-start space-x-3 text-slate-600">
                                                            <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                            <span>{{ $benefit }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('cooperative-current-account')
                                    <h2 class="text-4xl font-black text-slate-900 font-display uppercase">Cooperative Account</h2>
                                    <div class="prose prose-blue max-w-none">
                                        <div class="bg-blue-50 p-8 rounded-[2rem] border border-blue-100 mb-12">
                                            <p class="text-blue-800/80 leading-relaxed">Unique finance independence for MPCS accounts. Earn interest and dividends while owning share capital.</p>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-12">
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6 flex items-center">
                                                    <span class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-3 text-sm">1</span>
                                                    Registration
                                                </h4>
                                                <ul class="space-y-4">
                                                    @foreach(['N1,000 for Onboarding Form', 'N5,000 Registration fee', 'Available globally'] as $feature)
                                                        <li class="flex items-start space-x-3 text-slate-600">
                                                            <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                            <span>{{ $feature }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6 flex items-center">
                                                    <span class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-3 text-sm">2</span>
                                                    Benefits
                                                </h4>
                                                <ul class="space-y-4">
                                                    @foreach(['Free access to loan facilities', 'Earn interest & monthly dividends', 'Ownership of share capital'] as $benefit)
                                                        <li class="flex items-start space-x-3 text-slate-600">
                                                            <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                            <span>{{ $benefit }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('group-leading-current-account')
                                    <h2 class="text-4xl font-black text-slate-900 font-display uppercase">Group Lending Account</h2>
                                    <div class="prose prose-blue max-w-none">
                                        <div class="bg-blue-50 p-8 rounded-[2rem] border border-blue-100 mb-12">
                                            <p class="text-blue-800/80 leading-relaxed">For existing cooperative societies, Town unions, Trade unions, and specific trade clusters like Garri, Fish, Yam, and Pepper sellers.</p>
                                        </div>
                                        <div class="mt-12 p-10 bg-slate-50 rounded-[3rem] border border-slate-100">
                                            <h4 class="text-xl font-black text-slate-900 mb-8">Group Benefits</h4>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                                @foreach(['*723*306* EazyBanking', 'Free access to Chequebook', 'Verve Debit Cards', 'Email/SMS Transaction Alerts'] as $benefit)
                                                    <div class="flex items-center space-x-4 p-4 bg-white rounded-2xl border border-slate-100 font-bold text-slate-700">
                                                        <svg class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                                                        <span>{{ $benefit }}</span>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @default
                                     <h2 class="text-4xl font-black text-slate-900 font-display uppercase">{{ str_replace('-', ' ', $type) }}</h2>
                                     <div class="bg-slate-50 p-12 rounded-[3rem] border border-slate-100 text-center">
                                         <p class="text-slate-500 text-lg italic uppercase tracking-tighter">Content coming soon...</p>
                                     </div>
                            @endswitch

                            <div class="pt-12 border-t border-slate-100 flex flex-col sm:flex-row gap-6">
                                <a href="{{ route('account.open') }}" class="inline-flex items-center justify-center px-10 py-5 bg-blue-600 text-white font-black text-lg rounded-2xl hover:bg-blue-700 transition shadow-2xl shadow-blue-600/20">
                                    Open SME Account
                                </a>
                                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-10 py-5 border-2 border-slate-200 text-slate-900 font-black text-lg rounded-2xl hover:bg-slate-50 transition">
                                    Request Business Loan
                                </a>
                            </div>
                        </div>
                    @endif
                </main>
            </div>
        </div>
    </div>
</div>
