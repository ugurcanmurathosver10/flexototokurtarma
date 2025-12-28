<footer class="bg-brand-dark border-t border-white/5 pt-20 pb-10 mt-auto relative overflow-hidden">
    
    {{-- Arka Plan Efekti --}}
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-5 pointer-events-none"></div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-3xl h-1 bg-gradient-to-r from-transparent via-brand-yellow/50 to-transparent shadow-[0_0_20px_rgba(255,200,0,0.5)]"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            
            {{-- 1. Marka ve Hakkında --}}
            <div class="space-y-6">
                <a href="{{ route('home') }}" class="block">
                    <h2 class="text-3xl font-display font-black text-white tracking-tighter">
                        {{ config('flex.general.brand') }}<span class="text-brand-yellow">.</span>
                    </h2>
                </a>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Balıkesir ve çevresinde 7/24 profesyonel yol yardım, oto kurtarma ve çekici hizmetleri. Aracınız bizimle güvende.
                </p>
                <div class="flex gap-4">
                    {{-- Sosyal Medya İkonları (Temsili) --}}
                    <a href="#" class="w-10 h-10 rounded-lg bg-brand-surface border border-white/5 flex items-center justify-center text-gray-400 hover:text-brand-yellow hover:border-brand-yellow transition">IG</a>
                    <a href="#" class="w-10 h-10 rounded-lg bg-brand-surface border border-white/5 flex items-center justify-center text-gray-400 hover:text-brand-yellow hover:border-brand-yellow transition">FB</a>
                    <a href="#" class="w-10 h-10 rounded-lg bg-brand-surface border border-white/5 flex items-center justify-center text-gray-400 hover:text-brand-yellow hover:border-brand-yellow transition">TW</a>
                </div>
            </div>

            {{-- 2. Hızlı Menü --}}
            <div>
                <h3 class="text-white font-bold text-lg mb-6 border-b border-white/5 pb-2 inline-block">Hızlı Erişim</h3>
                <ul class="space-y-3">
                    @foreach(config('flex.menu') as $item)
                        @if(empty($item['is_button']))
                        <li>
                            <a href="{{ route($item['route']) }}" class="text-gray-400 hover:text-brand-yellow transition flex items-center gap-2 group">
                                <span class="w-1 h-1 bg-brand-yellow rounded-full opacity-0 group-hover:opacity-100 transition"></span>
                                {{ $item['title'] }}
                            </a>
                        </li>
                        @endif
                    @endforeach
                </ul>
            </div>

            {{-- 3. Hizmetler --}}
            <div>
                <h3 class="text-white font-bold text-lg mb-6 border-b border-white/5 pb-2 inline-block">Hizmetlerimiz</h3>
                <ul class="space-y-3">
                    @foreach(config('flex.services') as $slug => $service)
                        <li>
                            <a href="/hizmet/{{ $slug }}" class="text-gray-400 hover:text-white transition text-sm">
                                {{ $service['title'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- 4. İletişim Kutusu --}}
            <div>
                <div class="bg-brand-surface border border-white/10 p-6 rounded-2xl relative overflow-hidden group">
                    <div class="absolute inset-0 bg-brand-yellow/5 opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    
                    <h3 class="text-white font-bold mb-4 relative z-10">7/24 Destek Hattı</h3>
                    <p class="text-gray-500 text-xs mb-4 relative z-10">Acil durumlar için hattımız her zaman açıktır.</p>
                    
                    <a href="{{ config('flex.contact.phone_link') }}" class="flex items-center gap-3 text-brand-yellow font-display font-black text-2xl relative z-10 hover:text-white transition">
                        <span class="animate-pulse">📞</span>
                        {{ config('flex.contact.phone_display') }}
                    </a>
                    
                    <p class="text-gray-500 text-xs mt-4 pt-4 border-t border-white/5 relative z-10">
                        {{ config('flex.contact.address') }}
                    </p>
                </div>
            </div>

        </div>

        {{-- Alt Telif Alanı --}}
        <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-gray-500 text-sm text-center md:text-left">
                &copy; {{ date('Y') }} {{ config('flex.general.brand') }}. Tüm hakları saklıdır.
            </p>
            <div class="flex gap-6 text-sm text-gray-500">
                <a href="#" class="hover:text-white transition">Gizlilik</a>
                <a href="#" class="hover:text-white transition">Kullanım Şartları</a>
            </div>
        </div>
    </div>
</footer>