<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes (Controller'sız / Direkt Rota)
|--------------------------------------------------------------------------
|
| PageController dosyasını silebilirsin. Tüm mantığı buraya gömdük.
|
*/

// 1. ANASAYFA
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// 2. HİZMETLER SAYFASI
Route::get('/hizmetler', function () {
    return view('pages.services');
})->name('services');

// 3. HİZMET DETAY (Mantığı buraya yazdık)
Route::get('/hizmet/{slug}', function ($slug) {
    // Config dosyasından veriyi çek
    $service = config("flex.services.$slug");

    // Eğer böyle bir hizmet yoksa 404 hatası ver
    if (!$service) {
        abort(404);
    }

    // Varsa sayfayı aç
    return view('pages.service-detail', compact('service', 'slug'));
})->name('service.detail');

// 4. BÖLGELER
Route::get('/hizmet-bolgeleri', function () {
    return view('pages.regions');
})->name('regions');

// 5. FİYATLAR
Route::get('/fiyatlar', function () {
    return view('pages.pricing');
})->name('pricing');

// 6. HAKKIMIZDA (Hem /hakkimizda hem /kurumsal çalışsın)
Route::get('/hakkimizda', function () {
    return view('pages.about');
})->name('about');

Route::get('/kurumsal', function () {
    return view('pages.about');
})->name('corporate');

// 7. İLETİŞİM
Route::get('/iletisim', function () {
    return view('pages.contact');
})->name('contact');

// BÖLGE DETAY SAYFASI (SEO İÇİN KRİTİK)
// Örnek: /cekici/balikesir/edremit veya /cekici/balikesir
Route::get('/cekici/{city}/{district?}', function ($city, $district = null) {
    
    // Güvenlik: Sadece config dosyasında tanımlı şehirleri kabul et
    if (!array_key_exists($city, config('flex.regions'))) {
        abort(404);
    }

    return view('pages.region-detail', compact('city', 'district'));

})->name('region.detail');