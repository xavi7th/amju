<div class="mt-20">
    <!-- Breadcrumb/Header -->
    <div class="bg-slate-900 border-b border-white/5 py-12">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-black text-white mb-4">Join Our <span class="text-amju-primary">Team</span></h1>
            <nav class="flex text-sm font-bold text-slate-400 uppercase tracking-widest">
                <a href="{{ route('home') }}" class="hover:text-amju-primary transition">Home</a>
                <span class="mx-3">/</span>
                <a href="{{ route('careers') }}" class="{{ $type === 'main' ? 'text-amju-primary' : 'hover:text-amju-primary transition' }}">Careers</a>
                @if($type !== 'main')
                    <span class="mx-3">/</span>
                    <span class="text-amju-primary uppercase">{{ $type }}</span>
                @endif
            </nav>
        </div>
    </div>

    @if($type === 'main')
        <!-- Careers Landing Page -->
        <section class="py-24 bg-white overflow-hidden">
            <div class="container mx-auto px-6">
                <div class="flex flex-col lg:flex-row items-center gap-16">
                    <div class="lg:w-1/2">
                        <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-8 font-display">Take a Job Opportunity of a <span class="text-amju-primary">Lifetime.</span></h2>
                        <p class="text-slate-500 text-xl leading-relaxed mb-12">We cherish active employees willing to assist customers as they navigate the complexities of the finance sector. If you are enthusiastic about banking and ready to make impactful decisions, we want to hear from you.</p>
                        
                        <div class="flex flex-col sm:flex-row gap-6">
                            <a href="{{ route('careers.apply', ['type' => 'apply']) }}" class="inline-flex items-center justify-center px-10 py-5 bg-amju-primary text-white font-black text-lg rounded-2xl hover:bg-amju-dark transition shadow-2xl shadow-amju-primary/20">
                                Submit Your CV
                            </a>
                            <a href="{{ route('about.us', ['type' => 'our-branches']) }}" class="inline-flex items-center justify-center px-10 py-5 border-2 border-slate-200 text-slate-900 font-black text-lg rounded-2xl hover:bg-slate-50 transition">
                                Find a Branch
                            </a>
                        </div>
                    </div>
                    <div class="lg:w-1/2 relative">
                        <!-- Hero Section -->
                        <div class="relative h-[500px] flex items-center justify-center overflow-hidden rounded-[4rem] rotate-3 hover:rotate-0 transition-transform duration-700 shadow-2xl">
                            <div class="absolute inset-0">
                                <img src="{{ asset('img/banners/careers.jpg') }}" class="w-full h-full object-cover" alt="Careers">
                                <div class="absolute inset-0 bg-slate-900/70"></div>
                            </div>
                        </div>
                        <!-- Floating Stats -->
                        <div class="absolute -bottom-10 -left-10 bg-white p-8 rounded-[2rem] shadow-xl border border-slate-100">
                            <div class="text-3xl font-black text-amju-primary">100+</div>
                            <div class="text-sm font-bold text-slate-400 uppercase tracking-widest mt-1">Professionals</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Work Ethics -->
        <section class="py-24 bg-slate-50 border-y border-slate-100">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-20">
                    <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-6">The Best In <span class="text-amju-primary">Career Development</span></h2>
                    <p class="text-slate-500 text-lg">Amju Unique Micro Finance Bank prides herself on the strong work ethics of her staff who are diligent, reliable, hardworking and committed.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach([
                        ['title' => 'Integrity', 'desc' => 'We continuously strive to uphold the highest ethical standards whilst delivering excellent service.'],
                        ['title' => 'Professionalism', 'desc' => 'We adhere to the rules and regulations of the banking profession with a positive and creative attitude.'],
                        ['title' => 'Transparency', 'desc' => 'Our business practices and policies are formulated to engender public trust and confidence.'],
                        ['title' => 'Loyalty', 'desc' => 'We are committed to providing the best products that enhance both customer and staff growth.'],
                        ['title' => 'Excellent Service', 'desc' => 'We continuously deliver exceptional services which ensures remarkable customer satisfaction.'],
                        ['title' => 'Corporate Governance', 'desc' => 'Rigorous processes and policies designed to exceed stakeholders expectations.'],
                    ] as $ethic)
                        <div class="p-10 bg-white rounded-[3rem] border border-slate-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">
                            <div class="w-12 h-12 bg-amju-primary/10 rounded-xl flex items-center justify-center mb-8 group-hover:bg-amju-primary group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
                            </div>
                            <h4 class="text-xl font-black text-slate-900 mb-4">{{ $ethic['title'] }}</h4>
                            <p class="text-slate-500 leading-relaxed">{{ $ethic['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-24 bg-slate-900 overflow-hidden relative">
            <div class="container mx-auto px-6 text-center">
                <h3 class="text-3xl md:text-5xl font-black text-white mb-8">Ready to <span class="text-amju-primary">Scale New Heights?</span></h3>
                <p class="text-slate-400 text-xl max-w-2xl mx-auto mb-12">Submit your resume today and let's explore how you can contribute to our success story.</p>
                <a href="{{ route('careers.apply', ['type' => 'apply']) }}" class="inline-flex items-center px-12 py-6 bg-amju-primary text-white font-black text-xl rounded-2xl hover:bg-amju-dark transition shadow-2xl shadow-amju-primary/40">
                    Apply Now
                </a>
            </div>
        </section>
    @else
        <!-- Resume Submission Portal -->
        <section class="py-24 bg-white">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto">
                    <div class="bg-slate-50 rounded-[3rem] border border-slate-100 overflow-hidden">
                        <div class="p-12 md:p-16">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-8 mb-12 pb-12 border-b border-slate-200">
                                <div>
                                    <h2 class="text-3xl font-black text-slate-900 mb-2 font-display">Resume <span class="text-amju-primary">Portal</span></h2>
                                    <p class="text-slate-500">Fill out the form below to submit your application.</p>
                                </div>
                                @if (session()->has('success'))
                                    <div class="px-6 py-4 bg-green-50 text-green-700 rounded-2xl border border-green-100 font-bold flex items-center">
                                        <svg class="w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>

                            <form wire:submit.prevent="submit" class="space-y-8">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div class="space-y-2">
                                        <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-4">Full Name</label>
                                        <input type="text" wire:model="fullName" placeholder="Enter your full name" class="w-full px-8 py-4 bg-white border border-slate-200 rounded-2xl focus:ring-4 focus:ring-amju-primary/20 focus:border-amju-primary transition-all outline-none font-bold text-slate-700">
                                        @error('fullName') <span class="text-red-500 text-xs font-bold ml-4">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="space-y-2">
                                        <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-4">Email Address</label>
                                        <input type="email" wire:model="email" placeholder="email@example.com" class="w-full px-8 py-4 bg-white border border-slate-200 rounded-2xl focus:ring-4 focus:ring-amju-primary/20 focus:border-amju-primary transition-all outline-none font-bold text-slate-700">
                                        @error('email') <span class="text-red-500 text-xs font-bold ml-4">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div class="space-y-2">
                                        <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-4">Phone Number</label>
                                        <input type="text" wire:model="phone" placeholder="+234 ..." class="w-full px-8 py-4 bg-white border border-slate-200 rounded-2xl focus:ring-4 focus:ring-amju-primary/20 focus:border-amju-primary transition-all outline-none font-bold text-slate-700">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-4">Position Applied For</label>
                                        <select wire:model="position" class="w-full px-8 py-4 bg-white border border-slate-200 rounded-2xl focus:ring-4 focus:ring-amju-primary/20 focus:border-amju-primary transition-all outline-none font-bold text-slate-700 appearance-none">
                                            <option value="">Select a general role</option>
                                            <option value="Relationship Manager">Relationship Manager</option>
                                            <option value="Customer Service">Customer Service</option>
                                            <option value="Operation Staff">Operation Staff</option>
                                            <option value="Internal Auditor">Internal Auditor</option>
                                            <option value="Marketer">Marketer</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        @error('position') <span class="text-red-500 text-xs font-bold ml-4">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-4">Upload Resume (PDF/DOC)</label>
                                    <div class="relative group">
                                        <div class="absolute inset-0 bg-amju-primary rounded-2xl opacity-0 group-hover:opacity-5 transition-opacity pointer-events-none"></div>
                                        <input type="file" wire:model="resume" class="absolute inset-0 opacity-0 cursor-pointer z-10">
                                        <div class="w-full px-8 py-10 bg-white border-2 border-dashed border-slate-200 rounded-2xl flex flex-col items-center justify-center text-slate-400 transition-all group-hover:border-amju-primary/50">
                                            @if($resume)
                                                <svg class="w-12 h-12 text-amju-primary mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                                <span class="text-amju-primary font-bold">{{ $resume->getClientOriginalName() }}</span>
                                            @else
                                                <svg class="w-12 h-12 mb-4 opacity-20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" /></svg>
                                                <span class="font-bold">Click or drag your CV here</span>
                                                <span class="text-xs mt-2 uppercase tracking-widest">Max size: 5MB</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div wire:loading wire:target="resume" class="text-amju-primary text-xs font-bold ml-4 italic px-2 py-1 bg-amju-primary/10 rounded">Uploading...</div>
                                    @error('resume') <span class="text-red-500 text-xs font-bold ml-4">{{ $message }}</span> @enderror
                                </div>

                                <div class="space-y-2">
                                    <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-4">Cover Letter / Note</label>
                                    <textarea wire:model="message" rows="4" placeholder="Tell us about yourself..." class="w-full px-8 py-4 bg-white border border-slate-200 rounded-2xl focus:ring-4 focus:ring-amju-primary/20 focus:border-amju-primary transition-all outline-none font-bold text-slate-700"></textarea>
                                </div>

                                <div class="pt-8">
                                    <button type="submit" wire:loading.attr="disabled" class="w-full py-6 bg-amju-primary text-white font-black text-xl rounded-2xl hover:bg-amju-dark transition shadow-2xl shadow-amju-primary/40 flex items-center justify-center disabled:opacity-50">
                                        <span wire:loading.remove>Submit Application</span>
                                        <span wire:loading><svg class="animate-spin h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
