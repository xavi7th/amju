<div class="mt-20">
    <!-- Breadcrumb/Header -->
    <div class="bg-slate-900 border-b border-white/5 py-12">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-black text-white mb-4">Personal <span class="text-blue-500">Banking</span></h1>
            <nav class="flex text-sm font-bold text-slate-400 uppercase tracking-widest">
                <a href="{{ route('home') }}" class="hover:text-blue-500 transition">Home</a>
                <span class="mx-3">/</span>
                <a href="{{ route('banking.personal') }}" class="{{ $type === 'main' ? 'text-blue-500' : 'hover:text-blue-500 transition' }}">Personal Banking</a>
                @if($type !== 'main')
                    <span class="mx-3">/</span>
                    <span class="text-blue-500 uppercase">{{ str_replace(['amju-', '-account', '-savings', '-'], ' ', $type) }}</span>
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
                        <div class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-6 pl-4 hidden lg:block">Products & Services</div>
                        
                        <!-- Mobile Dropdown / Horizontal Scroll -->
                        <div class="lg:block overflow-x-auto pb-4 md:pb-0 -mx-6 px-6 lg:mx-0 lg:px-0 scrollbar-hide">
                            <div class="flex lg:flex-col gap-3 min-w-max lg:min-w-0">
                                @php
                                    $links = [
                                        'main' => 'All Products',
                                        'amju-account' => 'Amju Account',
                                        'amju-flexy-savings-account' => 'Flexy Savings',
                                        'amju-edusave-savings-account' => 'Edusave',
                                        'amju-thrift-savings-account' => 'Thrift Savings',
                                        'amju-marriage-savings-account' => 'Marriage Savings',
                                        'amju-christmas-account-savings' => 'Christmas Savings',
                                        'amju-esusu-savings-account' => 'Esusu Savings',
                                        'amju-enterpreneur-savings-account' => 'Entrepreneur Savings',
                                        'cards' => 'Cards',
                                        'services' => 'Financial Services',
                                        'loans' => 'Loans & Credits',
                                    ];
                                @endphp

                                @foreach($links as $linkType => $label)
                                    <a href="{{ $linkType === 'main' ? route('banking.personal') : route('banking.personal.product', ['type' => $linkType]) }}" 
                                       class="flex items-center px-6 py-4 rounded-2xl font-bold transition-all duration-300 whitespace-nowrap lg:whitespace-normal {{ $type === $linkType ? 'bg-blue-600 text-white shadow-xl shadow-blue-600/20' : 'bg-slate-50 lg:bg-transparent text-slate-600 hover:bg-slate-100 hover:text-blue-600' }}">
                                        <span>{{ $label }}</span>
                                        @if($type === $linkType)
                                            <svg class="w-5 h-5 ml-auto hidden lg:block" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                                        @endif
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <div class="mt-12 p-8 bg-slate-900 rounded-[2rem] text-white hidden lg:block">
                            <h4 class="font-black text-xl mb-4">Need help?</h4>
                            <p class="text-slate-400 text-sm mb-6">Talk to our experts about finding the right account for you.</p>
                            <a href="{{ route('contact') }}" class="inline-flex items-center text-blue-400 font-bold hover:text-blue-300 transition">
                                <span>Contact Us</span>
                                <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- Main Content Area -->
                <main class="lg:w-3/4">
                    @if($type === 'main')
                        <!-- Summary View (The improved version of the legacy summary) -->
                        <div class="space-y-24">
                            <div class="max-w-2xl">
                                <h2 class="text-4xl font-black text-slate-900 mb-6 font-display">Accounts for <span class="text-blue-600">Everyone</span></h2>
                                <p class="text-slate-500 text-lg leading-relaxed">We at Amju Unique are right here to fund that great dream of yours in a way that you may never imagine. Explore our wide range of personalized banking solutions.</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                                @php
                                    $summaryItems = [
                                        ['title' => 'AMJU FLEXY SAVINGS', 'desc' => 'Good for students and young professionals.', 'img' => '/img/amju-happy-customer.jpg', 'slug' => 'amju-flexy-savings-account'],
                                        ['title' => 'AMJU EDUSAVE', 'desc' => 'Best for parents saving for their children\'s education.', 'img' => '/img/savings-1.jpg', 'slug' => 'amju-edusave-savings-account'],
                                        ['title' => 'THRIFT SAVINGS', 'desc' => 'Perfect for market women and cluster groups.', 'img' => '/img/save.jpg', 'slug' => 'amju-thrift-savings-account'],
                                        ['title' => 'MARRIAGE SAVINGS', 'desc' => 'Save for your big day with special incentives.', 'img' => '/img/marriage.jpeg', 'slug' => 'amju-marriage-savings-account'],
                                    ];
                                @endphp

                                @foreach($summaryItems as $item)
                                    <div class="group relative bg-slate-50 rounded-[3rem] overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-500">
                                 @php
        $bannerImage = asset('img/hero-bg.jpg'); // Default
        if($type === 'flexy-savings') {
            $bannerImage = asset('img/banners/flexy-savings.jpg');
        }
    @endphp
    
    <!-- Hero Section -->
    <div class="relative h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ $bannerImage }}" class="w-full h-full object-cover" alt="Personal Banking">
            <div class="absolute inset-0 bg-slate-900/60"></div>
        </div>
                                </div>
                                        <div class="p-10">
                                            <h3 class="text-2xl font-black text-slate-900 mb-4">{{ $item['title'] }}</h3>
                                            <p class="text-slate-500 mb-8 leading-relaxed">{{ $item['desc'] }}</p>
                                            <a href="{{ route('banking.personal.product', ['type' => $item['slug']]) }}" class="inline-flex items-center px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-blue-700 transition shadow-xl shadow-blue-600/20">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <!-- Sub-page Dynamic View -->
                        <div class="space-y-12 animate-in fade-in slide-in-from-bottom-4 duration-500">
                            @switch($type)
                                @case('amju-flexy-savings-account')
                                    <h2 class="text-4xl font-black text-slate-900 font-display">Flexy Savings Account</h2>
                                    <div class="prose prose-blue max-w-none">
                                        <div class="bg-blue-50 p-8 rounded-[2rem] border border-blue-100 mb-12">
                                            <h4 class="text-blue-900 font-black mb-2">Overview</h4>
                                            <p class="text-blue-800/80">Tailored for individuals seeking a flexible way to save while enjoying modern banking benefits. Ideal for students and young achievers.</p>
                                        </div>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-12">
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6 flex items-center">
                                                    <span class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-3 text-sm">1</span>
                                                    Main Features
                                                </h4>
                                                <ul class="space-y-4">
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Open with ₦2,000 Minimum</span>
                                                    </li>
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>₦5,000 Minimum credit balance</span>
                                                    </li>
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Operate with a cheque book</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6 flex items-center">
                                                    <span class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-3 text-sm">2</span>
                                                    Key Benefits
                                                </h4>
                                                <ul class="space-y-4">
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>2% Interest rate per annum</span>
                                                    </li>
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Verve Debit Card & Mobile App access</span>
                                                    </li>
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>24/7 Internet Banking</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="mt-16 p-10 bg-slate-50 rounded-[3rem] border border-slate-100">
                                            <h4 class="text-xl font-black text-slate-900 mb-8">Requirements</h4>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                                @foreach(['Completed Account Form', '1 Recent Passport Photograph', 'Valid ID (Driver License, Int\'l Passport, etc)', 'Utility Bill (Last 3 months)'] as $req)
                                                    <div class="flex items-center space-x-4 p-4 bg-white rounded-2xl border border-slate-100">
                                                        <div class="w-10 h-10 bg-green-50 text-green-600 rounded-full flex items-center justify-center flex-shrink-0">
                                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        </div>
                                                        <span class="font-bold text-slate-700">{{ $req }}</span>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('amju-edusave-savings-account')
                                     <h2 class="text-4xl font-black text-slate-900 font-display">Edusave Savings Account</h2>
                                     <div class="prose prose-blue max-w-none">
                                        <div class="bg-blue-50 p-8 rounded-[2rem] border border-blue-100 mb-12">
                                            <h4 class="text-blue-900 font-black mb-2">Overview</h4>
                                            <p class="text-blue-800/80">Secure your child’s future with flexible quality academics through AMJU Unique MFB EDUSAVE. Available to all categories of students.</p>
                                        </div>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-12">
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6 flex items-center">
                                                    <span class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-3 text-sm">1</span>
                                                    Main Features
                                                </h4>
                                                <ul class="space-y-4">
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Open with ₦1,000 Minimum</span>
                                                    </li>
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Save up to ₦100,000 in six months</span>
                                                    </li>
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Easy access to school fees loans</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6 flex items-center">
                                                    <span class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-3 text-sm">2</span>
                                                    Key Benefits
                                                </h4>
                                                <ul class="space-y-4">
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>3% Interest per annum (min balance of N100k)</span>
                                                    </li>
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Priority school fees financing access</span>
                                                    </li>
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Full Digital Banking suite</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('amju-thrift-savings-account')
                                     <h2 class="text-4xl font-black text-slate-900 font-display">Thrift Savings Account</h2>
                                     <div class="prose prose-blue max-w-none">
                                        <div class="bg-blue-50 p-8 rounded-[2rem] border border-blue-100 mb-12">
                                            <h4 class="text-blue-900 font-black mb-2">Overview</h4>
                                            <p class="text-blue-800/80">Available to individual clubs, associations, cooperatives, and group members. Designed for collective financial growth.</p>
                                        </div>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-12">
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6 flex items-center">
                                                    <span class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-3 text-sm">1</span>
                                                    Main Features
                                                </h4>
                                                <ul class="space-y-4">
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Open with ₦1,000 Minimum</span>
                                                    </li>
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Daily, weekly, or monthly contributions</span>
                                                    </li>
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Withdraw after four months of saving</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6 flex items-center">
                                                    <span class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-3 text-sm">2</span>
                                                    Key Benefits
                                                </h4>
                                                <ul class="space-y-4">
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Micro credit loans within 24hrs</span>
                                                    </li>
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Loan up to 2x of total savings</span>
                                                    </li>
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>2.5% Annual interest paid</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('amju-esusu-savings-account')
                                     <h2 class="text-4xl font-black text-slate-900 font-display">Esusu Savings Account</h2>
                                     <div class="prose prose-blue max-w-none">
                                        <div class="bg-blue-50 p-8 rounded-[2rem] border border-blue-100 mb-12">
                                            <h4 class="text-blue-900 font-black mb-2">Overview</h4>
                                            <p class="text-blue-800/80">Tailored for small-scale entrepreneurs and traders. Secure your daily daily earnings with a reliable formal financial institution.</p>
                                        </div>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-12">
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6 flex items-center">
                                                    <span class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-3 text-sm">1</span>
                                                    Main Features
                                                </h4>
                                                <ul class="space-y-4">
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Daily savings from ₦200 upward</span>
                                                    </li>
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Official daily contribution card provided</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="text-xl font-black text-slate-900 mb-6 flex items-center">
                                                    <span class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center mr-3 text-sm">2</span>
                                                    Key Benefits
                                                </h4>
                                                <ul class="space-y-4">
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Develop a sustainable savings culture</span>
                                                    </li>
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Guaranteed security vs informal collectors</span>
                                                    </li>
                                                    <li class="flex items-start space-x-3 text-slate-600">
                                                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                        <span>Convert balance to normal savings anytime</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('amju-account')
                                @case('cards')
                                @case('services')
                                     <h2 class="text-4xl font-black text-slate-900 font-display">{{ str_replace(['amju-', '-'], ' ', $type) }}</h2>
                                     <div class="bg-slate-50 p-12 rounded-[3rem] border border-slate-100 text-center">
                                         <p class="text-slate-500 text-lg">Detailed content for this section is being finalized to match our premium design system. Please check back shortly or visit our head office.</p>
                                     </div>
                                @break

                                @default
                                     <h2 class="text-4xl font-black text-slate-900 font-display">{{ str_replace(['amju-', '-account', '-savings', '-'], ' ', $type) }}</h2>
                                     <p class="text-slate-600 text-lg leading-relaxed">Please contact our customer support for detailed information about this specific account type.</p>
                            @endswitch

                            <div class="pt-12 border-t border-slate-100 flex flex-col sm:flex-row gap-6">
                                <a href="{{ route('account.open') }}" class="inline-flex items-center justify-center px-10 py-5 bg-blue-600 text-white font-black text-lg rounded-2xl hover:bg-blue-700 transition shadow-2xl shadow-blue-600/20">
                                    Open This Account
                                </a>
                                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-10 py-5 border-2 border-slate-200 text-slate-900 font-black text-lg rounded-2xl hover:bg-slate-50 transition">
                                    Enquire More
                                </a>
                            </div>
                        </div>
                    @endif
                </main>
            </div>
        </div>
    </div>

    <!-- Testimonials or CTA -->
    <section class="py-24 bg-slate-900 overflow-hidden relative">
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2">
                    <h2 class="text-4xl md:text-5xl font-black text-white mb-8">Join the <span class="text-blue-500">Amju Unique</span> Family Today.</h2>
                    <p class="text-slate-400 text-xl leading-relaxed mb-12">Whether it's for your child's education, your business growth, or your personal dreams, we have the right path for you.</p>
                    <div class="flex items-center space-x-8">
                        <div>
                            <div class="text-3xl font-black text-white">50k+</div>
                            <div class="text-sm font-bold text-slate-500 uppercase tracking-widest mt-1">Customers</div>
                        </div>
                        <div class="w-px h-12 bg-white/10"></div>
                        <div>
                            <div class="text-3xl font-black text-white">15+</div>
                            <div class="text-sm font-bold text-slate-500 uppercase tracking-widest mt-1">Years experience</div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 relative">
                    <div class="p-1 w-full bg-gradient-to-tr from-blue-600 to-blue-400 rounded-[3rem]">
                        <img src="/img/amju staff done.jpg" class="rounded-[2.9rem] shadow-2xl" alt="Amju Staff">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
