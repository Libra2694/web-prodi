@extends('layouts.app')

@section('title', 'Dosen - Program Studi TRPL')

@section('content')
<div class="container">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Page Header -->
            <div class="mb-4">
                <h1 class="h2 text-trpl-red">Dosen Program Studi TRPL</h1>
                <p class="text-muted">Mengenal tim dosen yang mengajar di Program Studi Teknologi Rekayasa Perangkat Lunak</p>
                <img src="{{ asset('image/dosen-trpl.png') }}" 
                     alt="Dosen TRPL" 
                     class="img-fluid rounded mb-3" 
                     style="max-width: 100%; height: auto;">
            </div>
            
            <!-- Dosen Overview -->
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="text-trpl-red mb-3">Tim Dosen TRPL</h3>
                    <p class="mb-4">
                        Program Studi TRPL didukung oleh tim dosen yang berkualitas dan berpengalaman di bidang 
                        teknologi informasi. Dosen-dosen kami memiliki latar belakang akademik yang kuat dan 
                        pengalaman industri yang relevan.
                    </p>
                    <div class="row text-center">
                        <div class="col-md-3 mb-3">
                            <div class="border rounded p-3">
                                <i class="fas fa-users fa-3x text-trpl-red mb-2"></i>
                                <h6>Total Dosen</h6>
                                <p class="mb-0 text-trpl-red fw-bold">5</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="border rounded p-3">
                                <i class="fas fa-graduation-cap fa-3x text-trpl-red mb-2"></i>
                                <h6>S2/S3</h6>
                                <p class="mb-0 text-trpl-red fw-bold">100%</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="border rounded p-3">
                                <i class="fas fa-briefcase fa-3x text-trpl-red mb-2"></i>
                                <h6>Pengalaman</h6>
                                <p class="mb-0 text-trpl-red fw-bold">5+ Tahun</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="border rounded p-3">
                                <i class="fas fa-certificate fa-3x text-trpl-red mb-2"></i>
                                <h6>Kualifikasi</h6>
                                <p class="mb-0 text-trpl-red fw-bold">M.Kom</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Dosen Categories -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-trpl-red mb-3">Kategori Dosen</h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100">
                                <h6 class="text-trpl-red"><i class="fas fa-user-tie me-2"></i>Dosen Tetap</h6>
                                <p class="small mb-2">Dosen yang berstatus tetap di Program Studi TRPL</p>
                                <ul class="small mb-0">
                                    <li>Dosen PNS</li>
                                    <li>Dosen Kontrak</li>
                                    <li>Dosen Honor</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100">
                                <h6 class="text-trpl-red"><i class="fas fa-user-clock me-2"></i>Dosen Tidak Tetap</h6>
                                <p class="small mb-2">Dosen yang mengajar berdasarkan kebutuhan</p>
                                <ul class="small mb-0">
                                    <li>Dosen Praktisi</li>
                                    <li>Dosen Tamu</li>
                                    <li>Dosen Industri</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Dosen List -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-trpl-red mb-3">Daftar Dosen TRPL</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">NIDN</th>
                                    <th scope="col">Nama Dosen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>1050060162</td>
                                    <td>1026058803</td>
                                    <td><strong>Tanto, ST, M.Kom</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>1050060162</td>
                                    <td>0103057903</td>
                                    <td><strong>Rezagi Meilano, M.Kom</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>1050060168</td>
                                    <td>1030058801</td>
                                    <td><strong>Muhammad Hadi Saputra, M.Kom</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>1050060203</td>
                                    <td>0110028701</td>
                                    <td><strong>Febri Dristyan, M.Kom</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>1050060197</td>
                                    <td>1025039801</td>
                                    <td><strong>Helza Triana, M.Kom</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Dosen Profile Cards -->
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-user-tie fa-2x text-trpl-red me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Ketua Program Studi</h6>
                                        <p class="small text-muted mb-0">Pimpinan Program Studi</p>
                                    </div>
                                </div>
                                <p class="small mb-0">Mengkoordinasikan seluruh kegiatan akademik dan administrasi program studi</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-chalkboard-teacher fa-2x text-trpl-red me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Dosen Pengajar</h6>
                                        <p class="small text-muted mb-0">Mata Kuliah Utama</p>
                                    </div>
                                </div>
                                <p class="small mb-0">Mengajar mata kuliah inti dan praktikum program studi</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-flask fa-2x text-trpl-red me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Dosen Peneliti</h6>
                                        <p class="small text-muted mb-0">Penelitian & Pengabdian</p>
                                    </div>
                                </div>
                                <p class="small mb-0">Melakukan penelitian dan pengabdian masyarakat</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-tools fa-2x text-trpl-red me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Dosen Praktisi</h6>
                                        <p class="small text-muted mb-0">Pengalaman Industri</p>
                                    </div>
                                </div>
                                <p class="small mb-0">Berbagi pengalaman praktis dari dunia industri</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mata Kuliah -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-trpl-red mb-3">Mata Kuliah yang Diajar</h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3">
                                <h6 class="text-trpl-red">Pemrograman Dasar</h6>
                                <p class="small mb-0">Pengenalan konsep pemrograman dan algoritma</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3">
                                <h6 class="text-trpl-red">Struktur Data</h6>
                                <p class="small mb-0">Implementasi struktur data dalam pemrograman</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3">
                                <h6 class="text-trpl-red">Basis Data</h6>
                                <p class="small mb-0">Desain dan implementasi sistem basis data</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3">
                                <h6 class="text-trpl-red">Rekayasa Perangkat Lunak</h6>
                                <p class="small mb-0">Metodologi pengembangan perangkat lunak</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3">
                                <h6 class="text-trpl-red">Pemrograman Web</h6>
                                <p class="small mb-0">Pengembangan aplikasi web modern</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3">
                                <h6 class="text-trpl-red">Pemrograman Mobile</h6>
                                <p class="small mb-0">Pengembangan aplikasi mobile</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Research & Publications -->
            <div class="card">
                <div class="card-body">
                    <h4 class="text-trpl-red mb-3">Penelitian & Publikasi</h4>
                    <p class="mb-3">Tim dosen TRPL aktif dalam kegiatan penelitian dan publikasi ilmiah:</p>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-microscope fa-2x text-trpl-red me-3"></i>
                                <div>
                                    <h6 class="mb-1">Penelitian</h6>
                                    <p class="small mb-0">Bidang teknologi informasi dan rekayasa perangkat lunak</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-book fa-2x text-trpl-red me-3"></i>
                                <div>
                                    <h6 class="mb-1">Publikasi</h6>
                                    <p class="small mb-0">Jurnal nasional dan internasional</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-users fa-2x text-trpl-red me-3"></i>
                                <div>
                                    <h6 class="mb-1">Pengabdian</h6>
                                    <p class="small mb-0">Kepada masyarakat dan industri</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-handshake fa-2x text-trpl-red me-3"></i>
                                <div>
                                    <h6 class="mb-1">Kerjasama</h6>
                                    <p class="small mb-0">Dengan institusi dan perusahaan</p>
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
                <a href="{{ route('profil.sejarah') }}" class="sidebar-link">
                    <i class="fas fa-history me-2"></i>Sejarah Singkat
                </a>
                <a href="{{ route('profil.visi-misi') }}" class="sidebar-link">
                    <i class="fas fa-bullseye me-2"></i>Visi dan Misi
                </a>
                <a href="{{ route('profil.struktur') }}" class="sidebar-link">
                    <i class="fas fa-sitemap me-2"></i>Struktur Organisasi
                </a>
                <a href="{{ route('profil.sambutan') }}" class="sidebar-link">
                    <i class="fas fa-user-tie me-2"></i>Sambutan Kaprodi
                </a>
                <a href="{{ route('profil.akreditasi') }}" class="sidebar-link">
                    <i class="fas fa-certificate me-2"></i>Akreditasi
                </a>
            </div>
            
            <!-- Dosen Stats -->
            <div class="sidebar-section">
                <h5>STATISTIK DOSEN</h5>
                <div class="text-center p-3 bg-light rounded mb-3">
                    <i class="fas fa-users fa-2x text-trpl-red mb-2"></i>
                    <h6>Total Dosen</h6>
                    <p class="small text-muted mb-0">5 Dosen</p>
                </div>
                <div class="text-center p-3 bg-light rounded mb-3">
                    <i class="fas fa-graduation-cap fa-2x text-trpl-red mb-2"></i>
                    <h6>Kualifikasi</h6>
                    <p class="small text-muted mb-0">M.Kom</p>
                </div>
                <div class="text-center p-3 bg-light rounded">
                    <i class="fas fa-briefcase fa-2x text-trpl-red mb-2"></i>
                    <h6>Pengalaman</h6>
                    <p class="small text-muted mb-0">5+ Tahun</p>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="sidebar-section">
                <h5>LINK CEPAT</h5>
                <a href="#" class="sidebar-link">
                    <i class="fas fa-envelope me-2"></i>Email Dosen
                </a>
                <a href="#" class="sidebar-link">
                    <i class="fas fa-calendar me-2"></i>Jadwal Mengajar
                </a>
                    <a href="#" class="sidebar-link">
                    <i class="fas fa-book me-2"></i>Publikasi Dosen
                </a>
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
