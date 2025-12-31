```
<div class="space-y-8 animate-in fade-in duration-700">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-3xl font-black text-slate-900 tracking-tight">Testimonials</h1>
            <p class="text-slate-500 mt-1">Manage public customer success stories and feedback.</p>
        </div>
        <button class="px-6 py-4 bg-blue-600 rounded-2xl text-white font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-600/20 flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Add New Testimonial</span>
        </button>
    </div>

    @if (session()->has('message'))
        <div class="p-4 rounded-2xl bg-green-50 text-green-700 border border-green-100 font-bold text-sm animate-in slide-in-from-top-4">
            {{ session('message') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($testimonials as $testimonial)
            <div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-sm overflow-hidden hover:shadow-xl hover:shadow-slate-200/50 transition-all duration-300 flex flex-col group">
                <div class="p-8 flex-grow">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="w-16 h-16 rounded-[1.25rem] overflow-hidden bg-slate-100 border-2 border-white shadow-md">
                            @if ($testimonial->img)
                                <img src="{{ $testimonial->img }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-slate-400">
                                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                        <div>
                            <h3 class="font-black text-slate-900 leading-tight group-hover:text-blue-600 transition-colors">{{ $testimonial->name }}</h3>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mt-1">{{ $testimonial->city }}, {{ $testimonial->country }}</p>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <svg class="w-10 h-10 text-slate-50 absolute -top-4 -left-2 -z-10" fill="currentColor" viewBox="0 0 32 32">
                            <path d="M10 8v8h6v8H8V16H4V8h6zm14 0v8h6v8h-8V16h-4V8h6z" />
                        </svg>
                        <p class="text-slate-600 leading-relaxed italic">
                        "{{ $testimonial->testimonial }}"
                        </p>
                    </div>
                </div>

                <div class="px-8 py-6 bg-slate-50 border-t border-slate-100 flex items-center justify-end space-x-3">
                    <button class="p-3 text-slate-400 hover:text-blue-600 hover:bg-white rounded-[1.25rem] transition shadow-sm border border-transparent hover:border-slate-200">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </button>
                    <button onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" 
                            wire:click="deleteTestimonial({{ $testimonial->id }})" 
                            class="p-3 text-slate-400 hover:text-red-600 hover:bg-white rounded-[1.25rem] transition shadow-sm border border-transparent hover:border-slate-200">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </div>
            </div>
        @empty
            <div class="col-span-full py-20 bg-white rounded-[2.5rem] border border-slate-200 border-dashed flex flex-col items-center justify-center text-center">
                <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center mb-6 text-slate-300">
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.827-1.213L3 20l1.391-3.952A9.195 9.195 0 018 4c4.97 0 9 3.582 9 8z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800">No testimonials yet</h3>
                <p class="text-slate-500 mt-2 max-w-xs mx-auto">Click the button above to add your first customer testimonial.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-8">
        {{ $testimonials->links() }}
    </div>
</div>
```
