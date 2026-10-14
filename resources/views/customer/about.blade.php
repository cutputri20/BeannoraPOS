@extends('layouts.customer')

@section('title', 'Tentang Kami - BEANNORA')

@push('styles')
<style>
    .page-header {
        background: linear-gradient(rgba(27, 67, 50, 0.8), rgba(27, 67, 50, 0.8)), url('{{ asset('images/display-2.png') }}');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 160px 0 100px;
        text-align: center;
    }

    .page-title {
        font-size: 4rem;
        margin-bottom: 20px;
    }

    .about-section {
        padding: 100px 0;
    }

    .about-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 80px;
        align-items: center;
    }

    .about-image {
        position: relative;
    }

    .about-image img {
        width: 100%;
        border-radius: 20px;
        box-shadow: var(--shadow);
    }

    .about-image::after {
        content: '';
        position: absolute;
        top: 20px;
        right: -20px;
        width: 100%;
        height: 100%;
        border: 2px solid var(--accent);
        border-radius: 20px;
        z-index: -1;
    }

    .about-text h2 {
        font-size: 2.5rem;
        color: var(--primary);
        margin-bottom: 25px;
    }

    .about-text p {
        font-size: 1.1rem;
        color: var(--text-light);
        margin-bottom: 20px;
        line-height: 1.8;
    }

    @media (max-width: 992px) {
        .about-content {
            grid-template-columns: 1fr;
            gap: 50px;
        }
        .page-title { font-size: 3rem; }
    }

    @media (max-width: 768px) {
        .page-header { padding: 120px 0 60px; }
        .page-title { font-size: 2.5rem; }
        .about-section { padding: 60px 0; }
        .about-text h2 { font-size: 2rem; }
        .about-image::after { display: none; }
    }
</style>
@endpush

@section('content')
<div class="page-header">
    <div class="container">
        <h1 class="page-title font-serif fade-in-up">{{ $aboutTitle }}</h1>
    </div>
</div>

<section class="about-section">
    <div class="container">
        <div class="about-content">
            <div class="about-image fade-in-up">
                <img src="{{ asset('images/display-main.png') }}" alt="Interior Beanora">
            </div>
            <div class="about-text fade-in-up" style="animation-delay: 0.2s;">
                <h2 class="font-serif">Cerita di Balik Beanora</h2>
                <div class="about-text-body">
                    @if($aboutText)
                        {!! nl2br(htmlspecialchars($aboutText)) !!}
                    @else
 
<p>Beanora lahir dari keinginan sederhana: menghadirkan secangkir kebahagiaan di tengah kesibukan sehari-hari. Terinspirasi dari perpaduan kata *Bean* yang berarti biji kopi dan sentuhan nama *Nora* yang menjadi identitas kami, Beanora hadir sebagai tempat untuk menikmati kopi, menemukan ketenangan, dan menciptakan momen berharga.</p>
<p>Kami percaya bahwa kopi berkualitas bukan hanya tentang rasa, tetapi juga tentang cerita, kenyamanan, dan koneksi yang tercipta dalam setiap cangkir. Karena itu, setiap sajian Beanora dipersiapkan dengan penuh perhatian, mulai dari pemilihan bahan hingga proses penyajian, agar setiap tegukan memberikan pengalaman yang istimewa.</p>
<p>Bagi kami, Beanora bukan sekadar tempat menikmati kopi, melainkan ruang untuk berbagi cerita, bertukar ide, dan menikmati waktu bersama orang-orang terdekat. Temukan sudut favoritmu, nikmati aroma kopi yang menenangkan, dan biarkan setiap cangkir Beanora menjadi bagian dari cerita indahmu.</p>

                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

