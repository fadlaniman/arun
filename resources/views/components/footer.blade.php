<style>
    /* Footer Styles */
    footer {
        background-color: var(--dark-bg);
        color: #fff;
        padding: 4rem 0 2rem;
        margin-top: 3rem;
    }

    .footer-title {
        color: #fff;
        font-weight: 600;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 10px;
        font-size: 1.2rem;
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
        color: #bbb;
        text-decoration: none;
        transition: all 0.3s;
        display: inline-block;
    }

    .footer-links a:hover {
        color: #fff;
        transform: translateX(5px);
    }

    .footer-contact p {
        margin-bottom: 1rem;
        color: #bbb;
    }

    .footer-contact i {
        color: var(--accent-color);
        margin-right: 10px;
        width: 20px;
        text-align: center;
    }

    .social-links {
        margin-top: 1.5rem;
    }

    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
        border-radius: 50%;
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
        text-align: center;
        color: #999;
        font-size: 0.9rem;
    }
</style>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 footer-col">
                <h6 class="footer-title">Kantor Pusat</h6>
                <div class="footer-contact">
                    <p><i class="fas fa-map-marker-alt"></i> Gedung Patra Jasa Lantai 1, Jl. Jend. Gatot Subroto Kav 32-34, Jakarta Selatan 12950</p>
                    <p><i class="fas fa-phone-alt"></i> +62-21 525 1005</p>
                    <p><i class="fas fa-envelope"></i> +62-21 529 00007</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 footer-col">
                <h6 class="footer-title">Kantor Area</h6>
                <div class="footer-contact">
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Medan - Banda Aceh, Blang Lancang, Kec. Muara Satu, Lhokseumawe, Aceh 24353</p>
                    <p><i class="fas fa-phone-alt"></i> +62-645-41334</p>
                </div>

                <div class="social-links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>&copy; 2023 PT Perta Arun Gas. Semua Hak Dilindungi Undang-Undang.</p>
        </div>
    </div>
</footer>