<header x-data="{ mobileMenuOpen: false, scrolled: false }" 
        @scroll.window="scrolled = (window.pageYOffset > 20)"
        :class="{ 'bg-brand-dark/95 shadow-lg border-b border-white/5': scrolled, 'bg-transparent border-transparent': !scrolled }"
        class="fixed top-0 w-full z-50 transition-all duration-300 backdrop-blur-sm">
    
    <div class="container mx-auto px-4 py-3 md:py-4 flex justify-between items-center">
        
        {{-- LOGO --}}
        <a href="{{ route('home') }}" class="text-2xl md:text-3xl font-display font-bold tracking-tighter hover:scale-105 transition-transform text-white relative z-50">
            FLEX<span class="text-brand-yellow drop-shadow-[0_0_15px_rgba(255,200,0,0.6)]">OTO</span>ÇEKİCİ
        </a>
        
        {{-- DESKTOP MENÜ --}}
        <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-gray-300">
            <a href="{{ route('home') }}" class="hover:text-brand-yellow transition py-2">Ana Sayfa</a>

            {{-- MEGA MENÜ BAŞLANGIÇ --}}
            <div class="group relative">
                <a href="{{ route('services') }}" class="flex items-center gap-1 py-4 hover:text-brand-yellow transition">
                    Hizmetler
                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180 text-gray-500 group-hover:text-brand-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </a>
                
                {{-- AÇILIR KUTU --}}
                <div class="absolute left-1/2 -translate-x-1/2 top-full w-[600px] invisible opacity-0 translate-y-2 group-hover:visible group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-out z-50 pt-4">
                    <div class="bg-brand-dark border border-white/10 rounded-xl shadow-[0_0_30px_rgba(0,0,0,0.5)] overflow-hidden ring-1 ring-white/5">
                        <div class="h-1 w-full bg-gradient-to-r from-brand-yellow to-yellow-600"></div>
                        <div class="p-6 grid grid-cols-2 gap-4">
                            @foreach(config('flex.services') as $key => $service)
                                <a href="{{ route('services') }}" class="flex items-center gap-4 p-3 rounded-lg hover:bg-white/5 border border-transparent hover:border-white/10 transition group/item">
                                    <div class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center text-brand-yellow group-hover/item:bg-brand-yellow group-hover/item:text-brand-dark transition shadow-neon">
                                        @if($service['icon'] == 'truck') 🚚 
                                        @elseif($service['icon'] == 'crane') 🏗️
                                        @elseif($service['icon'] == 'boat') 🛥️
                                        @elseif($service['icon'] == 'camper') 🚐
                                        @else 🚗 @endif
                                    </div>
                                    <div>
                                        <h4 class="text-white font-bold text-sm group-hover/item:text-brand-yellow">{{ $service['title'] }}</h4>
                                        <p class="text-xs text-gray-400 mt-0.5">{{ Str::limit($service['desc'], 35) }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{-- MEGA MENÜ BİTİŞ --}}

            <a href="{{ route('regions') }}" class="hover:text-brand-yellow transition py-2">Bölgeler</a>
            <a href="{{ route('about') }}" class="hover:text-brand-yellow transition py-2">Hakkımızda</a>
            <a href="{{ route('contact') }}" class="hover:text-brand-yellow transition py-2">İletişim</a>
        </nav>

        {{-- DESKTOP CTA BUTONU --}}
        <div class="hidden md:flex items-center gap-4">
            <a href="{{ config('flex.contact.phone_link') }}" class="flex items-center gap-2 bg-brand-yellow text-brand-dark px-6 py-2.5 rounded-xl font-bold hover:bg-white hover:scale-105 transition shadow-neon">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                <span>{{ config('flex.contact.phone_display') }}</span>
            </a>
        </div>

        {{-- MOBİL MENÜ BUTONU --}}
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-white p-2 rounded-lg hover:bg-white/10 transition z-50">
            <svg x-show="!mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            <svg x-show="mobileMenuOpen" class="w-8 h-8 text-brand-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
    </div>

    {{-- MOBİL MENÜ İÇERİĞİ --}}
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-5"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-5"
         class="md:hidden bg-brand-dark/95 backdrop-blur-xl border-t border-white/10 absolute w-full left-0 top-full shadow-[0_20px_40px_rgba(0,0,0,0.5)] h-[calc(100vh-70px)] overflow-y-auto">
        
        <div class="flex flex-col p-6 space-y-6">
            
            {{-- Mobil Linkler --}}
            <div class="space-y-4">
                <a href="{{ route('home') }}" class="block text-xl font-bold text-white border-b border-white/10 pb-3">🏠 Ana Sayfa</a>
                
                {{-- Mobil Hizmetler (Accordion) --}}
                <div x-data="{ servicesOpen: true }" class="border-b border-white/10 pb-3">
                    <button @click="servicesOpen = !servicesOpen" class="flex justify-between items-center w-full text-xl font-bold text-white mb-2">
                        <span>🛠️ Hizmetler</span>
                        <svg :class="{'rotate-180': servicesOpen}" class="w-5 h-5 text-brand-yellow transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    
                    <div x-show="servicesOpen" class="grid grid-cols-1 gap-2 pl-4 mt-2">
                        @foreach(config('flex.services') as $service)
                            <a href="{{ route('services') }}" class="flex items-center gap-3 text-gray-300 py-2 hover:text-brand-yellow">
                                <span class="w-1.5 h-1.5 rounded-full bg-brand-yellow"></span>
                                {{ $service['title'] }}
                            </a>
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('regions') }}" class="block text-xl font-bold text-white border-b border-white/10 pb-3">📍 Bölgeler</a>
                <a href="{{ route('about') }}" class="block text-xl font-bold text-white border-b border-white/10 pb-3">🏢 Hakkımızda</a>
                <a href="{{ route('contact') }}" class="block text-xl font-bold text-white border-b border-white/10 pb-3">📞 İletişim</a>
            </div>

            {{-- MOBİL ACİL BUTONLAR --}}
            <div class="grid grid-cols-1 gap-3 mt-4">
                <a href="{{ config('flex.contact.phone_link') }}" class="flex items-center justify-center gap-2 bg-brand-yellow text-brand-dark font-black text-lg py-4 rounded-xl shadow-lg hover:bg-white transition animate-pulse">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    HEMEN ARA
                </a>
                
                <a href="{{ config('flex.contact.whatsapp') }}" class="flex items-center justify-center gap-2 bg-[#25D366] text-white font-bold text-lg py-4 rounded-xl shadow-lg hover:bg-[#128C7E] transition">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0a12 12 0 1 0 12 12A12 12 0 0 0 12 0Zm0 22a10 10 0 1 1 10-10 10 10 0 0 1-10 10Zm5-10a5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5 5 5 0 0 1 5 5Z"/></svg>
                    WHATSAPP KONUM
                </a>
            </div>

        </div>
    </div>
</header>