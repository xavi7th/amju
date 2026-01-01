<div class="mt-20">
    @php
        $bannerImage = asset('img/banners/digital-banking.jpg');
        
    @endphp

    <!-- Breadcrumb/Header -->
    <div class="relative bg-slate-900 border-b border-white/5 py-24 overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ $bannerImage }}" class="w-full h-full object-cover" alt="Digital Banking">
            <div class="absolute inset-0 bg-slate-900/80"></div>
        </div>
        <div class="relative container mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-black text-white mb-4">Digital <span class="text-amju-primary">Banking</span></h1>
            <nav class="flex text-sm font-bold text-slate-400 uppercase tracking-widest">
                <a href="{{ route('home') }}" class="hover:text-amju-primary transition">Home</a>
                <span class="mx-3">/</span>
                <a href="{{ route('banking.e') }}" class="{{ $type === 'main' ? 'text-amju-primary' : 'hover:text-amju-primary transition' }}">e-Banking</a>
                @if($type !== 'main')
                    <span class="mx-3">/</span>
                    <span class="text-amju-primary uppercase">{{ str_replace(['-', 'services'], ' ', $type) }}</span>
                @endif
            </nav>
        </div>
    </div>

    <div class="bg-white text-slate-900">
        <div class="container mx-auto px-6 py-16">



            <div class="flex flex-col lg:flex-row gap-16">
                <!-- Sidebar -->
                <aside class="w-full lg:w-1/4">
                    <div class="sticky top-32">
                        <div class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-6 pl-4 hidden lg:block">e-Services</div>
                        
                        <!-- Mobile Dropdown / Horizontal Scroll -->
                        <div class="lg:block overflow-x-auto pb-4 md:pb-0 -mx-6 px-6 lg:mx-0 lg:px-0 scrollbar-hide">
                            <div class="flex lg:flex-col gap-3 min-w-max lg:min-w-0">
                                @php
                                    $links = [
                                        'main' => 'Digital Overview',
                                        'atm' => 'ATM Services',
                                        'mobile-banking' => 'Mobile Banking',
                                        'internet-banking' => 'Internet Banking',
                                        'pos' => 'POS Solutions',
                                        'ussd-codes' => 'USSD Codes (*723*306#)',
                                        'nip' => 'NIP & Transfers',
                                    ];
                                @endphp
        
                                @foreach($links as $linkType => $label)
                                    <a href="{{ $linkType === 'main' ? route('banking.e') : route('banking.e.product', ['type' => $linkType]) }}" 
                                       class="flex items-center px-6 py-4 rounded-2xl font-bold transition-all duration-300 whitespace-nowrap lg:whitespace-normal {{ $type === $linkType ? 'bg-amju-primary text-white shadow-xl shadow-amju-primary/20' : 'bg-slate-50 lg:bg-transparent text-slate-600 hover:bg-slate-100 hover:text-amju-primary' }}">
                                        <span>{{ $label }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        
                        <div class="mt-12 p-8 bg-slate-50 rounded-[2rem] border border-slate-100 hidden lg:block">
                            <h4 class="font-black text-xl mb-4 text-slate-900">Mobile App</h4>
                            <p class="text-slate-500 text-sm mb-6">Experience banking without limits on your smartphone.</p>
                            <div class="flex flex-col gap-3">
                                <a href="https://apps.apple.com/us/app/amju-mfb/id1537937432" target="_blank" class="flex items-center px-6 py-3 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition shadow-sm group">
                                    <img src="/img/app-store.png" class="w-8 h-8 mr-4" alt="App Store">
                                    <div class="text-left">
                                        <div class="text-[10px] uppercase font-bold text-slate-500 leading-none">Download on the</div>
                                        <div class="text-sm font-black text-slate-900">App Store</div>
                                    </div>
                                </a>
                                <a href="https://play.google.com/store/apps/details?id=com.amjum" target="_blank" class="flex items-center px-6 py-3 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition shadow-sm group">
                                    <img src="/img/google-play.png" class="w-8 h-8 mr-4" alt="Google Play">
                                    <div class="text-left">
                                        <div class="text-[10px] uppercase font-bold text-slate-500 leading-none">Get it on</div>
                                        <div class="text-sm font-black text-slate-900">Google Play</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- Content -->
                <main class="lg:w-3/4">
                    @if($type === 'main')
                        <div class="space-y-16">
                            <div class="max-w-2xl">
                                <h2 class="text-4xl font-black text-slate-900 mb-6 font-display">Bank <span class="text-amju-primary">Anywhere, Anytime</span></h2>
                                <p class="text-slate-500 text-lg leading-relaxed">Our digital banking channels are designed to provide you with seamless access to your funds, real-time transfers, and convenient bill payments without stepping into a bank branch.</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                @foreach([
                                    ['title' => 'USSD Banking', 'icon' => 'smartphone', 'desc' => 'Dial *723*306# to bank without data.', 'slug' => 'ussd-codes'],
                                    ['title' => 'Mobile App', 'icon' => 'device-mobile', 'desc' => 'Download our robust app for Android and iOS.', 'slug' => 'mobile-banking'],
                                    ['title' => 'Internet Banking', 'icon' => 'globe', 'desc' => 'Secure online portal for corporate & personal use.', 'slug' => 'internet-banking'],
                                    ['title' => 'ATM Services', 'icon' => 'credit-card', 'desc' => '24/7 access via our nationwide ATM network.', 'slug' => 'atm'],
                                ] as $service)
                                    <a href="{{ route('banking.e.product', ['type' => $service['slug']]) }}" class="p-10 bg-slate-50 rounded-[3rem] border border-slate-100 group hover:bg-white hover:shadow-2xl transition-all duration-500">
                                        <div class="text-amju-primary mb-8 group-hover:scale-110 transition-transform">
                                            @if($service['icon'] === 'smartphone') <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg> @endif
                                            @if($service['icon'] === 'device-mobile') <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg> @endif
                                            @if($service['icon'] === 'globe') <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" /></svg> @endif
                                            @if($service['icon'] === 'credit-card') <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" /></svg> @endif
                                        </div>
                                        <h3 class="text-2xl font-black text-slate-900 mb-4">{{ $service['title'] }}</h3>
                                        <p class="text-slate-500 leading-relaxed">{{ $service['desc'] }}</p>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="animate-in fade-in slide-in-from-bottom-4 duration-500">
                            @switch($type)
                                @case('ussd-codes')
                                    <div class="space-y-12">
                                        <div>
                                            <h2 class="text-4xl font-black text-slate-900 mb-6 font-display">USSD Banking <span class="text-amju-primary block text-5xl mt-2">*723*306#</span></h2>
                                            <p class="text-slate-500 text-lg">Amju EazyBanking is a fast, secure, and affordable way to bank 24/7 without internet data.</p>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                            <div class="p-8 bg-amju-primary/10 rounded-[3rem] border border-amju-primary/10">
                                                <h4 class="text-amju-deep font-black mb-6 uppercase text-sm tracking-widest">How to Activate</h4>
                                                <ol class="space-y-4">
                                                    @foreach([
                                                        'Dial *723*306*0#',
                                                        'Create your 4-digit transaction PIN',
                                                        'Re-dial *723*306*0# to view balance',
                                                        'Wait 24hrs for full activation'
                                                    ] as $index => $step)
                                                        <li class="flex items-center space-x-4 text-amju-deep font-bold">
                                                            <span class="w-6 h-6 bg-amju-primary text-white rounded-full flex items-center justify-center text-xs leading-none">{{ $index + 1 }}</span>
                                                            <span>{{ $step }}</span>
                                                        </li>
                                                    @endforeach
                                                </ol>
                                            </div>
                                            <div class="p-8 bg-slate-900 rounded-[3rem] text-white">
                                                <h4 class="text-amju-primary font-black mb-6 uppercase text-sm tracking-widest">Quick Commands</h4>
                                                <ul class="space-y-4 font-mono text-sm">
                                                    <li class="flex justify-between border-b border-white/10 pb-2"><span>Check Balance:</span> <span class="text-amju-primary">*723*306*0#</span></li>
                                                    <li class="flex justify-between border-b border-white/10 pb-2"><span>Airtime (Self):</span> <span class="text-amju-primary">*723*306*Amt#</span></li>
                                                    <li class="flex justify-between border-b border-white/10 pb-2"><span>Transfer:</span> <span class="text-amju-primary">*723*306*Acc*Amt#</span></li>
                                                    <li class="flex justify-between"><span>Airtime (Others):</span> <span class="text-amju-primary">*723*306*Phone*Amt#</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('mobile-banking')
                                    <div class="space-y-12">
                                        <h2 class="text-4xl font-black text-slate-900 font-display">Mobile Banking App</h2>
                                        <div class="bg-amju-primary p-12 rounded-[3rem] text-white flex flex-col md:flex-row items-center gap-12">
                                            <div class="md:w-2/3">
                                                <h3 class="text-3xl font-black mb-6">Bank on the Go</h3>
                                                <p class="text-white/80 text-lg leading-relaxed mb-8">Download our robust app to manage bills, transfers, and statements online real-time.</p>
                                                <div class="flex gap-4">
                                                    <div class="px-6 py-4 bg-white/10 rounded-2xl border border-white/20 backdrop-blur font-bold uppercase text-xs tracking-widest">Search: "AMJU"</div>
                                                </div>
                                            </div>
                                            <div class="md:w-1/3">
                                                <img src="/img/mobile-banking.jpg" class="rounded-[2rem] shadow-2xl rotate-3" alt="App UI">
                                            </div>
                                        </div>

                                        <div class="mt-12">
                                            <h4 class="text-2xl font-black text-slate-900 mb-8 border-l-4 border-amju-primary pl-6">Registration Steps</h4>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                                @foreach([
                                                    'Search AMJU on Play Store/App Store',
                                                    'Install and open the app',
                                                    'Click "Register a new device"',
                                                    'Enter account number and wait for OTP',
                                                    'Create Alphanumeric Password (e.g. Joh768)',
                                                    'Set 4-digit transaction PIN'
                                                ] as $index => $step)
                                                    <div class="p-6 bg-slate-50 border border-slate-100 rounded-2xl flex items-start space-x-4">
                                                        <span class="text-amju-primary font-black text-2xl opacity-20">0{{ $index + 1 }}</span>
                                                        <span class="font-bold text-slate-700 leading-tight">{{ $step }}</span>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('internet-banking')
                                    <div class="space-y-12">
                                        <h2 class="text-4xl font-black text-slate-900 font-display">Internet Banking</h2>
                                        <p class="text-slate-500 text-lg leading-relaxed">A robust, secure portal designed for personal and corporate accounts, allowing you to perform transactions online real-time from anywhere in the world.</p>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6">Key Benefits</h4>
                                                <ul class="space-y-4">
                                                    @foreach(['Manage payments 24/7', 'Detailed statement downloads', 'Corporate multi-sig support', 'Cheque lodgement tracking'] as $benefit)
                                                        <li class="flex items-center space-x-3 font-bold text-slate-700">
                                                            <svg class="w-6 h-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                            <span>{{ $benefit }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="p-8 bg-slate-50 rounded-[2rem] border border-slate-100">
                                                <h4 class="text-xl font-black text-slate-900 mb-4">Login Securely</h4>
                                                <p class="text-slate-500 mb-6 font-bold">https://ibank.amjuuniquemfbng.com</p>
                                                <a href="https://ibank.amjuuniquemfbng.com" target="_blank" class="inline-flex items-center px-8 py-3 bg-amju-primary text-white font-black rounded-xl hover:bg-amju-dark transition">
                                                    Go to Portal
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('pos')
                                    <div class="space-y-12">
                                        <h2 class="text-4xl font-black text-slate-900 font-display">POS Solutions</h2>
                                        <div class="bg-slate-50 p-10 rounded-[3rem] border border-slate-100">
                                            <h4 class="text-xl font-black text-slate-900 mb-6">How to Apply</h4>
                                            <ul class="space-y-6">
                                                @foreach([
                                                    'Open a Current Account (Individual or Corporate)',
                                                    'Write a POS request letter',
                                                    'Complete the Indemnity Form',
                                                    'Maintain a minimum balance of ₦30,000'
                                                ] as $index => $step)
                                                    <li class="flex items-start space-x-4 pb-6 border-b border-slate-200 last:border-0">
                                                        <span class="text-amju-primary font-black text-lg">{{ $index + 1 }}.</span>
                                                        <span class="font-bold text-slate-700 text-lg">{{ $step }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <div class="mt-12">
                                                <a href="#" class="inline-flex items-center px-10 py-5 bg-amju-primary text-white font-black text-lg rounded-2xl hover:bg-amju-dark transition shadow-xl shadow-amju-primary/20">
                                                    <svg class="w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
                                                    Download Application Form
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @default
                                    <h2 class="text-4xl font-black text-slate-900 font-display uppercase">{{ str_replace('-', ' ', $type) }}</h2>
                                    <div class="p-12 bg-slate-50 rounded-[3rem] text-center italic text-slate-500 font-bold uppercase tracking-tighter">
                                        Content coming soon...
                                    </div>
                            @endswitch
                        </div>
                    @endif
                </main>
            </div>
        </div>
    </div>
</div>
