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
        position: relative;
    }

    .nav-link:hover {
        color: var(--primary-color);
    }

    /* Dropdown Styles */
    .nav-item.dropdown {
        position: relative;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 200px;
        background: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        padding: 10px 0;
        z-index: 1000;
        opacity: 0;
        transform: translateY(10px);
        transition: all 0.3s ease;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    .dropdown-item {
        padding: 8px 20px;
        color: #333;
        transition: all 0.2s;
    }

    .dropdown-item:hover {
        background-color: #f8f9fa;
        color: var(--primary-color);
        padding-left: 25px;
    }

    /* Mobile View Adjustments */
    @media (max-width: 991.98px) {
        .dropdown-menu {
            position: static;
            box-shadow: none;
            opacity: 1;
            transform: none;
            display: none;
            padding-left: 20px;
        }

        .dropdown:hover .dropdown-menu {
            display: none;
        }

        .show .dropdown-menu {
            display: block;
        }
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('tentang') ? 'active' : '' }}" href="{{ url('/tentang') }}" id="tentangDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="tentangDropdown">
                        <li><a class="dropdown-item" href="{{ url('/tentang/profile') }}">Profil Perusahaan</a></li>
                        <li><a class="dropdown-item" href="{{ url('/tentang/visi-misi') }}">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="{{ url('/tentang/komisaris-direksi') }}">Dewan Komisaris</a></li>
                        <li><a class="dropdown-item" href="{{ url('/tentang/penghargaan') }}">Dewan Direksi</a></li>
                    </ul>
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

<script>
    // Initialize Bootstrap dropdowns
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
        const dropdownList = dropdownElementList.map(function(dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl);
        });
    });
</script>