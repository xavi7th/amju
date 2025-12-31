<div class="overflow-x-hidden" x-data="{ currentSlide: 1, slideCount: 8, showPromo: true }">
    <!-- Promo Modal -->
    <div x-show="showPromo" 
         class="fixed inset-0 z-50 flex items-center justify-center p-4"
         style="display: none;">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="showPromo = false"></div>
        
        <!-- Modal Content -->
        <div class="relative bg-transparent max-w-4xl w-full mx-auto"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-90 translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
             x-transition:leave-end="opacity-0 scale-90 translate-y-4">
            
            <button @click="showPromo = false" class="absolute -top-4 -right-4 md:-top-6 md:-right-6 w-10 h-10 bg-white rounded-full flex items-center justify-center text-slate-900 shadow-xl hover:bg-slate-100 z-50 transition">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            
            <img src="/img/promos/christmas-promo.jpg" alt="Merry Christmas from Amju Unique MFB" class="w-full h-auto rounded-3xl shadow-2xl">
        </div>
    </div>
    <!-- Hero Section -->
    <section class="relative h-[80vh] min-h-[600px] overflow-hidden bg-slate-900">
        <div class="absolute inset-0 z-0">
            <template x-for="n in slideCount" :key="n">
                <div x-show="currentSlide === n" 
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 scale-110"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="absolute inset-0 w-full h-full bg-cover bg-center"
                     :style="`background-image: url('/img/slides/slide-${n}.jpg')`">
                    <div class="absolute inset-0 bg-black/50"></div>
                </div>
            </template>
        </div>

        <div class="relative z-10 container mx-auto px-6 h-full flex items-center">
            <div class="max-w-2xl text-white">
                <h1 class="text-4xl md:text-6xl font-black mb-8 leading-tight animate-in slide-in-from-bottom-10 duration-700">
                    #1 Choice for Your <span class="text-blue-400">Banking Needs</span>
                </h1>
                <p class="text-lg text-slate-200 mb-12 leading-relaxed animate-in slide-in-from-bottom-10 duration-1000 delay-200 max-w-lg">
                    Our Accounts are tailor made financial companions and are the best options if you are looking for high-quality and reliable banking services.
                </p>
                <div class="flex flex-wrap gap-4 animate-in slide-in-from-bottom-10 duration-1000 delay-500">
                    <a href="{{ route('account.open') }}" class="px-8 py-4 bg-blue-600 rounded-2xl text-white font-black hover:bg-blue-700 transition shadow-xl shadow-blue-600/30">
                        Find out more
                    </a>
                </div>
            </div>
        </div>

        <!-- Slider Navigation -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-20 flex space-x-3">
            <template x-for="n in slideCount" :key="n">
                <button @click="currentSlide = n" 
                        class="w-3 h-3 rounded-full transition-all duration-300"
                        :class="currentSlide === n ? 'bg-blue-600 w-8' : 'bg-white/30 hover:bg-white/50'"></button>
            </template>
        </div>
    </section>

    <!-- Highlights Section -->
    <section class="relative z-20 -mt-20" id="services">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Issued Cards -->
                <div class="bg-white p-8 rounded-[2.5rem] shadow-2xl border border-slate-100 hover:scale-[1.02] transition-transform duration-300">
                    <div class="flex items-center space-x-6 mb-6">
                        <div class="w-20 h-20 bg-blue-50 rounded-2xl flex items-center justify-center">
                            <img src="/img/progress-1-92x84.png" class="w-12" alt="">
                        </div>
                        <div>
                            <div class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">More than</div>
                            <div class="text-3xl font-black text-slate-900">5,000</div>
                            <div class="text-sm font-bold text-blue-600">Issued Cards</div>
                        </div>
                    </div>
                    <p class="text-slate-600 leading-relaxed">
                        Amju Unique Micro Finance Bank issues more than 5000 cards every year. We offer you a cashless access to your cash at all times.
                    </p>
                </div>

                <!-- POS Fees -->
                <div class="bg-white p-8 rounded-[2.5rem] shadow-2xl border border-slate-100 hover:scale-[1.02] transition-transform duration-300">
                    <div class="flex items-center space-x-6 mb-6">
                        <div class="w-20 h-20 bg-green-50 rounded-2xl flex items-center justify-center">
                            <img src="/img/progress-3-92x84.png" class="w-12" alt="">
                        </div>
                        <div>
                            <div class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Up to</div>
                            <div class="text-3xl font-black text-slate-900">0%</div>
                            <div class="text-sm font-bold text-green-600">POS Fees</div>
                        </div>
                    </div>
                    <p class="text-slate-600 leading-relaxed">
                        Enjoy zero fees on POS usage. AMJU Unique MFB POS solutions are made to help all business customers reduce costs.
                    </p>
                </div>

                <!-- Interest Rate -->
                <div class="bg-white p-8 rounded-[2.5rem] shadow-2xl border border-slate-100 hover:scale-[1.02] transition-transform duration-300">
                    <div class="flex items-center space-x-6 mb-6">
                        <div class="w-20 h-20 bg-amber-50 rounded-2xl flex items-center justify-center">
                            <img src="/img/progress-2-92x84.png" class="w-12" alt="">
                        </div>
                        <div>
                            <div class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">As low as</div>
                            <div class="text-3xl font-black text-slate-900">1.6%</div>
                            <div class="text-sm font-bold text-amber-600">Interest on Loans</div>
                        </div>
                    </div>
                    <p class="text-slate-600 leading-relaxed">
                        Expand your business with AMJU Unique MFB. We offer various LOAN package rates at a very minimal rate for all clients.
                    </p>
                </div>
            </div>
    </section>
    
    <!-- Partnerships & Affiliations -->
    <section class="py-12 bg-white border-b border-slate-100">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 transition-all duration-500">
                <div class="flex flex-col items-center group">
                    <img src="/img/cbn.png" class="h-12 md:h-16 w-auto object-contain transition-transform group-hover:scale-110 opacity-80 hover:opacity-100" alt="CBN">
                </div>
                <div class="flex flex-col items-center group">
                    <img src="/img/firs.png" class="h-12 md:h-16 w-auto object-contain transition-transform group-hover:scale-110 opacity-80 hover:opacity-100" alt="FIRS">
                </div>
                <div class="flex flex-col items-center group">
                    <div class="text-2xl font-black tracking-tighter transition-transform group-hover:scale-110 text-[#00509E]">NEPTUNE</div>
                    <div class="text-[8px] font-bold uppercase tracking-widest text-[#00509E]/60">Core Banking Partner</div>
                </div>
                <div class="flex flex-col items-center group">
                    <img src="/img/interswitch.png" class="h-10 md:h-12 w-auto object-contain transition-transform group-hover:scale-110 opacity-80 hover:opacity-100" alt="Interswitch">
                </div>
                <div class="flex flex-col items-center group">
                    <div class="text-2xl font-black tracking-tighter transition-transform group-hover:scale-110 text-[#C1272D]">NIBSS</div>
                    <div class="text-[8px] font-bold uppercase tracking-widest text-[#C1272D]/60">Settlement System</div>
                </div>
                <div class="flex flex-col items-center group">
                    <div class="text-xl font-black tracking-tighter transition-transform group-hover:scale-110 text-center leading-none text-[#2EA84A]">NDIC<br><span class="text-[8px] font-bold uppercase tracking-widest block mt-1 opacity-70">Insured</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- We Fund Your Dream Section -->
    <section class="py-32 bg-slate-900 text-white mt-16 overflow-hidden" id="banking">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-24">
                <h2 class="text-3xl md:text-4xl font-black mb-8">We <span class="text-blue-400 underline decoration-blue-400/30 underline-offset-8">fund your dream</span></h2>
                <p class="text-slate-400 text-lg leading-relaxed">
                    We are right here to fund that great dream of yours in a way that you may never imagine. We assist in creating the right mental environment and funds to get your dream business come to life.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-12">
                <!-- Left Features -->
                <div class="space-y-12">
                    <div class="flex items-start space-x-6">
                        <div class="flex-shrink-0 w-14 h-14 bg-white/5 rounded-2xl flex items-center justify-center text-blue-400">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Ways to bank</h4>
                            <p class="text-slate-400">With our various banking solutions, there is an option for everyone.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-6">
                        <div class="flex-shrink-0 w-14 h-14 bg-white/5 rounded-2xl flex items-center justify-center text-blue-400">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Internet Banking</h4>
                            <p class="text-slate-400">Get instant access to your account on any device using our banking apps.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-6">
                        <div class="flex-shrink-0 w-14 h-14 bg-white/5 rounded-2xl flex items-center justify-center text-blue-400">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" /></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Send a Message</h4>
                            <p class="text-slate-400">Our Support team is always ready to help you solve any issues.</p>
                        </div>
                    </div>
                </div>

                <!-- Center App Mockup -->
                <div class="hidden lg:block relative text-center">
                    <div class="absolute inset-0 bg-blue-600/20 blur-[100px] rounded-full"></div>
                    <img src="/img/amju-mobile-banking.png" class="relative z-10 w-[300px] mx-auto hover:rotate-3 transition-transform duration-500" alt="Mobile App">
                </div>

                <!-- Right Features -->
                <div class="space-y-12 text-left">
                    <div class="flex items-start space-x-6">
                        <div class="flex-shrink-0 w-14 h-14 bg-white/5 rounded-2xl flex items-center justify-center text-blue-400">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Products & Services</h4>
                            <p class="text-slate-400">Special programs with benefits for business owners and investors.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-6">
                        <div class="flex-shrink-0 w-14 h-14 bg-white/5 rounded-2xl flex items-center justify-center text-blue-400">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Personal Profile</h4>
                            <p class="text-slate-400">Register your free personal profile online to begin using our services.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-6">
                        <div class="flex-shrink-0 w-14 h-14 bg-white/5 rounded-2xl flex items-center justify-center text-blue-400">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Visit Our Branches</h4>
                            <p class="text-slate-400">We have offices in many locations. We are close to you everywhere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who We Are (About Us) -->
    <section class="py-32 bg-white overflow-hidden" id="about">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-20">
                <!-- Video Section -->
                <div class="lg:w-1/2 relative">
                    <div class="absolute -inset-10 bg-blue-50 rounded-full blur-[80px]"></div>
                    <div class="relative rounded-[3rem] overflow-hidden shadow-2xl bg-slate-900 border-4 border-white group">
                        <video class="w-full aspect-video" poster="/img/amju-intro-video-poster.png" controls>
                            <source src="/img/amju-intro-video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="lg:w-1/2">
                    <div class="inline-block px-4 py-2 bg-blue-50 rounded-xl text-blue-600 font-bold text-sm tracking-widest uppercase mb-6">
                        Who We Are
                    </div>
                    <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-8 leading-tight">
                        Dedicated to the <span class="text-blue-600">success</span> of our clients since 2009.
                    </h2>
                    <div class="space-y-8 text-slate-600 text-lg leading-relaxed">
                        <p class="font-bold text-slate-900">
                            Amju Unique Micro Finance Bank was founded on 6th May, 2009 to introduce the new level of financial services in Nigeria.
                        </p>
                        <p>
                            At Amju Unique Micro Finance Bank, we are guided by a common purpose to help make financial lives better by connecting clients and communities to the resources they need to be successful.
                        </p>
                        <p>
                            We are driving growth – helping to create jobs, develop communities, foster economic mobility and address our society’s biggest challenges – while managing risk and providing a return to our clients and our shareholders.
                        </p>
                    </div>
                    <div class="mt-10">
                        <a href="{{ route('about') }}" class="inline-flex items-center space-x-2 text-blue-600 font-black text-lg hover:underline decoration-2 underline-offset-8">
                            <span>Learn More About Us</span>
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MD/CEO Quote Section -->
            <div class="mt-24 grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-1">
                    <div class="bg-blue-600 p-10 rounded-[2.5rem] text-white shadow-xl shadow-blue-600/20 relative overflow-hidden group">
                        <svg class="w-20 h-20 text-white/10 absolute top-0 left-0" fill="currentColor" viewBox="0 0 32 32"><path d="M10 8v8h6v8H8V16H4V8h6zm14 0v8h6v8h-8V16h-4V8h6z" /></svg>
                        <p class="relative z-10 text-lg italic leading-relaxed mb-8">
                            At AMJU Unique MFB, we aim to provide top quality banking services to a greater number of individuals and corporate customers.
                        </p>
                        <div>
                            <div class="font-black text-white">Dr. Ososuakpor Jonathan</div>
                            <div class="text-sm text-blue-200">MD/CEO, Amju Unique MFB</div>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-1 rounded-[2.5rem] overflow-hidden shadow-lg hover:scale-[1.05] transition-transform duration-500">
                    <img src="/img/customer-care.jpg" class="w-full h-full object-cover" alt="Customer Care">
                </div>
                <div class="md:col-span-1 rounded-[2.5rem] overflow-hidden shadow-lg hover:scale-[1.05] transition-transform duration-500">
                    <img src="/img/slider-2-1920x879.jpg" class="w-full h-full object-cover" alt="EduSave">
                </div>
                <div class="md:col-span-1 rounded-[2.5rem] overflow-hidden shadow-lg hover:scale-[1.05] transition-transform duration-500">
                    <img src="/img/entrepreneur.jpg" class="w-full h-full object-cover" alt="Career">
                </div>
            </div>
        </div>
    </section>

    <!-- Open Account CTA -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <div class="bg-gradient-to-r from-slate-900 to-blue-900 rounded-[3rem] p-12 md:p-20 relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-12 text-center md:text-left">
                <div class="relative z-10 max-w-xl">
                    <h2 class="text-3xl md:text-4xl font-black text-white mb-6">
                        Open Your New <span class="text-blue-400">Bank Account</span> Now!
                    </h2>
                    <p class="text-blue-200 text-lg">It takes less than 5 minutes to join the bank of the future.</p>
                </div>
                <a href="{{ route('account.open') }}" class="relative z-10 px-10 py-5 bg-white rounded-2xl text-slate-900 font-black text-xl hover:bg-slate-100 transition shadow-2xl">
                    Get Started »
                </a>
                <!-- Decorative elements -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500/10 rounded-full -mr-32 -mt-32"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-slate-500/10 rounded-full -ml-32 -mb-32"></div>
            </div>
        </div>
    </section>

    <!-- Verve Card Section -->
    <section class="py-32 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-24">
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-8">AMJU Unique MFB <span class="text-blue-600">Verve Card</span></h2>
                <p class="text-slate-600 text-lg leading-relaxed mb-6">
                    The AMJU Unique MFB Verve Card is a Naira denominated debit card. It can be used for ATM cash withdrawals and to settle purchases/payments via POS terminals and Online anywhere in Nigeria.
                </p>
                <p class="text-slate-600 text-lg">
                    Linked online, real-time to your Current or Savings account. Valid for 3 years.
                </p>
            </div>

            <h3 class="text-3xl font-black text-center text-slate-900 mb-16">How to Order a New Card</h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="text-center group">
                    <div class="w-24 h-24 bg-blue-50 rounded-[2rem] flex items-center justify-center text-blue-600 mx-auto mb-6 relative group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <span class="absolute -top-2 -right-2 w-8 h-8 bg-slate-900 text-white text-sm font-black rounded-xl flex items-center justify-center">1</span>
                        <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4" /></svg>
                    </div>
                    <h5 class="text-xl font-black text-slate-900 mb-3">Online Registration</h5>
                    <p class="text-slate-500">Everything starts with free online registration. Only basic data is needed.</p>
                </div>
                <div class="text-center group">
                    <div class="w-24 h-24 bg-blue-50 rounded-[2rem] flex items-center justify-center text-blue-600 mx-auto mb-6 relative group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <span class="absolute -top-2 -right-2 w-8 h-8 bg-slate-900 text-white text-sm font-black rounded-xl flex items-center justify-center">2</span>
                        <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                    </div>
                    <h5 class="text-xl font-black text-slate-900 mb-3">Filling Out a Form</h5>
                    <p class="text-slate-500">Download and fill out the complete form to enable us know you better.</p>
                </div>
                <div class="text-center group">
                    <div class="w-24 h-24 bg-blue-50 rounded-[2rem] flex items-center justify-center text-blue-600 mx-auto mb-6 relative group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <span class="absolute -top-2 -right-2 w-8 h-8 bg-slate-900 text-white text-sm font-black rounded-xl flex items-center justify-center">3</span>
                        <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h5 class="text-xl font-black text-slate-900 mb-3">Append Signatures</h5>
                    <p class="text-slate-500">All signatories are required to append their signature and include passports.</p>
                </div>
                <div class="text-center group">
                    <div class="w-24 h-24 bg-blue-50 rounded-[2rem] flex items-center justify-center text-blue-600 mx-auto mb-6 relative group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <span class="absolute -top-2 -right-2 w-8 h-8 bg-slate-900 text-white text-sm font-black rounded-xl flex items-center justify-center">4</span>
                        <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                    </div>
                    <h5 class="text-xl font-black text-slate-900 mb-3">Pick Up Your Card</h5>
                    <p class="text-slate-500">Walk into any branch to collect, activate and start using your card immediately.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-32 bg-slate-900 text-white" id="faq">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-black text-center mb-24 text-blue-400">Frequently Asked Questions</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-12">
                <div class="space-y-12">
                    <div>
                        <h5 class="text-xl font-black text-white mb-4">What is the currency amount for the Verve Card?</h5>
                        <p class="text-slate-400 leading-relaxed text-lg italic">The card is Nigerian Naira denominated and has an issuance fee of ₦1,000.</p>
                    </div>
                    <div>
                        <h5 class="text-xl font-black text-white mb-4">What steps do I take if my card gets lost?</h5>
                        <p class="text-slate-400 leading-relaxed text-lg italic">Immediately contact our support center at +234 905 396 0980 or support@amjuuniquemfbng.com.</p>
                    </div>
                    <div>
                        <h5 class="text-xl font-black text-white mb-4">What is the least amount to start ESUSU account?</h5>
                        <p class="text-slate-400 leading-relaxed text-lg italic">Our Esusu account can be opened with a minimum deposit of ₦200.</p>
                    </div>
                </div>
                <div class="space-y-12">
                    <div>
                        <h5 class="text-xl font-black text-white mb-4">How do I get AMJU Unique MFB POS?</h5>
                        <p class="text-slate-400 leading-relaxed text-lg italic">Open a current account, download our indemnity form and submit it at the nearest branch with a request letter.</p>
                    </div>
                    <div>
                        <h5 class="text-xl font-black text-white mb-4">How can I register for Internet banking?</h5>
                        <p class="text-slate-400 leading-relaxed text-lg italic">Download the form from our website, fill it and submit at any branch. You'll receive instructions via text.</p>
                    </div>
                    <div>
                        <h5 class="text-xl font-black text-white mb-4">Can I transfer money directly to my AMJU account?</h5>
                        <p class="text-slate-400 leading-relaxed text-lg italic">Yes, you can transfer from any bank to your AMJU Unique MFB account.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map & Contact -->
    <section class="relative h-[600px] bg-slate-100 flex flex-col md:flex-row shadow-2xl overflow-hidden">
        <div class="w-full md:w-3/5 h-[400px] md:h-full">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.154780971543!2d5.754702615089216!3d5.544054795980231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e26e4dd27ca20e2!2sAmju%20Unique%20micro%20finance%20bank!5e0!3m2!1sen!2sng!4v1571909792620!5m2!1sen!2sng"
                class="w-full h-full grayscale hover:grayscale-0 transition-all duration-700"
                frameborder="0"
                style="border:0;"
                allowfullscreen
            ></iframe>
        </div>
        <div class="w-full md:w-2/5 p-12 md:p-20 bg-white flex flex-col justify-center">
            <div class="inline-block px-4 py-2 bg-blue-50 rounded-xl text-blue-600 font-bold text-sm uppercase mb-8 self-start">Contact Us</div>
            <h2 class="text-4xl font-black text-slate-900 mb-10">Get in Touch</h2>
            <div class="space-y-8">
                <div class="flex items-start space-x-6">
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    </div>
                    <div>
                        <div class="font-black text-slate-900">Head Office</div>
                        <p class="text-slate-500">71, Airport Road, Warri, Delta State</p>
                    </div>
                </div>
                <div class="flex items-start space-x-6">
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                    </div>
                    <div>
                        <div class="font-black text-slate-900">Phone Support</div>
                        <p class="text-slate-500">+234 804 567 8996</p>
                        <p class="text-slate-500">+234 805 624 9328</p>
                    </div>
                </div>
                <div class="flex items-start space-x-6">
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                    </div>
                    <div>
                        <div class="font-black text-slate-900">Email Address</div>
                        <p class="text-slate-500">amju.unique@amjuuniquemfbng.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
