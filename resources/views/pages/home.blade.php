@extends('layouts.app')

@section('title', 'Anasayfa')

@section('content')
    {{-- 1. HERO BÖLÜMÜ --}}
    @include('sections.hero')

    {{-- 2. HİZMETLER GRID --}}
    @include('sections.services-grid')

    {{-- 3. HAKKIMIZDA ÖNİZLEME --}}
    @include('sections.about-preview')

    {{-- 4. BÖLGELER --}}
    @include('sections.regions')
    
    {{-- 5. CTA --}}
    @include('sections.cta')
@endsection