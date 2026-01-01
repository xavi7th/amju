<div class="mt-20">
    <!-- Breadcrumb/Header -->
    <div class="bg-slate-900 border-b border-white/5 py-12">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-black text-white mb-4">MediaHub <span class="text-amju-primary">& News</span></h1>
            <nav class="flex text-sm font-bold text-slate-400 uppercase tracking-widest">
                <a href="{{ route('home') }}" class="hover:text-amju-primary transition">Home</a>
                <span class="mx-3">/</span>
                <span class="text-amju-primary uppercase">{{ $type }}</span>
            </nav>
        </div>
    </div>

    <!-- Navigation Tabs -->
    <div class="bg-white border-b border-slate-100">
        <div class="container mx-auto px-6">
            <div class="flex space-x-8 overflow-x-auto pb-4 md:pb-0 scrollbar-hide">
                @foreach(['news' => 'Press Release', 'videos' => 'Videos', 'gallery' => 'Photo Gallery'] as $key => $label)
                    <a href="{{ route('site.media', ['type' => $key]) }}" 
                       class="py-6 font-black uppercase text-xs tracking-widest border-b-2 transition-all whitespace-nowrap {{ $type === $key ? 'border-amju-primary text-amju-primary' : 'border-transparent text-slate-400 hover:text-slate-600' }}">
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="bg-white pb-24">
        <div class="container mx-auto px-6 py-16">
            @switch($type)
                @case('news')
                    <div class="space-y-24">
                        <!-- Featured Press Releases -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                            <div class="space-y-8">
                                <h2 class="text-4xl font-black text-slate-900 font-display">Press <span class="text-amju-primary">Release</span></h2>
                                <div class="space-y-6">
                                    @php
                                        $pressReleases = [
                                            'Amju Unique MFB opening a new branch at Udu road to reduce poverty in our environment.',
                                            'Amju Unique MFB debuts *723*306# for easy access to accounts without data.',
                                            'Quick Loan signed specifically for SME/entrepreneurs to access funds within 24 hours.',
                                            'Amju Unique MFB brings financial life to Eku community after 10 years without a bank.',
                                            'Supporting CBN on financial inclusion: Enrollment for BVN now available in all branches.'
                                        ];
                                    @endphp
                                    @foreach($pressReleases as $release)
                                        <div class="p-6 bg-slate-50 rounded-2xl border border-slate-100 flex items-start space-x-4 group hover:bg-white hover:shadow-xl transition-all">
                                            <div class="w-2 h-2 bg-amju-primary rounded-full mt-2.5 flex-shrink-0 group-hover:scale-150 transition-transform"></div>
                                            <p class="font-bold text-slate-700 leading-relaxed">{{ $release }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="relative">
                                <div class="p-1 bg-gradient-to-tr from-amju-dark to-amju-primary rounded-[3rem] shadow-2xl overflow-hidden aspect-video md:aspect-square">
                                    <img src="/img/amju staff done.jpg" class="w-full h-full object-cover rounded-[2.9rem]" alt="Amju Press">
                                </div>
                            </div>
                        </div>

                        <!-- Educational Content (from legacy NewsPage) -->
                        <div class="space-y-16">
                            <div class="max-w-4xl mx-auto text-center">
                                <h3 class="text-3xl font-black text-slate-900 mb-6">What are the benefits of <span class="text-amju-primary">Microfinance?</span></h3>
                                <p class="text-slate-500 text-lg">Microfinance disrupts the cycle of poverty by making money available to those generally excluded from traditional banking channels.</p>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                                @foreach([
                                    ['title' => 'Family Support', 'desc' => 'Allows households to expand current opportunities for income accumulation.'],
                                    ['title' => 'Access to Credit', 'desc' => 'Small amounts of credit can stop poverty at a rapid pace.'],
                                    ['title' => 'Inclusion', 'desc' => '95% of micro-loans are given to women, the unemployed, and those with disabilities.'],
                                    ['title' => 'Investment', 'desc' => 'Families can invest in better housing, health care, and eventually small businesses.'],
                                    ['title' => 'Sustainability', 'desc' => 'A $100 loan can be enough for an entrepreneur to pull themselves out of poverty.'],
                                    ['title' => 'Job Creation', 'desc' => 'Empowers entrepreneurs to create new employment opportunities for others.'],
                                ] as $benefit)
                                    <div class="p-8 bg-slate-50 border border-slate-100 rounded-[2.5rem] hover:bg-white hover:shadow-2xl transition-all duration-500">
                                        <h4 class="text-xl font-black text-slate-900 mb-4">{{ $benefit['title'] }}</h4>
                                        <p class="text-slate-500 leading-relaxed">{{ $benefit['desc'] }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Regulatory & Events -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                            <div class="p-12 bg-slate-900 rounded-[3rem] text-white">
                                <h4 class="text-amju-primary font-black mb-6 uppercase tracking-widest">Regulatory Report</h4>
                                <h3 class="text-2xl font-black mb-6">CBN Prudential Guidelines</h3>
                                <p class="text-slate-400 mb-8 leading-relaxed italic">The Central Bank of Nigeria continues to enhance bank asset quality with specific guidelines for the Microfinance sector.</p>
                                <ul class="space-y-4 text-sm font-bold">
                                    <li class="flex items-center space-x-3"><span class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">1</span> <span>1% Lending limit to individual borrowers</span></li>
                                    <li class="flex items-center space-x-3"><span class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">2</span> <span>Strict BVN & NCR registration requirements</span></li>
                                    <li class="flex items-center space-x-3"><span class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">3</span> <span>Cross-guarantees allowed for group lending</span></li>
                                </ul>
                            </div>
                            <div class="p-12 bg-amju-primary rounded-[3rem] text-white">
                                <h4 class="text-blue-100 font-black mb-6 uppercase tracking-widest">Yearly Events</h4>
                                <ul class="space-y-6">
                                    @foreach([
                                        'Customer Service Week (October)',
                                        'Monthly Thanksgiving (Every 1st Working Day)',
                                        'Nine Lessons and Carol (December)',
                                        'Visits to Orphanages (Dec-Jan)'
                                    ] as $event)
                                        <li class="flex items-center space-x-4 border-b border-white/10 pb-4 last:border-0 last:pb-0">
                                            <div class="w-10 h-10 bg-white text-amju-primary rounded-full flex items-center justify-center flex-shrink-0 font-black">
                                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                            </div>
                                            <span class="text-lg font-black">{{ $event }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @break

                @case('videos')
                    <div class="space-y-16 animate-in fade-in zoom-in duration-500">
                        <div class="max-w-4xl mx-auto text-center">
                            <h2 class="text-4xl font-black text-slate-900 mb-6 font-display">Experience <span class="text-amju-primary">Amju Unique</span></h2>
                            <p class="text-slate-500 text-lg">Watch our journeys of empowerment, customer testimonials, and corporate highlights.</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                            @foreach([
                                ['title' => 'Corporate Documentary', 'url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ'],
                                ['title' => 'Empowering Local Communities', 'url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ'],
                                ['title' => 'Customer Success Stories', 'url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ'],
                                ['title' => 'Digital Banking Showcase', 'url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ'],
                            ] as $video)
                                <div class="space-y-6">
                                    <div class="p-1 bg-slate-900 rounded-[2.5rem] shadow-xl overflow-hidden aspect-video">
                                        <iframe class="w-full h-full rounded-[2.45rem]" src="{{ $video['url'] }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <h4 class="text-xl font-black text-slate-900 ml-4">{{ $video['title'] }}</h4>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @break

                @case('gallery')
                    <div class="space-y-16 animate-in fade-in duration-500" x-data="{ open: false, activeSrc: '' }">
                        <div class="max-w-4xl mx-auto text-center">
                            <h2 class="text-4xl font-black text-slate-900 mb-6 font-display">Our <span class="text-amju-primary">Moments</span></h2>
                        </div>

                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            @php
                                $images = [
                                    '/img/savings-1.jpg', '/img/save.jpg', '/img/marriage.jpeg', '/img/cards.jpg',
                                    '/img/amju-staff-done.jpg', '/img/atm.jpeg', '/img/mobile-banking.jpg', '/img/bg-image-1.jpg'
                                ];
                            @endphp
                            @foreach($images as $img)
                                <button @click="open = true; activeSrc = '{{ $img }}'" class="group relative aspect-square overflow-hidden rounded-[2rem] border-4 border-slate-50 hover:border-amju-primary transition-all duration-300 shadow-lg">
                                    <img src="{{ $img }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Gallery">
                                    <div class="absolute inset-0 bg-amju-primary/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                    <div class="absolute bottom-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity translate-y-4 group-hover:translate-y-0 duration-300">
                                        <svg class="w-6 h-6 text-amju-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" /></svg>
                                    </div>
                                </button>
                            @endforeach
                        </div>

                        <!-- Lightbox Modal -->
                        <div x-show="open" 
                             class="fixed inset-0 z-50 flex items-center justify-center bg-slate-950/95 p-4"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-200"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             @keydown.escape.window="open = false"
                             style="display: none;">
                            <button @click="open = false" class="absolute top-8 right-8 text-white hover:text-amju-primary transition">
                                <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                            </button>
                            <img :src="activeSrc" class="max-w-full max-h-[85vh] rounded-[2rem] shadow-2xl animate-in zoom-in-95 duration-300" alt="Full Image">
                        </div>
                    </div>
                @break
            @endswitch
        </div>
    </div>
</div>
