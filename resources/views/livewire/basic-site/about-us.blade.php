<div class="mt-20">
    <!-- Breadcrumb/Header -->
    <div class="bg-slate-900 border-b border-white/5 py-12">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-black text-white mb-4">About <span class="text-amju-primary">Amju Unique</span></h1>
            <nav class="flex text-sm font-bold text-slate-400 uppercase tracking-widest">
                <a href="{{ route('home') }}" class="hover:text-amju-primary transition">Home</a>
                <span class="mx-3">/</span>
                <a href="{{ route('about') }}" class="{{ $type === 'main' ? 'text-amju-primary' : 'hover:text-amju-primary transition' }}">About Us</a>
                @if($type !== 'main')
                    <span class="mx-3">/</span>
                    <span class="text-amju-primary uppercase">{{ str_replace(['-', 'page'], ' ', $type) }}</span>
                @endif
                @if($person)
                    <span class="mx-3">/</span>
                    <span class="text-amju-primary uppercase">{{ str_replace(['-', 'page'], ' ', $person) }}</span>
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
                        <div class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-6 pl-4 hidden lg:block">Introduction</div>
                        
                        <!-- Mobile Dropdown / Horizontal Scroll -->
                        <div class="lg:block overflow-x-auto pb-4 md:pb-0 -mx-6 px-6 lg:mx-0 lg:px-0 scrollbar-hide">
                            <div class="flex lg:flex-col gap-3 min-w-max lg:min-w-0">
                                @php
                                    $links = [
                                        'main' => 'Our Company',
                                        'vision-mission' => 'Vision & Mission',
                                        'corporate-governance' => 'Corporate Governance',
                                        'management-team' => 'Management Team',
                                        'our-branches' => 'Our Branches',
                                        'business-focus' => 'Business Focus',
                                        'awards' => 'Awards & Recognition',
                                    ];
                                @endphp
        
                                @foreach($links as $linkType => $label)
                                    <a href="{{ $linkType === 'main' ? route('about') : route('about.us', ['type' => $linkType]) }}" 
                                       class="flex items-center px-6 py-4 rounded-2xl font-bold transition-all duration-300 whitespace-nowrap lg:whitespace-normal {{ ($type === $linkType || ($linkType === 'management-team' && $person)) ? 'bg-amju-primary text-white shadow-xl shadow-amju-primary/20' : 'bg-slate-50 lg:bg-transparent text-slate-600 hover:bg-slate-100 hover:text-amju-primary' }}">
                                        <span>{{ $label }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        
                        <div class="mt-12 p-8 bg-slate-900 rounded-[2rem] text-white hidden lg:block">
                            <h4 class="font-black text-xl mb-4">Careers</h4>
                            <p class="text-slate-400 text-sm mb-6">Join a team of professionals dedicated to excellence.</p>
                            <a href="{{ route('careers') }}" class="inline-flex items-center text-amju-primary font-bold hover:text-amju-dark transition">
                                <span>View Vacancies</span>
                                <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- Main Content Area -->
                <main class="lg:w-3/4">
                    @if($person)
                        <!-- Team Member Profile -->
                        <div class="animate-in fade-in slide-in-from-bottom-4 duration-500">
                            @switch($person)
                                @case('ceo')
                                    <div class="flex flex-col md:flex-row gap-12 mb-12">
                                        <div class="md:w-1/3">
                                            <div class="sticky top-40">
                                                <div class="p-1 bg-gradient-to-tr from-amju-dark to-amju-primary rounded-[2rem] shadow-2xl mb-8">
                                                    <img src="/img/team/Osoluakpor-Jonathan.jpg" class="w-full rounded-[1.9rem]" alt="Dr. Jonathan Ososuakpor">
                                                </div>
                                                <h3 class="text-2xl font-black text-slate-900 mb-1">Dr. Jonathan Ososuakpor</h3>
                                                <p class="text-amju-primary font-bold uppercase tracking-widest text-sm mb-6">MD / CEO</p>
                                                <div class="flex space-x-4">
                                                    <a href="#" class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center text-slate-400 hover:bg-amju-primary hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#" class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center text-slate-400 hover:bg-amju-primary hover:text-white transition"><i class="fab fa-linkedin-in"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-2/3 space-y-8 prose prose-lg prose-blue max-w-none">
                                            <p class="font-bold text-slate-900 leading-relaxed">Dr. Jonathan Ososuakpor has his PhD in Economics from the Delta State University, Abraka. He is a fellow member of the Chartered Institute of Economist of Nigeria, Fellow of the Enterprise Risk Management of Nigeria and a certified Microfinance Bank practitioner (MCP).</p>
                                            
                                            <p>He started his Banking career in 1983 at Union Bank of Nigeria Plc. He worked in various branches of Union Bank including Warri, Auchi and Oghara. He rose to the position of Manager Group 6 before he resigned to join Societe Generale Bank Nigeria Limited in 2001 as Assistant Manager.</p>
                                            
                                            <p>He later joined Gateway Bank Plc in 2004 before the Bank’s merger with InterContinental Bank Plc in 2005. In Intercontinental Bank Plc, he worked in various branches as Branch Manager, He was later transferred to Yenegoa as Head Public Sector, Bayelsa State, to Asaba as Head Public sector, Delta State.</p>
                                            
                                            <p>He became a senior Manager in Ecobank Nigeria Plc in 2012 before he resigned honourably to take over the mantle of leadership as the MD/CEO of AMJU UNIQUE MICROFINANCE BANK LIMITED in June, 2012.</p>
                                            
                                            <p>Dr. Jonathan Ososuakpor is an icon in the industry and a man with high enthusiasm for work. He is a leader of the people, his entrance into AMJU UNIQUE MICROFINANCE BANK LIMITED has brought about a lot of Banking innovation and excellent Banking culture and custom coupled with excellent customers service unprecedented in the Banking Industry.</p>
                                        </div>
                                    </div>
                                @break

                                @case('ed')
                                    <div class="flex flex-col md:flex-row gap-12 mb-12">
                                        <div class="md:w-1/3">
                                            <div class="sticky top-40">
                                                <div class="p-1 bg-gradient-to-tr from-amju-dark to-amju-primary rounded-[2rem] shadow-2xl mb-8">
                                                    <img src="/img/team/Executive-Director.jpg" class="w-full rounded-[1.9rem]" alt="Henry Onojakpor">
                                                </div>
                                                <h3 class="text-2xl font-black text-slate-900 mb-1">Henry Onojakpor</h3>
                                                <p class="text-amju-primary font-bold uppercase tracking-widest text-sm mb-6">Executive Director</p>
                                            </div>
                                        </div>
                                        <div class="md:w-2/3 space-y-8 prose prose-lg prose-blue max-w-none">
                                            <p class="font-bold text-slate-900 leading-relaxed">Our Executive Director brings a wealth of banking experience to AMJU Unique Microfinance Bank. With a strong background in commercial banking and branch management, he plays a pivotal role in driving the bank's strategic initiatives and operational excellence.</p>
                                        </div>
                                    </div>
                                @break

                                @case('gm')
                                    <div class="flex flex-col md:flex-row gap-12 mb-12">
                                        <div class="md:w-1/3">
                                            <div class="sticky top-40">
                                                <div class="p-1 bg-gradient-to-tr from-amju-dark to-amju-primary rounded-[2rem] shadow-2xl mb-8">
                                                    <img src="/img/team/Ogbeide-Ebhozele.jpg" class="w-full rounded-[1.9rem]" alt="Ogbeide E. Ebhozele">
                                                </div>
                                                <h3 class="text-2xl font-black text-slate-900 mb-1">Ogbeide E. Ebhozele</h3>
                                                <p class="text-amju-primary font-bold uppercase tracking-widest text-sm mb-6">General Manager</p>
                                            </div>
                                        </div>
                                        <div class="md:w-2/3 space-y-8 prose prose-lg prose-blue max-w-none">
                                            <p class="font-bold text-slate-900 leading-relaxed">He is the G.M (General Manager) Finance & Accounts of AMJU Unique Microfinance Bank, and possesses his first degree and Master’s degree in Banking and Finance from the University of Benin, Edo State, Nigeria.</p>
                                            <p>He is a member of the Chartered Institute of Bankers of Nigeria (CIBN) foundation. He has worked as an Accountant, Auditor, Head Banking Operations, head Credit Administration and Recovery and has worked in establishments like Microfinance banks and companies.</p>
                                            <p>He has attended a course in Credit Administration and Debt Recovery Techniques (CIBN), Introduction to Management (BBCB), Presentation of Audited Financial Statement (CBN), Agricultural Credit Guarantee Scheme (ACGS), Fundamentals of Micro Finance Banks and Interim Capacity Building for Microfinance Banks in Nigeria and other training courses and workshops.</p>
                                        </div>
                                    </div>
                                @break

                                @case('auditor')
                                    <div class="flex flex-col md:flex-row gap-12 mb-12">
                                        <div class="md:w-1/3">
                                            <div class="sticky top-40">
                                                <div class="p-1 bg-gradient-to-tr from-amju-dark to-amju-primary rounded-[2rem] shadow-2xl mb-8">
                                                    <img src="/img/team/Internal-Auditor.jpg" class="w-full rounded-[1.9rem]" alt="Samuel N. Ikechukwu">
                                                </div>
                                                <h3 class="text-2xl font-black text-slate-900 mb-1">Samuel N. Ikechukwu</h3>
                                                <p class="text-amju-primary font-bold uppercase tracking-widest text-sm mb-6">Internal Auditor</p>
                                            </div>
                                        </div>
                                        <div class="md:w-2/3 space-y-8 prose prose-lg prose-blue max-w-none">
                                            <p class="font-bold text-slate-900 leading-relaxed">He is a pioneer staff of AMJU Unique MFB Limited. He holds an Associate Certificate of The Chartered Institute of Bankers of Nigeria (ACIB) and a Certified Microfinance Banker (MCIB). He is also a Student Member of Chartered Institute of Secretaries and Administrators of Nigeria.</p>
                                            <p>He has over 30 years working experience most of which is in commercial and retail banking in Nigeria. He had worked as a Branch Manager, Head of Regional Credit Department at Afribank Nigeria PLC before his retirement from Afribank in 2006.</p>
                                             <p>He has attended several courses, workshops and seminars which include Agricultural Lending Course, Credit Analysis and Project Evaluation and other related courses to microfinance banking.</p>
                                        </div>
                                    </div>
                                @break

                                @default
                                    <div class="text-center py-24">
                                        <div class="w-24 h-24 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <svg class="w-12 h-12 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                        </div>
                                        <h2 class="text-3xl font-black text-slate-900">Profile Loading...</h2>
                                        <p class="text-slate-500 mt-4">We are currently updating our leadership profiles. Please check back soon.</p>
                                        <a href="{{ route('about.us', ['type' => 'management-team']) }}" class="inline-block mt-8 font-black text-amju-primary hover:underline">Back to Team</a>
                                    </div>
                            @endswitch
                        </div>
                    @else
                        <!-- General About Pages -->
                        <div class="space-y-12 animate-in fade-in slide-in-from-bottom-4 duration-500">
                            @switch($type)
                                @case('main')
                                    <div class="space-y-12">
                                        <h2 class="text-4xl font-black text-slate-900 font-display">Our Company</h2>
                                        <div class="prose prose-lg prose-slate max-w-none">
                                            <p class="text-xl text-slate-600 leading-relaxed font-medium">AMJU Unique Microfinance Bank Limited, with its corporate Head Office in Warri, Delta State, was incorporated in 2009 and licensed by the Central Bank of Nigeria in 2010.</p>
                                            
                                            <p>We commenced banking operations as a unit microfinance bank on 3rd May, 2010. By February 2013, we were granted approval to operate as a <strong>State Microfinance Bank</strong>, reflecting our rapid growth and strong capital base.</p>
                                            
                                            <p>Our bank is a hybrid microfinance institution, combining traditional personalized service with modern digital solutions. We are one of the very few microfinance banks in Nigeria to offer full ATM, Internet Banking, POS, and mobile channels across all our branches.</p>
                                            
                                            <div class="my-16 grid grid-cols-1 md:grid-cols-2 gap-8 not-prose">
                                                <div class="p-10 bg-amju-primary rounded-[3rem] text-white">
                                                    <h4 class="text-2xl font-black mb-6 uppercase tracking-widest text-white/50">Vision</h4>
                                                    <p class="text-lg leading-relaxed">To become the world leading financial institution that support customers' needs through product and services, creating superior returns for all stakeholders.</p>
                                                </div>
                                                <div class="p-10 bg-slate-900 rounded-[3rem] text-white">
                                                    <h4 class="text-2xl font-black mb-6 uppercase tracking-widest text-slate-400">Mission</h4>
                                                    <p class="text-lg leading-relaxed">To be the best MFB in Nigeria with flexible quality services, empowering the powerless and reducing poverty in our environment.</p>
                                                </div>
                                            </div>

                                            <p>Our motto, <strong>"Easy Banking beyond the First,"</strong> encapsulates our philosophy of providing accessible, reliable, and innovative financial services to individuals and MSMEs.</p>
                                        </div>
                                    </div>
                                @break

                                @case('management-team')
                                    <div class="space-y-12">
                                        <h2 class="text-4xl font-black text-slate-900 font-display">Leadership Team</h2>
                                        <p class="text-slate-500 text-lg">The Bank has a formidable Board and Management Team made up of seasoned professionals. We guarantee first-class banking services to all our esteemed customers.</p>
                                        
                                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                                            @php
                                                $mgtTeam = [
                                                    ['name' => 'Dr. Jonathan Ososuakpor', 'role' => 'MD / CEO', 'slug' => 'ceo', 'img' => '/img/team/Osoluakpor-Jonathan.jpg'],
                                                    ['name' => 'Henry Onojakpor', 'role' => 'Executive Director', 'slug' => 'ed', 'img' => '/img/team/Executive-Director.jpg'],
                                                    ['name' => 'Ogbeide E. Ebhozele', 'role' => 'General Manager', 'slug' => 'gm', 'img' => '/img/team/Ogbeide-Ebhozele.jpg'],
                                                    ['name' => 'Samuel N. Ikechukwu', 'role' => 'Internal Auditor', 'slug' => 'auditor', 'img' => '/img/team/Internal-Auditor.jpg'],
                                                ];
                                            @endphp

                                            @foreach($mgtTeam as $member)
                                                <a href="{{ route('about.team', ['person' => $member['slug']]) }}" class="group block p-6 bg-slate-50 rounded-[2.5rem] border border-slate-100 hover:bg-white hover:shadow-2xl transition-all duration-500 text-center">
                                                    <div class="relative w-32 h-32 mx-auto mb-6">
                                                        <div class="absolute inset-0 bg-amju-primary rounded-full scale-0 group-hover:scale-110 transition-transform duration-500 opacity-10"></div>
                                                        <img src="{{ $member['img'] }}" class="w-full h-full object-cover rounded-full border-4 border-white shadow-lg" alt="{{ $member['name'] }}">
                                                    </div>
                                                    <h4 class="text-xl font-black text-slate-900 group-hover:text-amju-primary transition-colors">{{ $member['name'] }}</h4>
                                                    <p class="text-slate-500 font-bold text-sm uppercase tracking-widest mt-1">{{ $member['role'] }}</p>
                                                    <span class="inline-flex mt-6 text-amju-primary font-black text-xs uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity">View Bio &rarr;</span>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                @break

                                @case('our-branches')
                                    <div class="space-y-12">
                                        <h2 class="text-4xl font-black text-slate-900 font-display">Our Network</h2>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                            @foreach([
                                                ['name' => 'Head Office (Airport Road)', 'address' => '71 Airport Road, Warri, Delta State', 'phone' => '0703 222 2222'],
                                                ['name' => 'Udu Branch', 'address' => 'No 116 Udu road, Udu', 'phone' => '08074515264'],
                                                ['name' => 'Emevor Branch', 'address' => 'Along Ozoro-Ughelli Road Opp Kilo, by James Welch Grammar sch, Emevor', 'phone' => '09053960318'],
                                                ['name' => 'Main Market Branch', 'address' => 'Warri Main Market, Warri', 'phone' => '0703 333 3333'],
                                                ['name' => 'Asaba Branch', 'address' => 'Nnebisi Road, Asaba', 'phone' => '0703 444 4444'],
                                                ['name' => 'Ughelli Branch', 'address' => 'Post Office Road, Ughelli', 'phone' => '0703 555 5555'],
                                                ['name' => 'Eku Branch', 'address' => 'Eku-Abraka Road, Eku', 'phone' => '0703 666 6666']
                                            ] as $branch)
                                                <div class="p-8 bg-slate-50 rounded-[2.5rem] border border-slate-100">
                                                    <h4 class="text-xl font-black text-slate-900 mb-4">{{ $branch['name'] }}</h4>
                                                    <div class="space-y-3 text-slate-600">
                                                        <p class="flex items-start">
                                                            <svg class="w-5 h-5 mr-3 text-amju-primary mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                                            {{ $branch['address'] }}
                                                        </p>
                                                        <p class="flex items-center">
                                                            <svg class="w-5 h-5 mr-3 text-amju-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                                                            {{ $branch['phone'] }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @break

                                @default
                                    <div class="animate-pulse">
                                        <h2 class="text-4xl font-black text-slate-200 uppercase">{{ str_replace('-', ' ', $type) }}</h2>
                                        <div class="mt-8 space-y-4">
                                            <div class="h-4 bg-slate-100 rounded w-3/4"></div>
                                            <div class="h-4 bg-slate-100 rounded w-1/2"></div>
                                            <div class="h-4 bg-slate-100 rounded w-5/6"></div>
                                        </div>
                                    </div>
                            @endswitch
                        </div>
                    @endif
                </main>
            </div>
        </div>
    </div>
</div>
