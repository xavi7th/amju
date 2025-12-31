<div class="min-h-screen bg-slate-50 py-32">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Progress Tracker --}}
        <div class="mb-12">
            <div class="flex items-center justify-between relative">
                <div class="absolute top-1/2 left-0 w-full h-0.5 bg-slate-200 -translate-y-1/2 z-0"></div>
                <div class="absolute top-1/2 left-0 h-0.5 bg-blue-600 -translate-y-1/2 z-0 transition-all duration-500" style="width: {{ ($currentStep - 1) * 50 }}%"></div>
                
                @for ($i = 1; $i <= $totalSteps; $i++)
                    <div class="relative z-10 flex flex-col items-center">
                        <div class="w-10 h-10 rounded-full flex items-center justify-center border-2 transition-all duration-300 {{ $currentStep >= $i ? 'bg-blue-600 border-blue-600 text-white' : 'bg-white border-slate-200 text-slate-400' }}">
                            @if ($currentStep > $i)
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            @else
                                <span class="font-bold">{{ $i }}</span>
                            @endif
                        </div>
                        <span class="mt-2 text-xs font-bold uppercase tracking-wider {{ $currentStep >= $i ? 'text-blue-600' : 'text-slate-400' }}">
                            {{ $i == 1 ? 'Personal' : ($i == 2 ? 'Details' : 'Identity') }}
                        </span>
                    </div>
                @endfor
            </div>
        </div>

        <div class="bg-white rounded-[2rem] shadow-xl shadow-slate-200/60 border border-slate-100 overflow-hidden">
            <div class="p-8 md:p-12">
                @if ($currentStep == 1)
                    <div class="space-y-8 animate-in fade-in slide-in-from-bottom-4 duration-500">
                        <div>
                            <h2 class="text-3xl font-black text-slate-900 font-display">Personal Information</h2>
                            <p class="mt-2 text-slate-500">Tell us a bit about yourself to get started.</p>
                        </div>

                        <div class="grid grid-cols-1 gap-6">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700 uppercase tracking-wide">Full Name</label>
                                <input type="text" wire:model="full_name" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none" placeholder="Enter your full name">
                                @error('full_name') <span class="text-xs text-red-500 font-medium">{{ $message }}</span> @enderror
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-slate-700 uppercase tracking-wide">Email Address</label>
                                    <input type="email" wire:model="email" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none" placeholder="email@example.com">
                                    @error('email') <span class="text-xs text-red-500 font-medium">{{ $message }}</span> @enderror
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-slate-700 uppercase tracking-wide">Phone Number</label>
                                    <input type="tel" wire:model="phone" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none" placeholder="+234">
                                    @error('phone') <span class="text-xs text-red-500 font-medium">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-slate-700 uppercase tracking-wide">Gender</label>
                                    <select wire:model="gender" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none appearance-none">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    @error('gender') <span class="text-xs text-red-500 font-medium">{{ $message }}</span> @enderror
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-slate-700 uppercase tracking-wide">Date of Birth</label>
                                    <input type="date" wire:model="dob" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none">
                                    @error('dob') <span class="text-xs text-red-500 font-medium">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="pt-4">
                            <button wire:click="nextStep" class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-2xl transition-all shadow-lg shadow-blue-600/30">
                                Continue to Next Step
                            </button>
                        </div>
                    </div>
                @endif

                @if ($currentStep == 2)
                    <div class="space-y-8 animate-in fade-in slide-in-from-bottom-4 duration-500">
                        <div>
                            <h2 class="text-3xl font-black text-slate-900 font-display">Account Details</h2>
                            <p class="mt-2 text-slate-500">Almost there! We need some specific account information.</p>
                        </div>

                        <div class="space-y-6">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700 uppercase tracking-wide">Account Type</label>
                                <select wire:model="acc_type" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none appearance-none">
                                    <option value="">Select Account Type</option>
                                    <option value="savings">Savings Account</option>
                                    <option value="current">Current Account</option>
                                    <option value="sme">SME Account</option>
                                    <option value="fixed">Fixed Deposit</option>
                                </select>
                                @error('acc_type') <span class="text-xs text-red-500 font-medium">{{ $message }}</span> @enderror
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700 uppercase tracking-wide">BVN (Optional)</label>
                                <input type="text" wire:model="bvn" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none" placeholder="11-digit BVN">
                                @error('bvn') <span class="text-xs text-red-500 font-medium">{{ $message }}</span> @enderror
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700 uppercase tracking-wide">Residential Address</label>
                                <textarea wire:model="address" rows="3" class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-transparent focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all outline-none" placeholder="Enter your full address"></textarea>
                                @error('address') <span class="text-xs text-red-500 font-medium">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4 pt-4">
                            <button wire:click="previousStep" class="py-4 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold rounded-2xl transition-all">
                                Back
                            </button>
                            <button wire:click="nextStep" class="py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-2xl transition-all shadow-lg shadow-blue-600/30">
                                Next Step
                            </button>
                        </div>
                    </div>
                @endif

                @if ($currentStep == 3)
                    <div class="space-y-8 animate-in fade-in slide-in-from-bottom-4 duration-500">
                        <div>
                            <h2 class="text-3xl font-black text-slate-900 font-display">Identity Verification</h2>
                            <p class="mt-2 text-slate-500">Upload a clear passport photograph of yourself.</p>
                        </div>

                        <div class="space-y-6">
                            <div class="relative group">
                                <input type="file" wire:model="user_passport" id="passport" class="hidden">
                                <label for="passport" class="flex flex-col items-center justify-center w-full h-64 border-2 border-dashed border-slate-200 rounded-[2.5rem] bg-slate-50 hover:bg-blue-50/50 hover:border-blue-300 transition-all cursor-pointer overflow-hidden p-4 text-center">
                                    @if ($user_passport)
                                        <img src="{{ $user_passport->temporaryUrl() }}" class="h-full object-contain rounded-xl">
                                    @else
                                        <div class="p-6 bg-white rounded-full shadow-sm mb-4">
                                            <svg class="w-8 h-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                            </svg>
                                        </div>
                                        <p class="text-sm font-bold text-slate-700">Click to upload passport</p>
                                        <p class="text-xs text-slate-500 mt-2">PNG, JPG up to 2MB</p>
                                    @endif
                                </label>
                                <div wire:loading wire:target="user_passport" class="absolute inset-0 bg-white/80 backdrop-blur-sm flex items-center justify-center rounded-[2.5rem]">
                                    <div class="flex items-center space-x-2 text-blue-600">
                                        <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        <span class="font-bold">Uploading...</span>
                                    </div>
                                </div>
                            </div>
                            @error('user_passport') <span class="text-xs text-red-500 font-medium text-center block">{{ $message }}</span> @enderror
                        </div>

                        <div class="grid grid-cols-2 gap-4 pt-4">
                            <button wire:click="previousStep" class="py-4 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold rounded-2xl transition-all">
                                Back
                            </button>
                            <button wire:click="submit" class="py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-2xl transition-all shadow-lg shadow-blue-600/30">
                                Submit Application
                            </button>
                        </div>
                    </div>
                @endif

                @if ($currentStep == 4)
                    <div class="text-center py-12 space-y-8 animate-in zoom-in duration-500">
                        <div class="w-24 h-24 bg-green-100 text-green-500 rounded-full flex items-center justify-center mx-auto shadow-lg shadow-green-100/50">
                            <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        
                        <div>
                            <h2 class="text-4xl font-black text-slate-900 font-display">Congratulations!</h2>
                            <p class="mt-4 text-lg text-slate-600 leading-relaxed">{{ $successMessage }}</p>
                        </div>

                        <div class="pt-6">
                            <a href="/" class="inline-flex items-center px-8 py-4 bg-slate-900 hover:bg-slate-800 text-white font-bold rounded-2xl transition-all shadow-xl">
                                Return to Home
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
