<?php

return [
    // 1. GENEL AYARLAR & İLETİŞİM
    'general' => [
        'brand' => 'FLEX OTO',
        'site_name' => 'Flex Oto Kurtarma',
    ],

    'contact' => [
        'phone_display' => '0531 692 06 02',
        'phone_link' => 'tel:+905316920602',
        'whatsapp' => 'https://wa.me/905316920602',
        'address' => 'Balıkesir / Edremit Bölgesi',
        'email' => 'info@flexoto.com',
    ],

    // 2. SEO AYARLARI
    'seo' => [
        'meta_title' => 'Flex Oto Kurtarma - 7/24 En Yakın Çekici',
        'meta_desc' => 'Yolda mı kaldınız? Balıkesir ve Edremit bölgesinde 15 dakikada yanınızdayız.',
        'meta_keywords' => 'oto çekici, yol yardım, kurtarıcı, en yakın çekici, balıkesir çekici',
    ],

    // 3. MENÜ YAPISI (Rotayı Buradan Yönetiyoruz)
    'menu' => [
        ['title' => 'Anasayfa', 'route' => 'home'],
        ['title' => 'Hizmetler', 'route' => 'services'],
        ['title' => 'Bölgeler', 'route' => 'regions'],
        ['title' => 'Fiyatlar', 'route' => 'pricing'],
        ['title' => 'Hakkımızda', 'route' => 'about'],
        ['title' => 'İletişim', 'route' => 'contact', 'is_button' => true],
    ],

    // 4. HİZMETLER VERİSİ
    'services' => [
        'oto-cekici' => [
            'title' => 'Oto Çekici', 
            'icon' => 'truck', 
            'desc' => 'Binek ve ticari araçlarınız için 7/24 güvenli taşıma hizmeti.'
        ],
        'oto-kurtarma' => [
            'title' => 'Oto Kurtarma', 
            'icon' => 'crane', 
            'desc' => 'Kaza, şarampol veya zorlu durumlar için vinçli kurtarma.'
        ],
        'coklu-arac-tasima' => [
            'title' => 'Çoklu Araç Çekimi', 
            'icon' => 'trailer', 
            'desc' => 'Şehirler arası filo taşımacılığı ve toplu araç transferi.'
        ],
        'karavan-tasima' => [
            'title' => 'Karavan Çekme', 
            'icon' => 'camper', 
            'desc' => 'Çekme karavan veya tiny house için özel aparatlı güvenli nakliye.'
        ],
        'tekne-tasima' => [
            'title' => 'Tekne Çekme', 
            'icon' => 'boat', 
            'desc' => 'Tekne ve yatlarınız için römorklu profesyonel taşıma hizmeti.'
        ],
    ],

    // 5. FİYAT LİSTESİ VERİSİ
    'prices' => [
        ['service' => 'Şehir İçi Çekici (0-10 km)', 'price' => '800 ₺\'den başlar'],
        ['service' => 'Akü Takviye', 'price' => '400 ₺'],
        ['service' => 'Lastik Değişimi', 'price' => '500 ₺'],
        ['service' => 'Şehirler Arası Taşıma', 'price' => 'Km Başı 30 ₺'],
    ],

    // 6. HİZMET BÖLGELERİ VERİSİ
    'regions' => [
        'balikesir' => [
            'merkez', 'edremit', 'akcay', 'altinoluk', 
            'gure', 'altinkum', 'kucukkuyu', 'burhaniye', 
            'oren', 'ayvalik', 'havran', 'ivrindi', 
            'kepsut', 'dursunbey'
        ],
    ],
];