<div class="mt-20">
    <!-- Breadcrumb/Header -->
    <div class="bg-slate-900 border-b border-white/5 py-12">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-black text-white mb-4">Investor <span class="text-blue-500">Relations</span></h1>
            <nav class="flex text-sm font-bold text-slate-400 uppercase tracking-widest">
                <a href="{{ route('home') }}" class="hover:text-blue-500 transition">Home</a>
                <span class="mx-3">/</span>
                <a href="{{ route('site.ir') }}" class="{{ $type === 'main' ? 'text-blue-500' : 'hover:text-blue-500 transition' }}">IR Center</a>
                @if($type !== 'main')
                    <span class="mx-3">/</span>
                    <span class="text-blue-500 uppercase">{{ str_replace(['-', 'ir-'], ' ', $type) }}</span>
                @endif
            </nav>
        </div>
    </div>

    <div class="bg-white">
        <div class="container mx-auto px-6 py-16">
            <div class="flex flex-col lg:flex-row gap-16">
                <!-- Sidebar -->
                <aside class="w-full lg:w-1/4">
                    <div class="sticky top-32">
                        <div class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-6 pl-4 hidden lg:block">Investor Menu</div>
                        
                        <!-- Mobile Dropdown / Horizontal Scroll -->
                        <div class="lg:block overflow-x-auto pb-4 md:pb-0 -mx-6 px-6 lg:mx-0 lg:px-0 scrollbar-hide">
                            <div class="flex lg:flex-col gap-3 min-w-max lg:min-w-0">
                                @php
                                    $links = [
                                        'main' => 'IR Overview',
                                        'financial-information' => 'Financial Reports',
                                        'investor-news' => 'Investor News',
                                        'shareholder-info' => 'Shareholder Services',
                                        'outlook-insights' => 'Outlook & Insights',
                                    ];
                                @endphp
        
                                @foreach($links as $linkType => $label)
                                    <a href="{{ $linkType === 'main' ? route('site.ir') : route('site.ir.type', ['type' => $linkType]) }}" 
                                       class="flex items-center px-6 py-4 rounded-2xl font-bold transition-all duration-300 whitespace-nowrap lg:whitespace-normal {{ $type === $linkType ? 'bg-blue-600 text-white shadow-xl shadow-blue-600/20' : 'bg-slate-50 lg:bg-transparent text-slate-600 hover:bg-slate-100 hover:text-blue-600' }}">
                                        <span>{{ $label }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- Content -->
                <main class="lg:w-3/4">
                    @if($type === 'main')
                        <div class="space-y-20">
                            <div class="max-w-3xl">
                                <h2 class="text-4xl font-black text-slate-900 mb-6 font-display">A Wide Range of <span class="text-blue-600">Financial Growth</span></h2>
                                <p class="text-slate-500 text-lg leading-relaxed">We are right here to fund that great dream of yours in a way that you may never imagine. Workers can plan their ways to own their businesses as we assist in creating the right mental environment and funds.</p>
                            </div>

                            <div class="space-y-12">
                                @foreach([
                                    [
                                        'title' => 'Mortgage Financing',
                                        'img' => '/img/services-1-540x327.jpg',
                                        'desc' => 'Helping Nigerians finance their dreams for years. We work with homeowners, farmers, and small businesses to fund projects of all sizes from ₦10,000 – ₦5,000,000. Even if you have been turned down by other lenders, we go the extra mile to ensure access to reputable lending.'
                                    ],
                                    [
                                        'title' => 'School Fees Funding',
                                        'img' => '/img/services-2-540x327.jpg',
                                        'desc' => 'Children’s education is a huge investment. In events of job loss, illness, or temporary financial strain, Amju Unique MFB steps in to ensure your children’s education is not disrupted. Get the chance to catch your breath and get back on your feet.'
                                    ],
                                    [
                                        'title' => 'Start-ups Investments',
                                        'img' => '/img/services-3-540x327.jpg',
                                        'desc' => 'Don’t let money stop your dreams. Pioneer your start-up with our partnership program. Only 2% of small businesses survive 5 years, and we are here to partner you into that 2 percentile with expert consultancy and funding.'
                                    ],
                                ] as $service)
                                    <div class="flex flex-col md:flex-row gap-12 items-center group">
                                        <div class="md:w-1/2 overflow-hidden rounded-[3rem] shadow-xl">
                                            <img src="{{ $service['img'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="{{ $service['title'] }}">
                                        </div>
                                        <div class="md:w-1/2 space-y-6">
                                            <h3 class="text-3xl font-black text-slate-900 group-hover:text-blue-600 transition-colors">{{ $service['title'] }}</h3>
                                            <p class="text-slate-500 leading-relaxed font-medium">{{ $service['desc'] }}</p>
                                            <a href="{{ route('contact') }}" class="inline-flex items-center text-blue-600 font-black uppercase tracking-widest text-sm hover:underline">
                                                Talk to a Consultant &rarr;
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @elseif($type === 'financial-information')
                        <div class="space-y-12 animate-in fade-in slide-in-from-bottom-4 duration-500">
                            <h2 class="text-4xl font-black text-slate-900 font-display">Financial <span class="text-blue-600">Reports</span></h2>
                            <p class="text-slate-500 text-lg">Download our annual reports and financial statements to track our performance and growth over the years.</p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                @foreach(['2023', '2022', '2021', '2020'] as $year)
                                    <div class="p-8 bg-slate-50 border border-slate-100 rounded-[2.5rem] flex items-center justify-between group hover:bg-white hover:shadow-xl transition-all">
                                        <div class="flex items-center space-x-6">
                                            <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600">
                                                <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                            </div>
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900">Annual Report {{ $year }}</h4>
                                                <p class="text-slate-400 text-sm font-bold uppercase tracking-widest">PDF • 4.2 MB</p>
                                            </div>
                                        </div>
                                        <a href="#" class="w-12 h-12 bg-slate-200 rounded-full flex items-center justify-center text-slate-500 group-hover:bg-blue-600 group-hover:text-white transition-all">
                                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="animate-in fade-in slide-in-from-bottom-4 duration-500">
                            <h2 class="text-4xl font-black text-slate-900 font-display uppercase">{{ str_replace(['-', 'ir-'], ' ', $type) }}</h2>
                            <div class="mt-12 p-16 bg-slate-50 rounded-[3rem] text-center">
                                <div class="w-20 h-20 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-6 text-slate-300">
                                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                </div>
                                <h3 class="text-2xl font-black text-slate-900 mb-2">Section Updating</h3>
                                <p class="text-slate-500 font-medium">We are currently updating our investor portal. Please check back for the latest {{ str_replace('-', ' ', $type) }}.</p>
                            </div>
                        </div>
                    @endif
                </main>
            </div>
        </div>
    </div>
</div>
