<div class="mt-20">
    <!-- Hero Section -->
    <div class="relative h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('img/banners/about-contact.jpg') }}" class="w-full h-full object-cover" alt="Contact Us">
            <div class="absolute inset-0 bg-slate-900/60"></div>
        </div>
        <div class="container mx-auto px-6 text-center lg:text-left relative z-10">
            <h1 class="text-4xl md:text-5xl font-black text-white mb-4">Get In <span class="text-blue-500">Touch</span></h1>
            <nav class="flex justify-center lg:justify-start text-sm font-bold text-slate-400 uppercase tracking-widest">
                <a href="{{ route('home') }}" class="hover:text-blue-500 transition">Home</a>
                <span class="mx-3">/</span>
                <span class="text-blue-500">Contact Us</span>
            </nav>
        </div>
    </div>

    <div class="bg-white">
        <!-- Contact Grid -->
        <div class="container mx-auto px-6 py-24">
            <div class="flex flex-col lg:flex-row gap-20">
                <!-- Info Section -->
                <div class="lg:w-1/3 space-y-12">
                    <div>
                        <h2 class="text-3xl font-black text-slate-900 mb-6 font-display">Contact <span class="text-blue-600">Information</span></h2>
                        <p class="text-slate-500 text-lg leading-relaxed">Have questions or need assistance? Our team is here to help you with all your banking needs.</p>
                    </div>

                    <div class="space-y-8">
                        <div class="flex items-start space-x-6 group">
                            <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-black text-slate-400 uppercase tracking-widest mb-1">Corporate Head Office</h4>
                                <p class="text-lg font-bold text-slate-700">71, Airport Road<br>Warri, Delta State</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-6 group">
                            <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-black text-slate-400 uppercase tracking-widest mb-1">Phone Support</h4>
                                <div class="space-y-1">
                                    <a href="tel:+2348045678996" class="block text-lg font-bold text-slate-700 hover:text-blue-600 transition">+234 804 567 8996</a>
                                    <a href="tel:+2348056249328" class="block text-lg font-bold text-slate-700 hover:text-blue-600 transition">+234 805 624 9328</a>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-6 group">
                            <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-black text-slate-400 uppercase tracking-widest mb-1">Email Inquiry</h4>
                                <a href="mailto:support@amjuuniquemfbng.com" class="text-lg font-bold text-slate-700 hover:text-blue-600 transition">support@amjuuniquemfbng.com</a>
                            </div>
                        </div>
                    </div>

                    <!-- Social Icons -->
                    <div class="pt-8 flex flex-wrap gap-4">
                        <a href="https://www.facebook.com/share/17YujNFH7V/" target="_blank" class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400 hover:bg-blue-600 hover:text-white hover:shadow-xl hover:shadow-blue-600/20 transition-all duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="https://x.com/Amjuuniquemfb?s=09" target="_blank" class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400 hover:bg-black hover:text-white hover:shadow-xl hover:shadow-black/20 transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932 6.064-6.933zm-1.292 19.49h2.039L6.486 3.24H4.298l13.311 17.403z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/amjuuniquemicrofinancebank?igsh=MXBwYWU3d2s0cGx6dw==" target="_blank" class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400 hover:bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-600 hover:text-white hover:shadow-xl hover:shadow-pink-600/20 transition-all duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.335.935 20.665.522 19.875.217 19.11.082 18.239.013 16.947.072 15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.584-.071 4.85c-.055 1.17-.249 1.805-.415 2.227-.217.562-.477.96-.896 1.382-.42.419-.819.679-1.381.896-.422.164-1.056.36-2.227.413-1.266.057-1.647.07-4.85.07s-3.584-.015-4.85-.071c-1.17-.055-1.805-.249-2.227-.415-.562-.217-.96-.477-1.382-.896-.419-.42-.679-.819-.896-1.381-.164-.422-.36-1.057-.413-2.227-.057-1.266-.07-1.646-.07-4.85s.015-3.584.071-4.85c.055-1.17.249-1.805.415-2.227.217-.562.477-.96.896-1.382.42-.419.819-.679 1.381-.896.422-.164 1.057-.36 2.227-.413 1.266-.057 1.646-.07 4.85-.07zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.645-1.44-1.44 0-.795.645-1.44 1.44-1.44.795 0 1.44.645 1.44 1.44z"/></svg>
                        </a>
                        <a href="https://www.tiktok.com/@amjuuniquemicrofinance?_r=1&amp;_t=ZN-92GhT2qWZRi" target="_blank" class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400 hover:bg-slate-900 hover:text-white hover:shadow-xl hover:shadow-slate-900/20 transition-all duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.17-2.86-.6-4.12-1.31a8.776 8.776 0 0 1-1.89-1.35c-.01 2.45-.01 4.9-.01 7.35 0 2.11-.35 4.27-1.57 5.99-1.37 1.95-3.66 3.14-6.02 3.32-2.58.21-5.32-.82-6.95-2.89C.51 19.34-.14 16.51.13 13.88c.24-2.34 1.47-4.57 3.51-5.75 1.59-.92 3.49-1.25 5.3-1.02.01 1.45.01 2.89.01 4.34-1.2-.18-2.48-.12-3.56.51-1.12.65-1.86 1.84-2.01 3.12-.19 1.61.54 3.29 1.89 4.17 1.27.84 2.97.94 4.35.25 1.25-.63 2.05-1.92 2.15-3.32.07-5.4.03-10.8.06-16.2z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Form Section -->
                <div class="lg:w-2/3">
                    <div class="bg-slate-50 p-10 md:p-16 rounded-[3rem] border border-slate-100">
                        @if (session()->has('success'))
                            <div class="mb-12 p-6 bg-green-50 text-green-700 rounded-2xl border border-green-100 font-bold animate-in fade-in slide-in-from-top-4 duration-500">
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif

                        <form wire:submit.prevent="submit" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-2">
                                <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-4">Full Name</label>
                                <input type="text" wire:model="name" placeholder="John Doe" class="w-full px-8 py-4 bg-white border border-slate-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none font-bold text-slate-700">
                                @error('name') <span class="text-red-500 text-xs font-bold ml-4">{{ $message }}</span> @enderror
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-4">Email Address</label>
                                <input type="email" wire:model="email" placeholder="john@example.com" class="w-full px-8 py-4 bg-white border border-slate-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none font-bold text-slate-700">
                                @error('email') <span class="text-red-500 text-xs font-bold ml-4">{{ $message }}</span> @enderror
                            </div>

                            <div class="md:col-span-2 space-y-2">
                                <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-4">Subject</label>
                                <input type="text" wire:model="subject" placeholder="What's this about?" class="w-full px-8 py-4 bg-white border border-slate-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none font-bold text-slate-700">
                                @error('subject') <span class="text-red-500 text-xs font-bold ml-4">{{ $message }}</span> @enderror
                            </div>

                            <div class="md:col-span-2 space-y-2">
                                <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-4">Your Message</label>
                                <textarea wire:model="message" rows="6" placeholder="Message details..." class="w-full px-8 py-4 bg-white border border-slate-200 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none font-bold text-slate-700"></textarea>
                                @error('message') <span class="text-red-500 text-xs font-bold ml-4">{{ $message }}</span> @enderror
                            </div>

                            <div class="md:col-span-2 pt-4">
                                <button type="submit" wire:loading.attr="disabled" class="w-full py-6 bg-blue-600 text-white font-black text-xl rounded-2xl hover:bg-blue-700 transition shadow-2xl shadow-blue-600/40 flex items-center justify-center disabled:opacity-50">
                                    <span wire:loading.remove>Send Message</span>
                                    <span wire:loading><svg class="animate-spin h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="h-[500px] w-full bg-slate-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.154780971543!2d5.754702615089216!3d5.544054795980231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e26e4dd27ca20e2!2sAmju%20Unique%20micro%20finance%20bank!5e0!3m2!1sen!2sng!4v1571909792620!5m2!1sen!2sng" width="100%" height="100%" style="border:0; filter: grayscale(1) contrast(1.2) opacity(0.8);" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
