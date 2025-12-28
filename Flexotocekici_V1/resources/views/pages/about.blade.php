@extends('layouts.app')

{{-- 1. MANTIK VE SEO --}}
@php
    $mainTitle = "Hakkımızda - Biz Kimiz? | " . config('flex.general.brand');
    $metaDesc = "Balıkesir ve Edremit bölgesinin en köklü oto kurtarma firması. 10 yılı aşkın tecrübe, samimi esnaf kültürü ve profesyonel ekipmanlarla hizmetinizdeyiz.";
    
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'AboutPage',
        'name' => $mainTitle,
        'description' => $metaDesc,
        'publisher' => [
            '@type' => 'Organization',
            'name' => config('flex.general.brand'),
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('img/cekici.jpeg')
            ]
        ]
    ];
@endphp

@section('title', $mainTitle)
@section('meta_description', $metaDesc)

@section('content')

    {{-- STICKY MOBIL BUTTONS (SABİT ALT BAR) --}}
    <div class="fixed bottom-0 left-0 w-full z-50 bg-brand-dark/95 backdrop-blur-xl border-t border-white/10 p-4 md:hidden flex gap-3 shadow-[0_-10px_40px_rgba(0,0,0,0.8)]">
        <a href="{{ config('flex.contact.phone_link') }}" class="flex-1 bg-brand-yellow text-brand-dark font-black py-3 rounded-xl text-center shadow-lg animate-pulse flex items-center justify-center gap-2">
            📞 HEMEN ARA
        </a>
        <a href="{{ config('flex.contact.whatsapp') }}" class="w-16 bg-green-600 text-white rounded-xl flex items-center justify-center shadow-lg">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.008-.57-.008-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
        </a>
    </div>

    {{-- 2. HERO HEADER (Basit & Güçlü) --}}
    <div class="relative pt-32 pb-20 bg-brand-dark border-b border-white/5 overflow-hidden">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-display font-black text-white leading-tight mb-6">
                Biz Sadece Çekici Değil, <br> 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-yellow to-yellow-600">Yol Arkadaşıyız.</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-400 font-medium max-w-3xl mx-auto">
                Bizi aradığınızda prosedürlerle uğraşmazsınız. <br>
                Telefonun ucunda derdinizi anlayan, bölgeyi bilen ve anında yola çıkan bir ekip bulursunuz.
            </p>
        </div>
    </div>

    {{-- 3. HİKAYEMİZ (Görsel Odaklı) --}}
    <section class="py-16 bg-brand-dark relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                {{-- Sol: Çekici Görseli (Maskeli) --}}
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-brand-yellow to-yellow-600 rounded-3xl blur opacity-20 group-hover:opacity-40 transition duration-1000"></div>
                    <div class="relative rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
                        {{-- Resim --}}
                        <img src="{{ asset('img/cekici.jpeg') }}" alt="Flex Oto Kurtarma" class="w-full h-[400px] object-cover transform group-hover:scale-105 transition duration-700">
                        {{-- Üzerindeki Gölge --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-transparent to-transparent opacity-80"></div>
                        
                        {{-- Resim Üzeri Yazı --}}
                        <div class="absolute bottom-6 left-6 right-6">
                            <div class="bg-black/60 backdrop-blur-md p-4 rounded-xl border border-white/10">
                                <p class="text-brand-yellow font-bold text-xs uppercase tracking-widest mb-1">Tecrübe</p>
                                <p class="text-white font-bold text-lg">"10 yıldır bu yolları arşınlıyoruz."</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sağ: Samimi Metin --}}
                <div class="space-y-6">
                    <h2 class="text-3xl font-display font-bold text-white">
                        Merhaba, Ben <span class="text-brand-yellow">{{ config('flex.general.brand') }}</span>.
                    </h2>
                    <div class="prose prose-invert text-gray-400">
                        <p>
                            Bu işe başladığımızda tek bir amacımız vardı: <strong>"Yolda kalan insanı mağdur etmemek."</strong> 
                        </p>
                        <p>
                            O günden beri Balıkesir'in, Edremit'in, Akçay'ın her sokağına, her virajına girdik çıktık. Kimi zaman tatili zehir olmak üzere olan bir aileyi otele bıraktık, kimi zaman işine yetişmeye çalışan bir ustayı sanayiye yetiştirdik.
                        </p>
                        <p>
                            Bizim için olay sadece "aracı yükle götür" değil. O stresli anda size bir dost gibi yaklaşıp, "Merak etme, hallederiz" diyebilmektir. 
                        </p>
                        <ul class="space-y-2 mt-4">
                            <li class="flex items-center gap-2 text-white"><span class="text-brand-yellow">✓</span> Resmi ve belgeli taşımacılık.</li>
                            <li class="flex items-center gap-2 text-white"><span class="text-brand-yellow">✓</span> Sigortalı yükleme/indirme.</li>
                            <li class="flex items-center gap-2 text-white"><span class="text-brand-yellow">✓</span> Esnaf sözü, sabit fiyat.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- 4. KARTLARLA MİSYON VİZYON (Modern) --}}
    <section class="py-16 bg-brand-surface border-t border-white/5">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                {{-- Kart 1: Ne Yapıyoruz? --}}
                <div class="bg-brand-dark p-8 rounded-3xl border border-white/5 hover:border-brand-yellow/30 transition duration-300 group shadow-lg">
                    <div class="w-14 h-14 bg-brand-yellow/10 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition">
                        🛠️
                    </div>
                    <h3 class="text-white font-bold text-xl mb-3">Ne Yapıyoruz?</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Aracınız bozulduğunda, kaza yaptığında veya yakıtı bittiğinde; en hızlı şekilde yanınıza gelip sizi güvenli bölgeye veya servise ulaştırıyoruz.
                    </p>
                </div>

                {{-- Kart 2: Nasıl Yapıyoruz? --}}
                <div class="bg-brand-dark p-8 rounded-3xl border border-white/5 hover:border-brand-yellow/30 transition duration-300 group shadow-lg">
                    <div class="w-14 h-14 bg-brand-yellow/10 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition">
                        🦺
                    </div>
                    <h3 class="text-white font-bold text-xl mb-3">Nasıl Yapıyoruz?</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Son model kayar kasa araçlarımız, profesyonel ekipmanlarımız ve iş güvenliği kurallarına %100 uyarak. Aracınıza en ufak zarar gelmeden taşıyoruz.
                    </p>
                </div>

                {{-- Kart 3: Hedefimiz Ne? --}}
                <div class="bg-brand-dark p-8 rounded-3xl border border-white/5 hover:border-brand-yellow/30 transition duration-300 group shadow-lg">
                    <div class="w-14 h-14 bg-brand-yellow/10 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition">
                        🎯
                    </div>
                    <h3 class="text-white font-bold text-xl mb-3">Hedefimiz Ne?</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Bölgenin en güvenilir, en hızlı ve en samimi yol yardım markası olmak. Sadece aradığınızda değil, her zaman aklınızdaki ilk isim olmak.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- 5. SAYILARLA BİZ (İstatistik Barı) --}}
    <section class="py-12 bg-brand-dark border-t border-white/5">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <p class="text-4xl font-black text-white mb-2">10+</p>
                    <p class="text-xs text-brand-yellow uppercase tracking-widest">Yıllık Tecrübe</p>
                </div>
                <div class="text-center">
                    <p class="text-4xl font-black text-white mb-2">1000+</p>
                    <p class="text-xs text-brand-yellow uppercase tracking-widest">Taşınan Araç</p>
                </div>
                <div class="text-center">
                    <p class="text-4xl font-black text-white mb-2">15</p>
                    <p class="text-xs text-brand-yellow uppercase tracking-widest">Dakika Varış</p>
                </div>
                <div class="text-center">
                    <p class="text-4xl font-black text-white mb-2">7/24</p>
                    <p class="text-xs text-brand-yellow uppercase tracking-widest">Aktif Hizmet</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 6. CTA (Harekete Geçirici) --}}
    <section class="py-20 bg-brand-yellow relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10 mix-blend-multiply"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-black text-brand-dark mb-6">
                Tanıştığımıza Memnun Olduk. <br> Yolda Kalırsan Biz Buradayız.
            </h2>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ config('flex.contact.phone_link') }}" class="bg-brand-dark text-white px-8 py-4 rounded-xl font-bold text-xl hover:scale-105 transition shadow-2xl">
                    📞 Hemen Ara
                </a>
                <a href="{{ config('flex.contact.whatsapp') }}" class="bg-white text-brand-dark border border-brand-dark px-8 py-4 rounded-xl font-bold text-xl hover:bg-gray-100 transition shadow-xl">
                    WhatsApp
                </a>
            </div>
        </div>
    </section>

    {{-- SCHEMA --}}
    <script type="application/ld+json">
    @json($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
    </script>

@endsection