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
                <img src="{{ asset('images/slide-3.jpg') }}" alt="Tentang Kami" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Company Profile Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- Timeline Image Column -->
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="{{ asset('images/slide-3.jpg') }}" alt="Sejarah Perusahaan" class="img-fluid rounded shadow-lg w-100">
                    <div class="position-absolute bottom-0 start-0 bg-primary text-white p-3 rounded-end">
                        <h3 class="mb-0">Perjalanan Kami</h3>
                    </div>
                </div>
            </div>

            <!-- Company History Column -->
            <div class="col-lg-6">
                <div class="ps-lg-4">
                    <h2 class="fw-bold mb-4 border-bottom pb-3">Sejarah Perusahaan</h2>

                    <!-- Timeline Design -->
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-badge bg-primary"></div>
                            <div class="timeline-content shadow-sm p-4 mb-4 rounded">
                                <h5 class="fw-bold">2013 - Pendirian</h5>
                                <p>PT Pertamina Gas Negara, serta sebagai anak Perusahaan dari PT Pertamina Gas, PAG didirikan pada tanggal 18 Maret 2013, PT Perta Arun Gas sesuai dengan ketentuan No. 22 dengan kegiatan usaha Receiving dan Regasification Terminal, penerimaan dan proses pembentukan gas kembali, serta penjualan produksi dan gas bumi hasil kegiatan usaha tersebut, serta menyelenggarakan kegiatan usaha penunjang lain yang secara langsung maupun tidak langsung menunjang kegiatan usaha tersebut. Pendirian PT Perta Arun Gas merupakan tindaklanjut dari surat Kementerian BUMN melalui Surat Menteri Negara BUMN No. S-141/MBU/2012 yang salah satunya berisi tentang Proyek Revitalisasi Terminal LNG Arun, yaitu PT Pertamina (Persero) diminta segera melaksanakan proyek revitalisasi LNG Arun yang diintegrasikan dengan pemipaan dari Arun ke Sumatra Utara dan memenuhi komitmen batas waktu penyelesaian proyek yaitu pada akhir 2013.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-badge bg-primary"></div>
                            <div class="timeline-content shadow-sm p-4 mb-4 rounded">
                                <h5 class="fw-bold">2015 - Serah Terima</h5>
                                <p>Pada tanggal 01 Oktober 2015 dilaksanakan serah terima seluruh operasional kilang Arun dari PT Arun NGL ke PT Perta Arun Gas dan sejak saat itu hak dan tanggung jawab seluruh aspek operasional kilang baik yang utama maupun penunjangnya, dibawah PT Perta Arun Gas Seiring dengan pengembangan bisnSejalan dengan pengembangan bisnisnya untuk menjadi Perusahaan LNG Hub kelas dunia, PAG mendapatkan pengesahan dari Menteri Keuangan mewakili Presiden Republik Indonesia melalui izin dari Keputusan Mentri Keuangan Republik Indonesia Nomor 1693/KM.4/2016 tentang Penetapan Tempat Sebagai Pusat Logistik Berikat dan Pemberian Izin Penyelenggara Pusat Logistik Berikat Sekaligus Izin Pengusaha Pusat Logistik Berikat Hal ini menjadi salah satu bukti nyata dala upaya PAG untuk terwujudnya visi Perusahaan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Timeline Design */
    .timeline {
        position: relative;
        padding-left: 30px;
    }

    .timeline-item {
        position: relative;
        margin-bottom: 20px;
    }

    .timeline-badge {
        position: absolute;
        left: -30px;
        top: 0;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #ddd;
    }

    .timeline-content {
        background: white;
        transition: all 0.3s ease;
    }

    .timeline-content:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
    }

    /* Card Hover Effect */
    .card {
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
    }
</style>
@endsection