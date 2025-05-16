@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<!-- Page Header -->
<section class="page-header bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-3">Profil Perusahaan</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="text-white">Beranda</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Tentang Kami</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/about-header.png') }}" alt="Tentang Kami" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Company Profile Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative">
                    <img src="{{ asset('images/company-building.jpg') }}" alt="Gedung PT Perta Arun Gas" class="img-fluid rounded shadow-lg">
                    <div class="position-absolute top-0 start-0 bg-primary text-white p-3 rounded-end">
                        <h3 class="mb-0">Sejak 1991</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ps-lg-4">
                    <h2 class="fw-bold mb-4">Profil Perusahaan</h2>
                    <p class="lead">PT Perta Arun Gas adalah perusahaan nasional yang bergerak di bidang pengolahan dan distribusi gas alam di Indonesia.</p>
                    <p>Didirikan pada tahun 1991, kami telah tumbuh menjadi salah satu perusahaan energi terkemuka di Indonesia dengan komitmen untuk menyediakan solusi energi yang berkelanjutan dan ramah lingkungan.</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary p-2 rounded me-3">
                            <i class="fas fa-bullseye text-white fa-lg"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Visi</h5>
                            <p class="mb-0">Menjadi perusahaan energi terkemuka yang berkelanjutan di Asia Tenggara.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="bg-primary p-2 rounded me-3">
                            <i class="fas fa-rocket text-white fa-lg"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Misi</h5>
                            <p class="mb-0">Menyediakan solusi energi inovatif yang mendukung pertumbuhan ekonomi nasional dengan tetap menjaga kelestarian lingkungan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection