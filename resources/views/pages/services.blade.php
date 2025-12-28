@php
    // 1. Verileri flex.php config dosyasından çekiyoruz
    $services = config('flex.services'); 
    $contact  = config('flex.contact');
    
    // 2. İkon Eşleştirme (flex.php'deki isimleri FontAwesome sınıfına çeviriyoruz)
    $iconMap = [
        'truck'   => 'fa-truck',           // Oto Çekici
        'crane'   => 'fa-truck-pickup',    // Oto Kurtarma (Vinçli)
        'trailer' => 'fa-truck-moving',    // Çoklu Taşıma
        'camper'  => 'fa-caravan',         // Karavan
        'boat'    => 'fa-ship'             // Tekne
    ];
@endphp

{{-- ======================================================= --}}
{{-- HTML KISMI                                              --}}
{{-- ======================================================= --}}

<div class="container">
    
    <div class="services-wrapper">
        @foreach($services as $key => $service)
            {{-- İkonu belirle, eğer listede yoksa varsayılan olarak 'check' koy --}}
            @php $iconClass = $iconMap[$service['icon']] ?? 'fa-check'; @endphp

            <div class="service-box" onclick="modalAc('{{ $key }}')">
                <div class="icon-area">
                    <i class="fas {{ $iconClass }}"></i>
                </div>
                <h3 class="service-title">{{ $service['title'] }}</h3>
                <p class="service-desc">{{ $service['desc'] }}</p>
                <button class="btn-detay">Detayları Gör</button>
            </div>

            <div id="modal-{{ $key }}" class="custom-modal-overlay" onclick="modalKapatDis(event, '{{ $key }}')">
                <div class="custom-modal-content">
                    
                    <span class="close-modal" onclick="modalKapat('{{ $key }}')">&times;</span>
                    
                    <div class="modal-header">
                        <i class="fas {{ $iconClass }}" style="color:#d32f2f; margin-right:10px;"></i>
                        <h3>{{ $service['title'] }}</h3>
                    </div>
                    
                    <hr>
                    
                    <div class="modal-body-text">
                        <p><strong>{{ $service['desc'] }}</strong></p>
                        <br>
                        <p>
                            Balıkesir, Edremit ve çevre bölgelerde <strong>{{ $service['title'] }}</strong> 
                            ihtiyaçlarınızda Flex Oto Kurtarma güvencesiyle yanınızdayız. 
                            Uzman ekibimiz ve donanımlı araçlarımızla 7/24 hizmet veriyoruz.
                        </p>
                        <ul style="margin-top:10px; list-style: circle; padding-left:20px; color:#555;">
                            <li>7/24 Kesintisiz Hizmet</li>
                            <li>Sigortalı ve Güvenli Taşıma</li>
                            <li>Uygun Fiyat Garantisi</li>
                        </ul>
                    </div>
                    
                    <div class="modal-footer">
                        <a href="{{ $contact['phone_link'] }}" class="btn-iletisim">
                            <i class="fas fa-phone-alt"></i> Hemen Ara: {{ $contact['phone_display'] }}
                        </a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

</div>

{{-- ======================================================= --}}
{{-- CSS (STİLLER)                                           --}}
{{-- ======================================================= --}}
<style>
    /* Hizmetleri yan yana dizen esnek yapı */
    .services-wrapper {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        justify-content: center;
        padding: 40px 0;
    }

    /* Hizmet Kartı Görünümü */
    .service-box {
        background: #fff;
        border: 1px solid #e0e0e0; /* Hafif gri kenarlık */
        border-radius: 10px;
        width: 300px; 
        padding: 30px 20px;
        text-align: center;
        cursor: pointer;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    }

    .service-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        border-color: #d32f2f; /* Vurgu rengi (Kırmızımsı) */
    }

    .icon-area {
        font-size: 40px;
        color: #d32f2f;
        margin-bottom: 15px;
    }

    .service-title {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
    }

    .service-desc {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 20px;
    }

    .btn-detay {
        background: #f1f1f1;
        border: none;
        padding: 8px 16px;
        border-radius: 20px;
        color: #333;
        font-weight: 600;
        cursor: pointer;
        transition: 0.2s;
    }
    .service-box:hover .btn-detay {
        background: #d32f2f;
        color: #fff;
    }

    /* --- MODAL (AÇILIR PENCERE) CSS --- */
    .custom-modal-overlay {
        display: none; /* Varsayılan gizli */
        position: fixed;
        z-index: 10000; /* En üstte durması için yüksek sayı */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.7); /* Arka plan karartma */
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(3px); /* Arka planı hafif bulanıklaştır */
    }

    .custom-modal-content {
        background-color: #fff;
        padding: 30px;
        border-radius: 12px;
        width: 90%;
        max-width: 550px;
        position: relative;
        text-align: left;
        box-shadow: 0 20px 50px rgba(0,0,0,0.3);
        animation: modalFadeIn 0.3s;
    }

    .close-modal {
        position: absolute;
        top: 15px;
        right: 20px;
        font-size: 30px;
        font-weight: bold;
        color: #aaa;
        cursor: pointer;
        transition: 0.2s;
        line-height: 1;
    }
    .close-modal:hover { color: #000; }

    .modal-header {
        display: flex;
        align-items: center;
    }
    .modal-header h3 { margin: 0; color: #222; }

    .modal-body-text {
        font-size: 1rem;
        line-height: 1.6;
        color: #444;
        margin: 20px 0;
    }

    .btn-iletisim {
        display: block;
        background: #2ecc71; /* Yeşil arama butonu */
        color: #fff;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        border-radius: 8px;
        font-weight: bold;
        font-size: 1.1rem;
        transition: 0.2s;
    }
    .btn-iletisim:hover { background: #27ae60; }

    @keyframes modalFadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

{{-- ======================================================= --}}
{{-- JAVASCRIPT                                              --}}
{{-- ======================================================= --}}
<script>
    function modalAc(key) {
        document.getElementById('modal-' + key).style.display = 'flex';
        document.body.style.overflow = 'hidden'; // Sayfayı kilitle (arkası kaymasın)
    }

    function modalKapat(key) {
        document.getElementById('modal-' + key).style.display = 'none';
        document.body.style.overflow = 'auto'; // Sayfayı serbest bırak
    }

    function modalKapatDis(e, key) {
        // Eğer tıklanan yer gri alan ise kapat (içeriğe tıklayınca kapanmasın)
        if (e.target.id === 'modal-' + key) {
            modalKapat(key);
        }
    }
    
    // ESC tuşuna basınca hepsini kapat
    document.addEventListener('keydown', function(event) {
        if (event.key === "Escape") {
            const modals = document.querySelectorAll('.custom-modal-overlay');
            modals.forEach(el => el.style.display = 'none');
            document.body.style.overflow = 'auto';
        }
    });
</script>