<section class="py-24 bg-gray-900">
    <div class="container mx-auto px-4 flex flex-col lg:flex-row items-center gap-16">
        <div class="lg:w-1/2 relative">
            <div class="bg-gray-800 rounded-2xl h-[400px] w-full flex items-center justify-center border border-white/5 overflow-hidden">
                 <img src="https://images.unsplash.com/photo-1562920616-0b6070622a57?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover opacity-50" alt="Hakkımızda">
            </div>
            <div class="absolute -bottom-6 -right-6 bg-brand-yellow text-brand-dark p-8 rounded-2xl shadow-neon hidden md:block">
                <p class="text-5xl font-black font-display">15+</p>
                <p class="text-sm font-bold uppercase tracking-wider mt-1">Yıllık Tecrübe</p>
            </div>
        </div>
        <div class="lg:w-1/2">
            <h2 class="text-brand-yellow font-bold uppercase tracking-widest mb-3 text-sm">Biz Kimiz?</h2>
            <h3 class="text-3xl md:text-4xl font-display font-black text-white mb-6">Yol Yardımında Güvenin Adresi</h3>
            <p class="text-gray-400 leading-relaxed mb-8">
                Flex Oto Kurtarma olarak, Balıkesir ve çevresinde yolda kalan sürücülere profesyonel çözümler sunuyoruz. 
                Sadece aracınızı değil, güveninizi de taşıyoruz. Modern araç filomuzla 7/24 hizmetinizdeyiz.
            </p>
            <ul class="space-y-4 mb-8">
                <li class="flex items-center gap-3">
                    <span class="w-6 h-6 rounded-full bg-brand-yellow flex items-center justify-center text-brand-dark font-bold text-sm">✓</span>
                    <span class="font-medium text-gray-300">Geniş Araç Filosu</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-6 h-6 rounded-full bg-brand-yellow flex items-center justify-center text-brand-dark font-bold text-sm">✓</span>
                    <span class="font-medium text-gray-300">Sabit Fiyat Garantisi</span>
                </li>
            </ul>
            <a href="{{ route('about') }}" class="text-brand-yellow font-bold hover:text-white transition flex items-center gap-2">
                Daha Fazla Oku <span class="text-xl">→</span>
            </a>
        </div>
    </div>
</section>