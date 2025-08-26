@extends('layouts.app')

@section('title', 'Akademik - Program Studi TRPL')

@section('content')
<div class="container">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Page Header -->
            <div class="mb-4">
                <h1 class="h2 text-trpl-red">Informasi Akademik</h1>
                <p class="text-muted">Informasi lengkap tentang program akademik Program Studi TRPL</p>
            </div>
            
            <!-- Curriculum -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Kurikulum</h5>
                </div>
                <div class="card-body">
                    <p class="mb-3">
                        Kurikulum Program Studi TRPL dirancang berdasarkan kebutuhan industri dan standar nasional 
                        pendidikan tinggi. Program ini dapat diselesaikan dalam 4 semester dengan total 72 SKS.
                    </p>
                    
                    <h6 class="text-trpl-red">Semester 1</h6>
                    <ul class="mb-3">
                        <li>Matematika Dasar (3 SKS)</li>
                        <li>Fisika Dasar (3 SKS)</li>
                        <li>Pengantar Teknologi Informasi (3 SKS)</li>
                        <li>Bahasa Inggris Teknik (2 SKS)</li>
                        <li>Pendidikan Pancasila (2 SKS)</li>
                        <li>Pendidikan Agama (2 SKS)</li>
                    </ul>
                    
                    <h6 class="text-trpl-red">Semester 2</h6>
                    <ul class="mb-3">
                        <li>Algoritma dan Pemrograman (4 SKS)</li>
                        <li>Struktur Data (3 SKS)</li>
                        <li>Basis Data (3 SKS)</li>
                        <li>Matematika Diskrit (3 SKS)</li>
                        <li>Bahasa Indonesia (2 SKS)</li>
                        <li>Kewarganegaraan (2 SKS)</li>
                    </ul>
                    
                    <h6 class="text-trpl-red">Semester 3</h6>
                    <ul class="mb-3">
                        <li>Pemrograman Web (4 SKS)</li>
                        <li>Pemrograman Mobile (4 SKS)</li>
                        <li>Rekayasa Perangkat Lunak (3 SKS)</li>
                        <li>Jaringan Komputer (3 SKS)</li>
                        <li>Interaksi Manusia dan Komputer (2 SKS)</li>
                        <li>Kewirausahaan (2 SKS)</li>
                    </ul>
                    
                    <h6 class="text-trpl-red">Semester 4</h6>
                    <ul class="mb-0">
                        <li>Proyek Akhir (6 SKS)</li>
                        <li>Magang Industri (4 SKS)</li>
                        <li>Etika Profesi (2 SKS)</li>
                        <li>Seminar (2 SKS)</li>
                    </ul>
                </div>
            </div>
            
            <!-- Facilities -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Fasilitas Pembelajaran</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="text-center p-3 border rounded">
                                <i class="fas fa-desktop fa-3x text-trpl-red mb-3"></i>
                                <h6>Laboratorium Komputer</h6>
                                <p class="small mb-0">40 unit komputer dengan spesifikasi tinggi</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="text-center p-3 border rounded">
                                <i class="fas fa-wifi fa-3x text-trpl-red mb-3"></i>
                                <h6>Internet Cepat</h6>
                                <p class="small mb-0">Koneksi internet 100 Mbps untuk pembelajaran</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="text-center p-3 border rounded">
                                <i class="fas fa-projector fa-3x text-trpl-red mb-3"></i>
                                <h6>Ruang Multimedia</h6>
                                <p class="small mb-0">Ruang presentasi dengan proyektor dan sound system</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="text-center p-3 border rounded">
                                <i class="fas fa-book fa-3x text-trpl-red mb-3"></i>
                                <h6>Perpustakaan Digital</h6>
                                <p class="small mb-0">Akses ke ribuan buku dan jurnal digital</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Teaching Staff -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Dosen Pengajar</h5>
                </div>
                <div class="card-body">
                    <p class="mb-3">
                        Program Studi TRPL didukung oleh dosen-dosen yang memiliki kualifikasi tinggi dan 
                        pengalaman di bidang industri teknologi informasi.
                    </p>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3 border rounded">
                                <div class="bg-trpl-red text-white rounded-circle d-flex align-items-center justify-content-center me-3" 
                                     style="width: 50px; height: 50px;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Dr. Ahmad Fauzi, S.Kom, M.Kom</h6>
                                    <p class="small text-muted mb-0">Kaprodi TRPL</p>
                                    <p class="small text-muted mb-0">Bidang: Software Engineering</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3 border rounded">
                                <div class="bg-trpl-red text-white rounded-circle d-flex align-items-center justify-content-center me-3" 
                                     style="width: 50px; height: 50px;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Siti Nurhaliza, S.Kom, M.T</h6>
                                    <p class="small text-muted mb-0">Dosen</p>
                                    <p class="small text-muted mb-0">Bidang: Web Development</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3 border rounded">
                                <div class="bg-trpl-red text-white rounded-circle d-flex align-items-center justify-content-center me-3" 
                                     style="width: 50px; height: 50px;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Budi Santoso, S.Kom, M.Kom</h6>
                                    <p class="small text-muted mb-0">Dosen</p>
                                    <p class="small text-muted mb-0">Bidang: Mobile Development</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3 border rounded">
                                <div class="bg-trpl-red text-white rounded-circle d-flex align-items-center justify-content-center me-3" 
                                     style="width: 50px; height: 50px;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Dewi Sartika, S.Kom, M.T</h6>
                                    <p class="small text-muted mb-0">Dosen</p>
                                    <p class="small text-muted mb-0">Bidang: Database Management</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Register Button -->
            <div class="sidebar-section text-center">
                <a href="#" class="btn btn-trpl-red btn-lg w-100 mb-3">DAFTAR SEKARANG</a>
                <a href="#" class="btn btn-trpl-outline btn-lg w-100">DOWNLOAD BROCHURE</a>
            </div>
            
            <!-- Academic Calendar -->
            <div class="sidebar-section">
                <h5>KALENDER AKADEMIK</h5>
                <div class="mb-3">
                    <h6 class="text-trpl-red">Semester Ganjil 2025/2026</h6>
                    <p class="small mb-1">Pendaftaran: Agustus 2025</p>
                    <p class="small mb-1">Kuliah: September 2025</p>
                    <p class="small mb-0">UAS: Januari 2026</p>
                </div>
                <div class="mb-3">
                    <h6 class="text-trpl-red">Semester Genap 2025/2026</h6>
                    <p class="small mb-1">Pendaftaran: Februari 2026</p>
                    <p class="small mb-1">Kuliah: Maret 2026</p>
                    <p class="small mb-0">UAS: Juli 2026</p>
                </div>
            </div>
            
            <!-- Requirements -->
            <div class="sidebar-section">
                <h5>SYARAT PENDAFTARAN</h5>
                <ul class="list-unstyled small">
                    <li class="mb-2">
                        <i class="fas fa-check text-success me-2"></i>
                        Lulusan SMA/SMK/MA
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-check text-success me-2"></i>
                        Nilai rata-rata minimal 7.0
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-check text-success me-2"></i>
                        Fotokopi ijazah dan SKHUN
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-check text-success me-2"></i>
                        Pas foto 3x4 (3 lembar)
                    </li>
                    <li class="mb-0">
                        <i class="fas fa-check text-success me-2"></i>
                        Biaya pendaftaran Rp 200.000
                    </li>
                </ul>
            </div>
            
            <!-- Quick Links -->
            <div class="sidebar-section">
                <h5>LINK CEPAT</h5>
                <a href="{{ route('about') }}" class="sidebar-link">
                    <i class="fas fa-info-circle me-2"></i>Profil Program Studi
                </a>
                <a href="{{ route('news.index') }}" class="sidebar-link">
                    <i class="fas fa-newspaper me-2"></i>Berita & Pengumuman
                </a>
                <a href="{{ route('contact') }}" class="sidebar-link">
                    <i class="fas fa-envelope me-2"></i>Kontak
                </a>
                <a href="#" class="sidebar-link">
                    <i class="fas fa-file-pdf me-2"></i>Download Brosur
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

