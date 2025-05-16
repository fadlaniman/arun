<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - PT Perta Arun Gas</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #0050b3;
            --secondary-color: #0078d4;
            --accent-color: #ff6b6b;
            --light-bg: #f8f9fa;
            --dark-bg: #343a40;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
            color: #333;
        }

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

        .navbar .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .dropdown-item {
            padding: 0.7rem 1.5rem;
            transition: all 0.2s;
        }

        .dropdown-item:hover {
            background-color: rgba(0, 80, 179, 0.1);
            color: var(--primary-color);
        }

        /* Header Area */
        .header-area {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: #fff;
            padding: 3rem 0;
            margin-bottom: 2rem;
        }

        /* Footer */
        footer {
            background-color: var(--dark-bg);
            color: #fff;
            padding: 3rem 0 1rem;
            margin-top: 3rem;
        }

        .footer-title {
            font-weight: 600;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--accent-color);
        }

        .footer-links {
            list-style: none;
            padding-left: 0;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: #ddd;
            text-decoration: none;
            transition: all 0.3s;
        }

        .footer-links a:hover {
            color: #fff;
            padding-left: 5px;
        }

        .social-links a {
            display: inline-block;
            width: 36px;
            height: 36px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            border-radius: 50%;
            text-align: center;
            line-height: 36px;
            margin-right: 10px;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background-color: var(--accent-color);
            transform: translateY(-3px);
        }

        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1.5rem;
            margin-top: 3rem;
        }

        /* Buttons */
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        /* Card Styles */
        .card {
            border: none;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            border-radius: 10px;
            transition: all 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 45px;
            height: 45px;
            background-color: var(--primary-color);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s;
            z-index: 1000;
        }

        .back-to-top.active {
            opacity: 1;
            pointer-events: auto;
        }

        .back-to-top:hover {
            background-color: var(--secondary-color);
            color: #fff;
        }

        /* Responsive Adjustments */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: #fff;
                padding: 1rem;
                border-radius: 8px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                margin-top: 10px;
            }
        }
    </style>

    @stack('styles')
</head>

<body>
    @include('components.navbar')
    <!-- Main Content -->
    <main class="py-4">
        @yield('content')
    </main>

    @include('components.footer')

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Custom Scripts -->
    <script>
        // Back to top button functionality
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('#backToTop').addClass('active');
            } else {
                $('#backToTop').removeClass('active');
            }
        });

        $('#backToTop').click(function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 500);
        });

        // Add smooth scrolling to all links
        $("a").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {
                    window.location.hash = hash;
                });
            }
        });

        // Dropdown hover effect for desktop
        const $dropdownToggle = $('.dropdown-toggle');

        if (window.matchMedia('(min-width: 992px)').matches) {
            $dropdownToggle.hover(
                function() {
                    $(this).attr('aria-expanded', 'true');
                    $(this).parent().addClass('show');
                    $(this).next('.dropdown-menu').addClass('show');
                },
                function() {
                    const $this = $(this);
                    setTimeout(function() {
                        if (!$this.parent().is(':hover')) {
                            $this.attr('aria-expanded', 'false');
                            $this.parent().removeClass('show');
                            $this.next('.dropdown-menu').removeClass('show');
                        }
                    }, 200);
                }
            );

            $('.dropdown-menu').hover(
                function() {},
                function() {
                    const $this = $(this);
                    setTimeout(function() {
                        if (!$this.parent().is(':hover')) {
                            $this.removeClass('show');
                            $this.prev('.dropdown-toggle').attr('aria-expanded', 'false');
                            $this.parent().removeClass('show');
                        }
                    }, 200);
                }
            );
        }

        // Preloader
        $(window).on('load', function() {
            if ($('#preloader').length) {
                $('#preloader').delay(100).fadeOut('slow', function() {
                    $(this).remove();
                });
            }
        });

        // Active menu highlighting
        $(document).ready(function() {
            // Add active class to nav-item if url matches
            const currentLocation = window.location.pathname;
            $('.navbar-nav .nav-link').each(function() {
                const link = $(this).attr('href');
                if (link && currentLocation.includes(link) && link !== '/') {
                    $(this).addClass('active');

                    // If it's in a dropdown, also add active to parent
                    if ($(this).parents('.dropdown').length) {
                        $(this).parents('.dropdown').find('.nav-link').addClass('active');
                    }
                }
            });
        });
    </script>

    @stack('scripts')
</body>

</html>