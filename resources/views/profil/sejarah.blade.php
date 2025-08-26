@extends('layouts.app')

@section('title', 'Sejarah Singkat - Program Studi TRPL')

@section('content')
<div class="container">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Page Header -->
            <div class="mb-4">
                <h1 class="h2 text-trpl-red">Sejarah Program Studi TRPL</h1>
                <p class="text-muted">Mengenal sejarah dan perkembangan Program Studi Teknologi Rekayasa Perangkat Lunak</p>
            </div>
            
            <!-- Banner Image -->
            <div class="card mb-4">
                <div class="card-body p-0">
                    <img src="{{ asset('image/banner-sejarah-trpl.png') }}" 
                         alt="Banner Sejarah Program Studi TRPL" 
                         class="img-fluid w-100" 
                         style="max-height: 300px; object-fit: cover;">
                </div>
            </div>
            
            <!-- Sejarah Content -->
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-8">
                            <h3 class="text-trpl-red mb-3">Sejarah Program Studi TRPL</h3>
                            <p class="mb-4">
                                Program Studi Rekayasa Perangkat Lunak mampu merancang dan mengembangkan perangkat lunak dengan mengikuti proses dan metode rekayasa perangkat lunak yang digunakan pada domain aplikasi dan teknologi.
                            </p>
                            <p class="mb-4">
                                Program Studi Teknologi Rekayasa Perangkat Lunak Politeknik Jambi Berkenaan telah diterbitkannya Keputusan Menteri Pendidikan dan Kebudayaan Nomor 481/M 12020 tentang Izin Pembukaan Program Studi Teknologi Rekayasa Perangkat Lunak Program Sarjana Terapan pada Politeknik Jambi di Kota Jambi yang Diselenggarakan oleh Yayasan Bagimu Negri Jambi.
                            </p>
                            <p class="mb-4">
                                Program studi Software Engineering (Rekayasa Perangkat Lunak) memberikan pengetahuan tentang prinsip dan teknik untuk mendesain perangkat lunak yang tepat guna, tangguh, dan mudah digunakan. Para mahasiswa akan mempelajari cara mendesain dan menganalisis algoritma dan pemrograman menggunakan struktur data yang efisien serta mengembangkan sistem operasi dan aplikasi berbasis web/mobile.
                            </p>
                            <p class="mb-4">
                                Visi Program Studi Rekayasa Perangkat Lunak Politeknik Jambi adalah menjadi program studi pelopor dan unggul dalam pengembangan keilmuan rekayasa perangkat lunak tahun 2023.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <div class="bg-light rounded p-4 mb-3">
                                    <i class="fas fa-history fa-4x text-trpl-red mb-3"></i>
                                    <h5>Sejarah</h5>
                                    <p class="small text-muted">Program Studi TRPL</p>
                                </div>
                                <div class="bg-light rounded p-3">
                                    <h6 class="text-trpl-red">Dekrit Menteri</h6>
                                    <p class="small mb-1">No. 481/M 12020</p>
                                    <p class="small text-muted">Tahun 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Timeline -->
                    <div class="mt-4">
                        <h4 class="text-trpl-red mb-3">Timeline Perkembangan</h4>
                        <div class="timeline">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <div class="text-trpl-red fw-bold">2020</div>
                                </div>
                                <div class="col-md-9">
                                    <p class="mb-0">Penerbitan Keputusan Menteri Pendidikan dan Kebudayaan No. 481/M 12020</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <div class="text-trpl-red fw-bold">2023</div>
                                </div>
                                <div class="col-md-9">
                                    <p class="mb-0">Target menjadi program studi pelopor dan unggul dalam pengembangan keilmuan rekayasa perangkat lunak</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Profile Navigation -->
            <div class="sidebar-section">
                <h5>PROFIL LAINNYA</h5>
                <a href="{{ route('profil.visi-misi') }}" class="sidebar-link">
                    <i class="fas fa-bullseye me-2"></i>Visi dan Misi
                </a>
                <a href="{{ route('profil.struktur') }}" class="sidebar-link">
                    <i class="fas fa-sitemap me-2"></i>Struktur Organisasi
                </a>
                <a href="{{ route('profil.sambutan') }}" class="sidebar-link">
                    <i class="fas fa-user-tie me-2"></i>Sambutan Kaprodi
                </a>
                <a href="{{ route('profil.dosen') }}" class="sidebar-link">
                    <i class="fas fa-chalkboard-teacher me-2"></i>Dosen
                </a>
                <a href="{{ route('profil.akreditasi') }}" class="sidebar-link">
                    <i class="fas fa-certificate me-2"></i>Akreditasi
                </a>
            </div>
            
            <!-- Quick Info -->
            <div class="sidebar-section">
                <h5>INFORMASI CEPAT</h5>
                <div class="row text-center">
                    <div class="col-6 mb-3">
                        <div class="border-end">
                            <h6 class="text-trpl-red">Akreditasi</h6>
                            <p class="mb-0">B</p>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <h6 class="text-trpl-red">Durasi</h6>
                        <p class="mb-0">4 Semester</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-6">
                        <div class="border-end">
                            <h6 class="text-trpl-red">Gelar</h6>
                            <p class="mb-0">A.Md</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <h6 class="text-trpl-red">Kapasitas</h6>
                        <p class="mb-0">40 Mahasiswa</p>
                    </div>
                </div>
            </div>
            
            <!-- Back to Home -->
            <div class="sidebar-section">
                <h5>NAVIGASI</h5>
                <a href="{{ route('home') }}" class="sidebar-link">
                    <i class="fas fa-home me-2"></i>Beranda
                </a>
                <a href="{{ route('profil') }}" class="sidebar-link">
                    <i class="fas fa-info-circle me-2"></i>Profil Utama
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
