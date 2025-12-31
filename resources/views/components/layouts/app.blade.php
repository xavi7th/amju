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
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    </head>
    <body class="font-sans antialiased bg-slate-50 text-slate-900 selection:bg-blue-500 selection:text-white">
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
                            <a href="{{ route('banking.personal') }}" class="text-sm font-semibold hover:text-blue-600 transition">Personal</a>
                            <a href="{{ route('banking.sme') }}" class="text-sm font-semibold hover:text-blue-600 transition">SME</a>
                            <a href="{{ route('banking.e') }}" class="text-sm font-semibold hover:text-blue-600 transition">e-Banking</a>
                            <a href="{{ route('site.media') }}" class="text-sm font-semibold hover:text-blue-600 transition">Media</a>
                            <a href="{{ route('site.ir') }}" class="text-sm font-semibold hover:text-blue-600 transition">Investors</a>
                            <a href="{{ route('about') }}" class="text-sm font-semibold hover:text-blue-600 transition">About Us</a>
                            <a href="{{ route('contact') }}" class="text-sm font-semibold hover:text-blue-600 transition">Contact Us</a>
                            <a href="{{ route('account.open') }}" class="inline-flex items-center px-6 py-2.5 border border-transparent text-sm font-bold rounded-full text-white bg-blue-600 hover:bg-blue-700 transition-all shadow-lg shadow-blue-200">
                                Open Account
                            </a>
                        </div>

                        <!-- Mobile menu button -->
                        <div class="flex items-center md:hidden">
                            <button @click="open = !open" class="text-slate-600 hover:text-blue-600 transition p-2">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div x-show="open" x-transition.opacity class="md:hidden bg-white border-b border-slate-100">
                    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                        <a href="{{ route('banking.personal') }}" class="block px-3 py-4 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">Personal Banking</a>
                        <a href="{{ route('banking.sme') }}" class="block px-3 py-4 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">SME Banking</a>
                        <a href="{{ route('banking.e') }}" class="block px-3 py-4 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">e-Banking</a>
                        <a href="{{ route('site.media') }}" class="block px-3 py-4 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">Media Hub</a>
                        <a href="{{ route('site.ir') }}" class="block px-3 py-4 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">Investor Relations</a>
                        <a href="{{ route('about') }}" class="block px-3 py-4 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">About Us</a>
                        <a href="{{ route('contact') }}" class="block px-3 py-4 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">Contact Us</a>
                        <a href="{{ route('account.open') }}" class="block px-3 py-4 text-base font-bold text-blue-600 bg-blue-50 rounded-lg">Open Account</a>
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
            <footer class="bg-slate-900 text-slate-400 py-24">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                        <div class="col-span-1 md:col-span-2">
                            <a href="/" class="flex items-center mb-6">
                                <img src="{{ asset('img/logo.jpg') }}" alt="Amju Unique MFB Logo" class="h-10 w-auto brightness-0 invert">
                            </a>
                            <p class="text-sm leading-relaxed max-w-sm">
                                Providing unique financial solutions tailored for your growth and stability. Join thousands of Nigerians achieving their dreams with Amju.
                            </p>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-xs">Explore</h4>
                            <ul class="space-y-4 text-sm">
                                <li><a href="{{ route('banking.personal') }}" class="hover:text-white transition">Personal Banking</a></li>
                                <li><a href="{{ route('banking.sme') }}" class="hover:text-white transition">SME Banking</a></li>
                                <li><a href="{{ route('banking.e') }}" class="hover:text-white transition">e-Banking</a></li>
                                <li><a href="{{ route('careers') }}" class="hover:text-white transition">Careers</a></li>
                                <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact Us</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-xs">Legal</h4>
                            <ul class="space-y-4 text-sm mb-8">
                                <li><a href="{{ route('privacy') }}" class="hover:text-white transition">Privacy Policy</a></li>
                                <li><a href="{{ route('terms') }}" class="hover:text-white transition">Terms of Service</a></li>
                                <li><a href="{{ route('site.media', ['type' => 'news']) }}" class="hover:text-white transition">Regulatory Reports</a></li>
                            </ul>
                            <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-xs">Mobile App</h4>
                            <div class="flex flex-col space-y-3">
                                <a href="https://apps.apple.com/us/app/amju-mfb/id1537937432" target="_blank" class="inline-flex items-center px-4 py-2 bg-white rounded-xl hover:bg-slate-100 transition border border-slate-200 group">
                                    <img src="/img/app-store.png" class="w-6 h-6 mr-3" alt="App Store">
                                    <div class="text-left">
                                        <div class="text-[10px] uppercase font-bold text-slate-500 leading-none">Download on the</div>
                                        <div class="text-sm font-black text-slate-900">App Store</div>
                                    </div>
                                </a>
                                <a href="https://play.google.com/store/apps/details?id=com.amjum" target="_blank" class="inline-flex items-center px-4 py-2 bg-white rounded-xl hover:bg-slate-100 transition border border-slate-200 group">
                                    <img src="/img/google-play.png" class="w-6 h-6 mr-3" alt="Google Play">
                                    <div class="text-left">
                                        <div class="text-[10px] uppercase font-bold text-slate-500 leading-none">Get it on</div>
                                        <div class="text-sm font-black text-slate-900">Google Play</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-16 pt-8 border-t border-slate-800 flex flex-wrap justify-between items-center gap-8 transition-all duration-500">
                        <img src="/img/cbn.png" class="h-8 w-auto invert opacity-70 hover:opacity-100 transition-opacity" alt="CBN">
                        <img src="/img/firs.png" class="h-8 w-auto invert opacity-70 hover:opacity-100 transition-opacity" alt="FIRS">
                        <div class="text-sm font-black tracking-widest text-[#60A5FA]">NEPTUNE</div>
                        <img src="/img/interswitch.png" class="h-6 w-auto invert opacity-70 hover:opacity-100 transition-opacity" alt="Interswitch">
                        <div class="text-sm font-black tracking-widest text-[#F87171]">NIBSS</div>
                        <div class="text-sm font-black tracking-tighter text-[#4ADE80]">NDIC INSURED</div>
                    </div>
                    <div class="mt-8 pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 text-xs">
                        <div class="flex flex-col md:items-start items-center space-y-2">
                            <p>&copy; {{ date('Y') }} Amju Unique Microfinance Bank Ltd. All rights reserved.</p>
                            <p class="text-slate-600">Powered by <span class="text-slate-500 font-bold">Orion Tech Enterprise</span> • <a href="mailto:oriontechng@gmail.com" class="hover:text-slate-400 transition">oriontechng@gmail.com</a></p>
                        </div>
                        <div class="flex space-x-6">
                            <a href="https://x.com/Amjuuniquemfb?s=09" target="_blank" class="hover:text-white transition">Twitter</a>
                            <a href="https://www.facebook.com/share/17YujNFH7V/" target="_blank" class="hover:text-white transition">Facebook</a>
                            <a href="https://www.instagram.com/amjuuniquemicrofinancebank?igsh=MXBwYWU3d2s0cGx6dw==" target="_blank" class="hover:text-white transition">Instagram</a>
                            <a href="https://www.tiktok.com/@amjuuniquemicrofinance?_r=1&amp;_t=ZN-92GhT2qWZRi" target="_blank" class="hover:text-white transition">TikTok</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        @livewireScripts
    </body>
</html>
