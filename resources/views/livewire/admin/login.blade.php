<div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8 bg-slate-50">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="flex flex-col items-center">
            <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center shadow-xl shadow-blue-600/30 mb-8">
                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <h2 class="text-3xl font-black text-slate-900 font-display text-center tracking-tight">Admin Portal</h2>
            <p class="mt-2 text-center text-sm text-slate-500">
                Secure access for Amju Bank Administrators only.
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-10 px-6 shadow-2xl shadow-slate-200/60 sm:rounded-[2rem] sm:px-10 border border-slate-100 animate-in fade-in slide-in-from-bottom-4 duration-500">
                <form wire:submit.prevent="login" class="space-y-6">
                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-bold text-slate-700 uppercase tracking-wide">
                            Email Address
                        </label>
                        <div class="mt-1">
                            <input id="email" wire:model.defer="email" type="email" required 
                                   class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none" 
                                   placeholder="admin@amjuunique.com">
                        </div>
                        @error('email') <span class="text-xs text-red-500 font-medium">{{ $message }}</span> @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="password" class="block text-sm font-bold text-slate-700 uppercase tracking-wide">
                            Password
                        </label>
                        <div class="mt-1">
                            <input id="password" wire:model.defer="password" type="password" required 
                                   class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none" 
                                   placeholder="••••••••">
                        </div>
                        @error('password') <span class="text-xs text-red-500 font-medium">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember" wire:model="remember" type="checkbox" 
                                   class="h-5 w-5 text-blue-600 focus:ring-blue-500 border-slate-300 rounded-lg">
                            <label for="remember" class="ml-3 block text-sm text-slate-600 font-medium">
                                Keep me logged in
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-bold text-blue-600 hover:text-blue-500">
                                Forgot password?
                            </a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" 
                                class="w-full flex justify-center py-4 px-4 border border-transparent rounded-2xl shadow-lg shadow-blue-600/30 text-lg font-bold text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-500/20 transition-all">
                            Sign In to Dashboard
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
