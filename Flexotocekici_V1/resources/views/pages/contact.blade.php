@extends('layouts.app')

{{-- 1. MANTIK VE SEO --}}
@php
    $mainTitle = "İletişim - 7/24 Yol Yardım Hattı";
    $metaDesc = "Balıkesir Akçay oto çekici iletişim numarası. Yolda mı kaldınız? Form doldurmakla uğraşmayın, direkt bizi arayın. 15 dakikada yanınızdayız.";
    
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'ContactPage',
        'name' => $mainTitle,
        'description' => $metaDesc,
        'mainEntity' => [
            '@type' => 'AutoRepair',
            'name' => config('flex.general.brand'),
            'telephone' => config('flex.contact.phone_display'),
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Akçay',
                'addressRegion' => 'Balıkesir',
                'addressCountry' => 'TR'
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
            📞 ARA
        </a>
        <a href="{{ config('flex.contact.whatsapp') }}" class="w-16 bg-green-600 text-white rounded-xl flex items-center justify-center shadow-lg">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.008-.57-.008-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
        </a>
    </div>

    {{-- 2. HERO HEADER --}}
    <div class="relative pt-36 pb-16 bg-brand-dark border-b border-white/5 overflow-hidden">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-yellow/5 blur-[120px] rounded-full pointer-events-none"></div>

        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-5xl md:text-7xl font-display font-black text-white leading-none mb-6">
                7/24 <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-yellow to-yellow-600">Açık Hat.</span>
            </h1>
            <p class="text-xl text-gray-400 font-medium max-w-2xl mx-auto">
                Santral yok, müzik dinletmek yok. <br>
                <span class="text-white">Direkt ustayı arıyorsun, anında cevap alıyorsun.</span>
            </p>
        </div>
    </div>

    {{-- 3. İLETİŞİM KARTLARI --}}
    <section class="py-16 bg-brand-surface relative z-10">
        <div class="container mx-auto px-4 -mt-24">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                {{-- Kart 1: TELEFON --}}
                <a href="{{ config('flex.contact.phone_link') }}" class="group bg-brand-yellow p-8 rounded-3xl shadow-[0_0_40px_rgba(255,200,0,0.2)] hover:shadow-[0_0_60px_rgba(255,200,0,0.4)] hover:-translate-y-2 transition-all duration-300 relative overflow-hidden">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-white/20 rounded-full blur-xl group-hover:scale-150 transition"></div>
                    <div class="text-brand-dark mb-4 text-5xl group-hover:animate-bounce">📞</div>
                    <h3 class="text-brand-dark font-black text-2xl font-display uppercase">Hemen Ara</h3>
                    <p class="text-brand-dark/80 font-medium text-sm mb-6">Acil durumlar için en hızlı yol.</p>
                    <div class="bg-white/20 rounded-xl py-3 px-4 text-brand-dark font-black text-xl text-center backdrop-blur-sm">
                        {{ config('flex.contact.phone_display') }}
                    </div>
                </a>

                {{-- Kart 2: WHATSAPP --}}
                <a href="{{ config('flex.contact.whatsapp') }}" class="group bg-brand-dark border border-white/10 p-8 rounded-3xl hover:border-green-500/50 hover:-translate-y-2 transition-all duration-300 relative overflow-hidden">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-green-500/10 rounded-full blur-xl group-hover:bg-green-500/20 transition"></div>
                    <div class="text-green-500 mb-4">
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.008-.57-.008-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    </div>
                    <h3 class="text-white font-black text-2xl font-display uppercase">Konum At</h3>
                    <p class="text-gray-400 font-medium text-sm mb-6">WhatsApp'tan konumunu gönder.</p>
                    <div class="bg-white/5 border border-white/10 rounded-xl py-3 px-4 text-green-400 font-bold text-lg text-center">
                        WhatsApp Başlat
                    </div>
                </a>

                {{-- Kart 3: ADRES / MERKEZ --}}
                <div class="bg-brand-dark border border-white/10 p-8 rounded-3xl relative overflow-hidden group">
                    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10"></div>
                    <div class="text-gray-400 mb-4 text-5xl">📍</div>
                    <h3 class="text-white font-black text-2xl font-display uppercase">Merkez Ofis</h3>
                    <p class="text-gray-400 font-medium text-sm mb-6">Operasyon merkezimiz burası.</p>
                    <address class="not-italic text-gray-300 border-l-2 border-brand-yellow pl-4 leading-relaxed">
                        Akçay, 10300 <br> Edremit/Balıkesir <br>
                        <span class="text-brand-yellow text-sm">Türkiye</span>
                    </address>
                </div>

            </div>
        </div>
    </section>

    {{-- 4. CANLI RADAR HARİTA (Güncellenmiş Konum: Akçay) --}}
    <section class="py-16 bg-brand-dark overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                {{-- Sol: Metin --}}
                <div class="space-y-6">
                    <h2 class="text-3xl md:text-4xl font-display font-bold text-white">
                        "Neresi Olursa Olsun, <br> <span class="text-brand-yellow">Gelmem Demeyiz.</span>"
                    </h2>
                    <div class="prose prose-invert text-gray-400">
                        <p>
                            Bizim için mesafe veya saat fark etmez. Akçay Sahili'nde de olsan, Kazdağları yolunda da olsan sistem aynı işler:
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2"><span class="text-brand-yellow">✓</span> Telefonu açarız.</li>
                            <li class="flex items-center gap-2"><span class="text-brand-yellow">✓</span> Fiyatı konuşuruz.</li>
                            <li class="flex items-center gap-2"><span class="text-brand-yellow">✓</span> Yola çıkarız.</li>
                        </ul>
                        <div class="flex items-center gap-4 mt-6">
                            <a href="https://maps.app.goo.gl/..." target="_blank" class="text-brand-yellow font-bold hover:underline flex items-center gap-2">
                                📍 Google Haritalar'da Aç
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Sağ: RADAR MAP --}}
                <div class="relative h-[400px] bg-gray-900 rounded-3xl border border-white/10 overflow-hidden shadow-2xl group">
                    
                    {{-- 1. Google Maps Iframe (Karanlık Mod Efektli - Akçay Konumu) --}}
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8865.701271823229!2d26.925132724012247!3d39.588365179248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b0b88db755b537%3A0x1a335fee204d224e!2zU2FyxLFrxLF6LCBBa8OnYXkgT3RvZ2FyxLEsIDEwMzAwIEVkcmVtaXQvQmFsxLFrZXNpcg!5e0!3m2!1str!2str!4v1766882445252!5m2!1str!2str" 
                        width="100%" 
                        height="100%" 
                        style="border:0; filter: grayscale(100%) invert(92%) contrast(83%);" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="absolute inset-0 w-full h-full opacity-60 group-hover:opacity-100 transition duration-700">
                    </iframe>
                    
                    {{-- 2. Radar Animasyonları --}}
                    <div class="absolute inset-0 pointer-events-none flex items-center justify-center">
                        <div class="absolute w-[500px] h-[500px] border border-brand-yellow/30 rounded-full animate-[spin_10s_linear_infinite] opacity-50"></div>
                        <div class="absolute w-[350px] h-[350px] border border-brand-yellow/40 rounded-full opacity-60"></div>
                        <div class="absolute w-full h-1 bg-brand-yellow/20 top-0 animate-[scan_3s_linear_infinite] shadow-[0_0_20px_rgba(255,200,0,0.5)]"></div>
                    </div>
                    
                    {{-- 3. Merkez Nokta (Akçay) --}}
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <div class="relative flex flex-col items-center">
                            <div class="w-4 h-4 bg-brand-yellow rounded-full shadow-[0_0_30px_rgba(255,200,0,1)] animate-ping absolute"></div>
                            <div class="w-4 h-4 bg-brand-yellow rounded-full shadow-[0_0_30px_rgba(255,200,0,1)] relative z-10"></div>
                            
                            <div class="mt-4 bg-black/80 backdrop-blur px-4 py-2 rounded-lg border border-brand-yellow/50 shadow-xl">
                                <p class="text-brand-yellow font-bold text-xs tracking-wider">AKÇAY MERKEZ</p>
                                <p class="text-white text-[10px] font-bold">EKİPLER HAZIR</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- SCHEMA --}}
    <script type="application/ld+json">
    @json($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
    </script>

@endsection