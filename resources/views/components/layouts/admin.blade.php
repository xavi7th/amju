<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Admin Dashboard | {{ config('app.name', 'Amju Unique MFB') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    </head>
    <body class="font-sans antialiased bg-slate-100 text-slate-900">
        <div class="min-h-screen flex" x-data="{ sidebarOpen: true }">
            <!-- Sidebar -->
            <aside :class="{ 'w-64': sidebarOpen, 'w-20': !sidebarOpen }" 
                   class="bg-slate-900 text-white transition-all duration-300 flex flex-col fixed inset-y-0 z-50">
                <div class="h-20 flex items-center px-6 border-b border-white/10 shrink-0">
                    <img src="{{ asset('img/logo.jpg') }}" x-show="sidebarOpen" alt="Logo" class="h-10 w-auto brightness-0 invert">
                    <img src="{{ asset('img/favicon.png') }}" x-show="!sidebarOpen" alt="Logo" class="h-8 w-8 mx-auto">
                </div>

                <nav class="flex-grow py-6 space-y-1 overflow-y-auto">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 px-6 py-3 bg-white/5 border-r-4 border-blue-500 text-white transition-all">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span x-show="sidebarOpen" class="text-sm font-medium">Dashboard</span>
                    </a>
                    <a href="{{ route('admin.users') }}" class="flex items-center space-x-3 px-6 py-3 text-slate-400 hover:text-white hover:bg-white/5 transition-all">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span x-show="sidebarOpen" class="text-sm font-medium">Manage Users</span>
                    </a>
                    <a href="{{ route('admin.testimonials') }}" class="flex items-center space-x-3 px-6 py-3 text-slate-400 hover:text-white hover:bg-white/5 transition-all">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.827-1.213L3 20l1.391-3.952A9.195 9.195 0 018 4c4.97 0 9 3.582 9 8z" />
                        </svg>
                        <span x-show="sidebarOpen" class="text-sm font-medium">Testimonials</span>
                    </a>
                    <a href="{{ route('admin.transactions') }}" class="flex items-center space-x-3 px-6 py-3 text-slate-400 hover:text-white hover:bg-white/5 transition-all">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        <span x-show="sidebarOpen" class="text-sm font-medium">Transactions</span>
                    </a>
                </nav>

                <div class="p-6 border-t border-white/10 shrink-0">
                    <button @click="sidebarOpen = !sidebarOpen" class="w-full flex items-center space-x-3 text-slate-400 hover:text-white transition">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                        </svg>
                        <span x-show="sidebarOpen" class="text-sm font-medium">Collapse</span>
                    </button>
                </div>
            </aside>

            <!-- Main Content -->
            <main :class="{ 'ml-64': sidebarOpen, 'ml-20': !sidebarOpen }" class="flex-grow transition-all duration-300">
                <!-- Header -->
                <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-8 sticky top-0 z-40">
                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('img/logo.jpg') }}" alt="Logo" class="h-8 w-auto">
                        <span class="h-6 w-px bg-slate-200"></span>
                        <h2 class="text-lg font-bold text-slate-800">Admin Dashboard</h2>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <button class="p-2 text-slate-400 hover:text-blue-600 transition relative">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
                        </button>
                        <div class="flex items-center space-x-3 pl-4 border-l border-slate-200">
                            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-700 font-bold uppercase">
                                AD
                            </div>
                            <div class="hidden sm:block">
                                <p class="text-sm font-bold text-slate-800 leading-none">Admin User</p>
                                <p class="text-xs text-slate-500 mt-1">Super Admin</p>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- Page Content -->
                <div class="p-8">
                    {{ $slot }}
                </div>
            </main>
        </div>

        @livewireScripts
    </body>
</html>
