<style>
    /* Navbar Styles */
    .navbar {
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        padding: 0.8rem 1rem;
    }

    .navbar-brand img {
        height: 50px;
    }

    .nav-link {
        color: #333;
        font-weight: 500;
        padding: 0.5rem 1rem;
        transition: all 0.3s;
    }

    .nav-link:hover {
        color: var(--primary-color);
    }
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="PT Perta Arun Gas Logo" class="img-fluid">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tentang') ? 'active' : '' }}" href="{{ url('/tentang') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bisnis Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hubungan Investor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Keberlanjutan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Media & Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Karir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>