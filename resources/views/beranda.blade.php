@extends('layouts.app')

@section('title', ' Beranda')

<style>
    :root {
        --primary-color: #0050b3;
        --secondary-color: #0078d4;
        --light-bg: #f8f9fa;
        --dark-bg: #343a40;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f5f7fa;
        color: #333;
    }

    /* Banner Slider Styles */
    .banner-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        height: 70vh;
    }

    .banner-slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
        height: 100%;
    }

    .banner-slide {
        min-width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .banner-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .banner-controls {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
        z-index: 10;
    }

    .banner-control {
        background: rgba(255, 255, 255, 0.5);
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin: 0 20px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
    }

    .banner-control:hover {
        background: rgba(255, 255, 255, 0.8);
    }

    .banner-indicators {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
        z-index: 10;
    }

    .banner-indicator {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: all 0.3s;
    }

    .banner-indicator.active {
        background: white;
        transform: scale(1.2);
    }

    /* Business Section Styles */
    .business-section {
        padding: 80px 0;
        background-color: #fff;
    }

    .section-title {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-title h2 {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 15px;
        font-weight: 700;
    }

    .section-title p {
        color: #666;
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
    }

    .business-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .business-card {
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 100%;
    }

    .business-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .business-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.5s ease;
    }

    .business-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 80, 179, 0.9), transparent);
        color: white;
        padding: 20px;
        transform: translateY(100%);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
    }

    .business-card:hover .business-overlay {
        transform: translateY(0);
    }

    .business-title {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .business-desc {
        font-size: 0.9rem;
        margin-bottom: 15px;
        opacity: 0;
        transition: opacity 0.3s ease 0.2s;
    }

    .business-card:hover .business-desc {
        opacity: 1;
    }

    .business-link {
        color: white;
        text-decoration: none;
        font-weight: 500;
        display: flex;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease 0.3s;
    }

    .business-card:hover .business-link {
        opacity: 1;
    }

    .business-link i {
        margin-left: 5px;
        transition: transform 0.3s ease;
    }

    .business-link:hover i {
        transform: translateX(5px);
    }

    /* Responsive Adjustments */
    @media (max-width: 991.98px) {
        .business-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 767.98px) {
        .banner-container {
            height: 50vh;
        }

        .banner-control {
            width: 30px;
            height: 30px;
            margin: 0 10px;
        }

        .business-grid {
            grid-template-columns: 1fr;
        }

        .section-title h2 {
            font-size: 2rem;
        }
    }

    /* Video Section Styles */
    .video-section {
        width: 100%;
        padding: 0;
        margin: 0;
    }

    .video-container {
        position: relative;
        width: 100%;
        height: 70vh;
        /* Same as banner height */
        overflow: hidden;
    }

    .video-banner {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 40, 100, 0.3);
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
    }

    .video-content {
        max-width: 800px;
        padding: 20px;
    }

    .video-content h2 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .video-content p {
        font-size: 1.5rem;
        margin-bottom: 30px;
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
    }

    .video-play-button {
        background: var(--primary-color);
        color: white;
        border: none;
        padding: 12px 30px;
        font-size: 1.2rem;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        margin: 0 auto;
    }

    .video-play-button i {
        margin-right: 10px;
    }

    .video-play-button:hover {
        background: var(--secondary-color);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    /* Responsive Adjustments */
    @media (max-width: 991.98px) {
        .video-container {
            height: 50vh;
        }

        .video-content h2 {
            font-size: 2.5rem;
        }

        .video-content p {
            font-size: 1.2rem;
        }
    }

    @media (max-width: 767.98px) {
        .video-container {
            height: 40vh;
        }

        .video-content h2 {
            font-size: 2rem;
        }

        .video-content p {
            font-size: 1rem;
        }

        .video-play-button {
            padding: 10px 20px;
            font-size: 1rem;
        }
    }
</style>

@section('content')
<!-- Banner Slider -->
<div class="banner-container">
    <div class="banner-slider">
        <div class="banner-slide">
            <img src="{{ asset('images/slide-1.png') }}" alt="Banner 1">
        </div>
        <div class="banner-slide">
            <img src="{{ asset('images/slide-2.jpg') }}" alt="Banner 2">
        </div>
        <div class="banner-slide">
            <img src="{{ asset('images/slide-3.jpg') }}" alt="Banner 3">
        </div>
    </div>

    <div class="banner-controls">
        <button class="banner-control prev-slide">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="banner-control next-slide">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>

    <div class="banner-indicators">
        <div class="banner-indicator active" data-slide="0"></div>
        <div class="banner-indicator" data-slide="1"></div>
        <div class="banner-indicator" data-slide="2"></div>
    </div>
</div>

<!-- Business Section -->
<section class="business-section">
    <div class="section-title">
        <h2>Bisnis Kami</h2>
        <p>Kami menyediakan berbagai solusi bisnis untuk membantu perusahaan Anda tumbuh dan berkembang</p>
    </div>

    <div class="business-grid">
        <!-- Business 1 -->
        <div class="business-card">
            <img src="{{ asset('images/box-1.png') }}" alt="Bisnis 1" class="business-image">
            <div class="business-overlay">
                <h3 class="business-title">
                    01 | LNG Regasifikasi</h3>
                <p class="business-desc">Sebagai perusahaan yang bergerak di bidang energi di wilayah KEK Arun Lhokseumawe, PAG berperan sebagai terminal penerima LNG dan regasifikasi LNG yang akan menjadi receiving terminal bagi kebutuhan LNG diwilayah KEK Arun Lhok. Saat ini PAG mengoperasikan 3 Onshore Regasification Facility dengan kapasitas maksimum sebesar 405 MMSCFD</p>
                <a href="#" class="business-link">Lihat Detail <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <!-- Business 2 -->
        <div class="business-card">
            <img src="{{ asset('images/box-2.png') }}" alt="Bisnis 2" class="business-image">
            <div class="business-overlay">
                <h3 class="business-title">02 | LNG Hub</h3>
                <p class="business-desc">Untuk memenuhi kebutuhan pasar terkait storage facility LNG, PAG saat ini mengeoperasilan 5 tanki LNG. Saat ini tanki LNG diperuntukan untuk kebutuhan regasifikasi nasional kebutuhan wilayah Sumatera dan LNG Hub. Dengan visi untuk menjadi “asia’s LNG Hub leader in 2030” PAG berencana untuk menambah jumlah tanki LNG yang akan dimulai di 2023.</p>
                <a href="#" class="business-link">Lihat Detail <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <!-- Business 3 -->
        <div class="business-card">
            <img src="{{ asset('images/box-3.png') }}" alt="Bisnis 3" class="business-image">
            <div class="business-overlay">
                <h3 class="business-title">
                    03 | LNG Vessel Gassing Up Cool Down</h3>
                <p class="business-desc">Dengan tujuan untuk menjadi LNG One Stop Service provider, PAG juga menyediakan jasa gassing up and cooling down untuk mendukung seluruh kegiatan operasional LNG yang dibutuhkan para tenant PAG</p>
                <a href="#" class="business-link">Lihat Detail <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <!-- Business 4 -->
        <div class="business-card">
            <img src="{{ asset('images/box-4.png') }}" alt="Bisnis 4" class="business-image">
            <div class="business-overlay">
                <a href="#" class="business-link">Lihat Seluruh Bisnis <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Video Section -->
<section class="video-section">
    <div class="video-container">
        <video autoplay muted loop playsinline class="video-banner">
            <source src="{{ asset('videos/video-1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video-overlay">
            <div class="video-content">
                <h2>Our Goal
                    <br>To be Asia's LNG Hub
                    <br>Leader in 2030
                </h2>
                <button class="video-play-button">
                    <i class="fas fa-play"></i> Watch Full Video
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Banner Slider Functionality
        const slider = $('.banner-slider');
        const slides = $('.banner-slide');
        const indicators = $('.banner-indicator');
        const slideCount = slides.length;
        let currentSlide = 0;
        let slideInterval;

        // Set initial active slide
        function setActiveSlide(index) {
            currentSlide = index;
            slider.css('transform', `translateX(-${currentSlide * 100}%)`);

            // Update indicators
            indicators.removeClass('active');
            indicators.eq(currentSlide).addClass('active');
        }

        // Next slide function
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slideCount;
            setActiveSlide(currentSlide);
        }

        // Previous slide function
        function prevSlide() {
            currentSlide = (currentSlide - 1 + slideCount) % slideCount;
            setActiveSlide(currentSlide);
        }

        // Auto slide every 5 seconds
        function startSlider() {
            slideInterval = setInterval(nextSlide, 2000);
        }

        // Stop auto sliding when user interacts
        function stopSlider() {
            clearInterval(slideInterval);
        }

        // Initialize slider
        startSlider();

        // Event listeners
        $('.next-slide').click(function() {
            stopSlider();
            nextSlide();
            startSlider();
        });

        $('.prev-slide').click(function() {
            stopSlider();
            prevSlide();
            startSlider();
        });

        // Click on indicator
        indicators.click(function() {
            stopSlider();
            const slideIndex = $(this).data('slide');
            setActiveSlide(slideIndex);
            startSlider();
        });

        // Pause on hover
        $('.banner-container').hover(
            function() {
                stopSlider();
            },
            function() {
                startSlider();
            }
        );

        // Handle window resize
        $(window).resize(function() {
            setActiveSlide(currentSlide);
        });
    });

    // Add this to your existing script
    $(document).ready(function() {
        // Video play button functionality
        $('.video-play-button').click(function() {
            // You can implement a modal or redirect to full video page
            alert('Full video will be played in a modal or new page');
        });

        // Ensure video plays on mobile devices
        document.addEventListener('DOMContentLoaded', function() {
            const videos = document.querySelectorAll('video');
            videos.forEach(video => {
                video.muted = true; // Required for autoplay on most browsers
                video.play().catch(e => console.log(e));
            });
        });
    });
</script>
@endsection