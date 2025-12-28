@extends('layouts.app')

{{-- 1. MANTIK --}}
@php
    $cityName = ucfirst($city);
    $districtName = $district ? ucfirst($district) : null;
    $displayName = $districtName ?? $cityName;
    
    $mainTitle = "$displayName Çekici & Yol Yardım";
    $fullLocation = $districtName ? "$districtName / $cityName" : $cityName;
    $metaDesc = "$fullLocation bölgesinde aracınız mı kaldı? 15 dakikada yanınızdayım.";
    
    $allDistricts = config('flex.regions.' . strtolower($city));
    if (!$allDistricts) { $allDistricts = []; }
    $otherDistricts = is_array($allDistricts) ? array_diff($allDistricts, [$district]) : [];

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'AutoRepair',
        'name' => config('flex.general.brand') . ' - ' . $mainTitle,
        'telephone' => config('flex.contact.phone_display'),
        'image' => asset('img/cekici.jpeg'),
        'areaServed' => ['@type' => 'City', 'name' => $displayName],
        'priceRange' => '₺₺',
        'description' => $metaDesc,
    ];
@endphp

@section('title', $mainTitle)
@section('meta_description', $metaDesc)

@section('content')

    {{-- STICKY MOBIL MENU (SABİT) --}}
    <div class="fixed bottom-0 left-0 w-full z-50 bg-brand-dark/95 backdrop-blur-xl border-t border-white/10 p-4 md:hidden flex gap-3 shadow-[0_-10px_40px_rgba(0,0,0,0.8)]">
        <a href="{{ config('flex.contact.phone_link') }}" class="flex-1 bg-brand-yellow text-brand-dark font-black py-3 rounded-xl text-center shadow-lg animate-pulse flex items-center justify-center gap-2">
            📞 ARA GELSİN
        </a>
        <a href="{{ config('flex.contact.whatsapp') }}" class="w-14 bg-green-600 text-white rounded-xl flex items-center justify-center shadow-lg">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.008-.57-.008-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
        </a>
    </div>

    {{-- 2. GÖRSEL ODAKLI HERO --}}
    <div class="relative min-h-[55vh] flex items-center bg-brand-dark overflow-hidden pt-24 pb-12">
        
        {{-- Arka Plan Resmi (Sağ tarafta canlı duracak) --}}
        <div class="absolute inset-0">
            <img src="{{ asset('img/cekici.jpeg') }}" class="w-full h-full object-cover opacity-60" alt="Çekici">
            {{-- Siyah Gradyan --}}
            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-brand-dark/80 to-transparent lg:bg-gradient-to-r lg:from-brand-dark lg:via-brand-dark/80 lg:to-transparent"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-2xl">
                {{-- Bölge Radar Simülasyonu (VİZUALİTE) --}}
                <div class="flex items-center gap-3 mb-6 bg-black/40 backdrop-blur-md border border-white/10 w-fit px-4 py-2 rounded-full">
                    <div class="relative w-3 h-3">
                        <span class="absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75 animate-ping"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                    </div>
                    <span class="text-green-400 font-bold text-xs uppercase tracking-widest">
                        Ekip {{ $displayName }} Bölgesinde Hazır
                    </span>
                </div>

                <h1 class="text-5xl md:text-7xl font-display font-black text-white leading-none mb-4 drop-shadow-2xl">
                    30 Dakikada <br> 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-yellow to-yellow-500">Yanındayım.</span>
                </h1>

                <p class="text-xl text-gray-300 font-medium mb-8">
                    {{ $fullLocation }}'desin ve yolda mı kaldın? <br>
                    <span class="text-white">Aracı yok, komisyon yok. Direkt beni ara.</span>
                </p>

                {{-- Masaüstü Butonları --}}
                <div class="hidden md:flex gap-4">
                    <a href="{{ config('flex.contact.phone_link') }}" class="bg-brand-yellow text-brand-dark px-8 py-4 rounded-xl font-black text-xl hover:scale-105 transition shadow-neon">
                        📞 HEMEN ARA
                    </a>
                    <a href="{{ config('flex.contact.whatsapp') }}" class="bg-white/10 backdrop-blur border border-white/20 text-white px-8 py-4 rounded-xl font-bold text-xl hover:bg-white/20 transition flex items-center gap-2">
                        WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- 3. GÖRSEL İSTATİSTİK BARI (Kelimeler yerine Sayılar) --}}
    <div class="bg-brand-surface border-y border-white/5 relative z-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-3 divide-x divide-white/5">
                <div class="py-6 text-center">
                    <div class="text-3xl font-black text-white mb-1">15-30 <span class="text-sm text-brand-yellow">Dk</span></div>
                    <div class="text-xs text-gray-500 uppercase tracking-wider">Varış</div>
                </div>
                <div class="py-6 text-center">
                    <div class="text-3xl font-black text-white mb-1">7/24</div>
                    <div class="text-xs text-gray-500 uppercase tracking-wider">Aktif</div>
                </div>
                <div class="py-6 text-center">
                    <div class="text-3xl font-black text-white mb-1">%100</div>
                    <div class="text-xs text-gray-500 uppercase tracking-wider">Güvenli</div>
                </div>
            </div>
        </div>
    </div>

    {{-- 4. NASIL ÇALIŞIR? (YAZI YOK, İKON VAR) --}}
    <section class="py-16 bg-brand-dark">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-2xl font-bold text-white">Nasıl Çalışır?</h2>
                <p class="text-gray-500 text-sm">3 adımda seni kurtarıyoruz.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                {{-- Çizgi (Desktop) --}}
                <div class="hidden md:block absolute top-12 left-0 w-full h-1 border-t-2 border-dashed border-white/10 z-0"></div>

                {{-- Adım 1 --}}
                <div class="relative z-10 text-center">
                    <div class="w-24 h-24 mx-auto bg-brand-surface border border-white/10 rounded-full flex items-center justify-center text-4xl mb-4 shadow-lg">
                        📞
                    </div>
                    <h3 class="text-white font-bold text-lg">1. Ara / Konum At</h3>
                    <p class="text-gray-400 text-sm mt-2">Beni ara veya WhatsApp'tan konumunu gönder.</p>
                </div>

                {{-- Adım 2 --}}
                <div class="relative z-10 text-center">
                    <div class="w-24 h-24 mx-auto bg-brand-surface border border-brand-yellow/30 rounded-full flex items-center justify-center text-4xl mb-4 shadow-[0_0_20px_rgba(255,200,0,0.2)]">
                        🚀
                    </div>
                    <h3 class="text-white font-bold text-lg">2. Hemen Geliyorum</h3>
                    <p class="text-gray-400 text-sm mt-2">En yakın ekibim 15-30 dakikada yanında.</p>
                </div>

                {{-- Adım 3 --}}
                <div class="relative z-10 text-center">
                    <div class="w-24 h-24 mx-auto bg-brand-surface border border-white/10 rounded-full flex items-center justify-center text-4xl mb-4 shadow-lg">
                        ✅
                    </div>
                    <h3 class="text-white font-bold text-lg">3. Sorun Çözüldü</h3>
                    <p class="text-gray-400 text-sm mt-2">Aracını güvenle istediğin yere bırakıyoruz.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 5. SAMİMİ USTA KARTI & HARİTA EFEKTİ --}}
    <section class="py-16 bg-brand-surface border-t border-white/5">
        <div class="container mx-auto px-4">
            <div class="bg-brand-dark rounded-3xl p-1 overflow-hidden shadow-2xl">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    
                    {{-- Sol: Radar/Harita Efekti --}}
                    <div class="relative bg-gray-900 min-h-[300px] flex items-center justify-center overflow-hidden">
                        {{-- Grid --}}
                        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                        
                        {{-- Radar Daireleri --}}
                        <div class="absolute w-64 h-64 border border-green-500/30 rounded-full animate-[ping_3s_linear_infinite]"></div>
                        <div class="absolute w-48 h-48 border border-green-500/50 rounded-full"></div>
                        
                        {{-- Merkez Nokta --}}
                        <div class="relative z-10 flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-500 rounded-full shadow-[0_0_20px_rgba(34,197,94,1)] animate-pulse"></div>
                            <div class="mt-4 bg-black/60 backdrop-blur px-4 py-2 rounded-lg border border-green-500/30">
                                <p class="text-green-400 font-bold text-xs">EKİP BÖLGEDE</p>
                                <p class="text-white text-sm font-bold">{{ $displayName }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- Sağ: Usta Mesajı --}}
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <h3 class="text-2xl font-display font-bold text-white mb-4">
                            "Yolda Kalmanın Ne Demek Olduğunu Biliyorum."
                        </h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            Merhaba, ben <strong class="text-white">{{ config('flex.general.brand') }}</strong>. Bu işi masa başından değil, direksiyon başından yapıyorum. Seni anlıyorum, strese girmene gerek yok.
                        </p>
                        
                        <div class="space-y-3 mb-8">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-brand-yellow/10 flex items-center justify-center text-brand-yellow">✓</div>
                                <span class="text-gray-300 text-sm">Sürpriz fiyat yok, ne konuşursak o.</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-brand-yellow/10 flex items-center justify-center text-brand-yellow">✓</div>
                                <span class="text-gray-300 text-sm">Aracına kendi aracım gibi bakarım.</span>
                            </div>
                        </div>

                        <a href="{{ config('flex.contact.phone_link') }}" class="w-full bg-white/5 border border-white/10 text-white font-bold py-4 rounded-xl hover:bg-white/10 transition text-center">
                            📞 Konuşalım, Fiyat Al
                        </a>
                    </div>

                </div>
            </div>

            {{-- Diğer Bölgeler (Etiketler) --}}
            @if(count($otherDistricts) > 0)
            <div class="mt-12 text-center">
                <p class="text-gray-500 text-xs uppercase tracking-widest mb-4">Yakındaki Diğer Noktalar</p>
                <div class="flex flex-wrap justify-center gap-2">
                    @foreach($otherDistricts as $area)
                        <a href="/cekici/{{ strtolower($city) }}/{{ $area }}" 
                           class="text-xs font-bold text-gray-500 bg-brand-dark border border-white/5 px-3 py-2 rounded-lg hover:text-brand-yellow hover:border-brand-yellow transition">
                            {{ ucfirst($area) }}
                        </a>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </section>

    {{-- SCHEMA --}}
    <script type="application/ld+json">
    @json($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
    </script>

@endsection