<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Amju Unique MFB') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    </head>
    <body class="font-sans antialiased bg-slate-50 text-slate-900 selection:bg-amju-primary selection:text-white">
        <div class="min-h-screen flex flex-col">


            <!-- Navigation -->
            <nav x-data="{ open: false, scroll: false }" 
                 @scroll.window="scroll = (window.pageYOffset > 20) ? true : false"
                 :class="{ 'bg-white/80 backdrop-blur-md shadow-sm': scroll, 'bg-transparent': !scroll }"
                 class="fixed w-full z-50 transition-all duration-300">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-20">
                        <div class="flex items-center">
                            <a href="/" class="flex items-center">
                                <img src="{{ asset('img/logo.jpg') }}" alt="Amju Unique MFB Logo" class="h-12 w-auto">
                            </a>
                        </div>

                        <!-- Desktop Menu -->
                        <div class="hidden md:flex items-center space-x-8">
                            <a href="{{ route('banking.personal') }}" class="text-sm font-semibold hover:text-amju-primary transition">Personal</a>
                            <a href="{{ route('banking.sme') }}" class="text-sm font-semibold hover:text-amju-primary transition">SME</a>
                            <a href="{{ route('banking.e') }}" class="text-sm font-semibold hover:text-amju-primary transition">e-Banking</a>
                            <a href="{{ route('site.media') }}" class="text-sm font-semibold hover:text-amju-primary transition">Media</a>
                            <a href="{{ route('site.ir') }}" class="text-sm font-semibold hover:text-amju-primary transition">Investors</a>
                            <a href="{{ route('about') }}" class="text-sm font-semibold hover:text-amju-primary transition">About Us</a>
                            <a href="{{ route('contact') }}" class="text-sm font-semibold hover:text-amju-primary transition">Contact Us</a>
                            <a href="{{ route('account.open') }}" class="inline-flex items-center px-6 py-2.5 border border-transparent text-sm font-bold rounded-full text-white bg-amju-primary hover:bg-amju-dark transition-all shadow-lg shadow-amju-primary/30">
                                Open Account
                            </a>
                        </div>

                        <!-- Mobile menu button -->
                        <div class="flex items-center md:hidden">
                            <button @click="open = !open" class="text-slate-600 hover:text-amju-primary transition p-2">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div x-show="open" x-cloak x-transition.opacity class="md:hidden bg-white border-b border-slate-100">
                    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                        <a href="{{ route('banking.personal') }}" class="block px-3 py-4 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">Personal Banking</a>
                        <a href="{{ route('banking.sme') }}" class="block px-3 py-4 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">SME Banking</a>
                        <a href="{{ route('banking.e') }}" class="block px-3 py-4 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">e-Banking</a>
                        <a href="{{ route('site.media') }}" class="block px-3 py-4 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">Media Hub</a>
                        <a href="{{ route('site.ir') }}" class="block px-3 py-4 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">Investor Relations</a>
                        <a href="{{ route('about') }}" class="block px-3 py-4 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">About Us</a>
                        <a href="{{ route('contact') }}" class="block px-3 py-4 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">Contact Us</a>
                        <a href="{{ route('account.open') }}" class="block px-3 py-4 text-base font-bold text-amju-primary bg-amju-primary/10 rounded-lg">Open Account</a>
                        <div class="pt-4 px-3">
                            <div id="google_translate_element_mobile" class="inline-block bg-slate-100 rounded-lg px-2"></div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white pt-32 pb-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="flex-grow">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-[#005db7] text-white py-12 md:py-24 overflow-hidden">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 text-center md:text-left">
                        <div class="col-span-1 sm:col-span-2 lg:col-span-2 flex flex-col items-center md:items-start">
                            <a href="/" class="flex items-center mb-6">
                                <img src="{{ asset('img/logo.png') }}" alt="Amju Unique MFB Logo" class="h-10 w-auto brightness-0 invert">
                            </a>
                            <p class="text-sm leading-relaxed max-w-sm text-blue-50">
                                Providing unique financial solutions tailored for your growth and stability. Join thousands of Nigerians achieving their dreams with Amju.
                            </p>
                        </div>
                        <div class="flex flex-col items-center md:items-start">
                            <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-xs">Explore</h4>
                            <ul class="space-y-4 text-sm text-blue-50">
                                <li><a href="{{ route('banking.personal') }}" class="hover:text-white transition">Personal Banking</a></li>
                                <li><a href="{{ route('banking.sme') }}" class="hover:text-white transition">SME Banking</a></li>
                                <li><a href="{{ route('banking.e') }}" class="hover:text-white transition">e-Banking</a></li>
                                <li><a href="{{ route('careers') }}" class="hover:text-white transition">Careers</a></li>
                                <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="flex flex-col items-center md:items-start">
                            <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-xs">Legal & App</h4>
                            <ul class="space-y-4 text-sm mb-8 text-blue-50">
                                <li><a href="{{ route('privacy') }}" class="hover:text-white transition">Privacy Policy</a></li>
                                <li><a href="{{ route('terms') }}" class="hover:text-white transition">Terms of Service</a></li>
                                <li><a href="{{ route('site.media', ['type' => 'news']) }}" class="hover:text-white transition">Regulatory Reports</a></li>
                            </ul>
                            <div class="flex flex-col space-y-3 w-full max-w-[200px]">
                                <a href="https://apps.apple.com/us/app/amju-mfb/id1537937432" target="_blank" class="inline-flex items-center px-4 py-2 bg-white rounded-xl hover:bg-blue-50 transition border border-white/20 group shadow-lg shadow-black/5">
                                    <img src="/img/app-store.png" class="w-6 h-6 mr-3" alt="App Store">
                                    <div class="text-left">
                                        <div class="text-[10px] uppercase font-bold text-slate-500 leading-none">Download on the</div>
                                        <div class="text-sm font-black text-slate-900">App Store</div>
                                    </div>
                                </a>
                                <a href="https://play.google.com/store/apps/details?id=com.amjum" target="_blank" class="inline-flex items-center px-4 py-2 bg-white rounded-xl hover:bg-blue-50 transition border border-white/20 group shadow-lg shadow-black/5">
                                    <img src="/img/google-play.png" class="w-6 h-6 mr-3" alt="Google Play">
                                    <div class="text-left">
                                        <div class="text-[10px] uppercase font-bold text-slate-500 leading-none">Get it on</div>
                                        <div class="text-sm font-black text-slate-900">Google Play</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-16 pt-8 border-t border-white/10 grid grid-cols-2 sm:grid-cols-3 md:flex md:flex-wrap justify-between items-center gap-8 transition-all duration-500">
                        <div class="flex justify-center"><img src="/img/cbn.png" class="h-8 w-auto brightness-0 invert opacity-70 hover:opacity-100 transition-opacity" alt="CBN"></div>
                        <div class="flex justify-center"><img src="/img/firs.png" class="h-8 w-auto brightness-0 invert opacity-70 hover:opacity-100 transition-opacity" alt="FIRS"></div>
                        <div class="flex justify-center text-sm font-black tracking-widest text-white/90">NEPTUNE</div>
                        <div class="flex justify-center"><img src="/img/interswitch.png" class="h-6 w-auto brightness-0 invert opacity-70 hover:opacity-100 transition-opacity" alt="Interswitch"></div>
                        <div class="flex justify-center text-sm font-black tracking-widest text-white/90">NIBSS</div>
                        <div class="flex justify-center text-sm font-black tracking-tighter text-white/90">NDIC INSURED</div>
                    </div>

                    <div class="mt-8 pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center space-y-8 md:space-y-0 text-xs text-blue-100 overflow-hidden">
                        <div class="flex flex-col md:items-start items-center space-y-2 text-center md:text-left w-full md:w-auto">
                            <p>&copy; {{ date('Y') }} Amju Unique Microfinance Bank Ltd. All rights reserved.</p>
                            <p class="text-blue-100">Powered by <span class="text-white font-bold">Orion Tech Enterprise</span> • <a href="mailto:oriontechng@gmail.com" class="hover:text-white transition">oriontechng@gmail.com</a></p>
                        </div>
                        <div class="flex flex-col sm:flex-row justify-center items-center gap-6 w-full md:w-auto">
                            
                            <div class="flex space-x-6">
                                <a href="https://x.com/Amjuuniquemfb?s=09" target="_blank" class="hover:text-white transition">Twitter</a>
                                <a href="https://www.facebook.com/share/17YujNFH7V/" target="_blank" class="hover:text-white transition">Facebook</a>
                                <a href="https://www.instagram.com/amjuuniquemicrofinancebank?igsh=MXBwYWU3d2s0cGx6dw==" target="_blank" class="hover:text-white transition">Instagram</a>
                                <a href="https://www.tiktok.com/@amjuuniquemicrofinance?_r=1&amp;_t=ZN-92GhT2qWZRi" target="_blank" class="hover:text-white transition">TikTok</a>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-[180px] mx-auto mt-4">
                        <div id="google_translate_element_footer" class="bg-white/10 rounded px-1 hover:bg-white/20 transition-colors w-full text-center"></div>
                    </div>
                </div>
            </footer>
        </div>

        @livewireScripts
        <script type="text/javascript">
            function googleTranslateElementInit() {
                // Initialize for Footer
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    includedLanguages: 'en,yo,ig,ha',
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                    autoDisplay: false
                }, 'google_translate_element_footer');
                
                // Initialize for Mobile Menu
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    includedLanguages: 'en,yo,ig,ha',
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                    autoDisplay: false
                }, 'google_translate_element_mobile');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
        <style>
            /* Customize Google Translate Widget */
            #google_translate_element_footer, 
            #google_translate_element_mobile {
                height: 26px;
                overflow: hidden;
                display: flex;
                align-items: center;
            }
            .goog-te-gadget-simple {
                background-color: transparent !important;
                border: none !important;
                padding: 0 !important;
                font-family: inherit !important;
                display: flex !important;
                align-items: center !important;
            }
            .goog-te-gadget-simple span {
                font-size: 11px !important;
                font-weight: 600 !important;
                text-transform: uppercase !important;
                letter-spacing: 0.05em !important;
            }
            /* White text for footer */
            #google_translate_element_footer .goog-te-gadget-simple span {
                color: white !important;
            }
            /* Dark text for mobile menu (white background) */
            #google_translate_element_mobile .goog-te-gadget-simple span {
                color: #334155 !important;
            }
            .goog-te-gadget-simple img {
                display: none !important;
            }
            .goog-te-menu-value span {
                text-decoration: none !important;
            }
            .goog-te-menu-value span:nth-child(3),
            .goog-te-menu-value span:nth-child(5) {
                display: none !important;
            }
            .goog-te-gadget-icon {
                display: none !important;
            }
            /* Hide the "Powered by Google" text */
            .goog-te-gadget {
                font-size: 0 !important;
            }
            iframe.goog-te-banner-frame {
                display: none !important;
            }
            body {
                top: 0 !important;
            }
            .goog-te-menu-frame {
                box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1) !important;
                border: 1px solid #e2e8f0 !important;
                border-radius: 0.5rem !important;
            }
        </style>
    </body>
</html>
