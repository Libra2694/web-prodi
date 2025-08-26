@extends('layouts.app')

@section('title', 'Profil - Program Studi TRPL')

@section('content')
<div class="container">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Page Header -->
            <div class="mb-4">
                <h1 class="h2 text-trpl-red">Profil Program Studi TRPL</h1>
                <p class="text-muted">Mengenal lebih dekat Program Studi Teknologi Rekayasa Perangkat Lunak</p>
            </div>
            
            <!-- Sejarah Singkat Content -->
            <div class="card mb-4" id="sejarah">
                <div class="card-body">
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
            </div>
            
            <!-- Visi dan Misi Content -->
            <div class="card mb-4" id="visi-misi">
                <div class="card-body">
                    <h3 class="text-trpl-red mb-3">Visi</h3>
                    <p class="mb-4">
                        Menjadi pusat pendidikan unggulan Teknologi Rekayasa Perangkat Lunak yang terkait dengan bidang Technopreneur untuk menghasilkan lulusan, penelitian, pengabdian masyarakat dan pelatihan untuk pelayanan industri di Tingkat Sumatera.
                    </p>
                    
                    <h3 class="text-trpl-red mb-3">Misi</h3>
                    <p class="mb-3">
                        Misi Program Studi Rekayasa Perangkat Lunak Politeknik Jambi merupakan penjabaran penyelenggaraan kegiatan pendidikan dan pengajaran, penelitian, dan pengabdian kepada masyarakat yang dilakukan dalam upaya mewujudkan visi Politeknik Jambi. Misi Program Studi Rekayasa Perangkat Lunak adalah sebagai berikut :
                    </p>
                    <ul class="mb-4">
                        <li>Menyelenggarakan pendidikan profesional agar dapat menghasilkan lulusan yang unggul di bidang teknologi Rekayasa Perangkat Lunak berbasis kompetensi dan berakhlak mulia.</li>
                        <li>Menyelenggarakan program penelitian dan pengabdian kepada masyarakat dan mempublikasikan hasil pengembangan teknologi Rekayasa Perangkat Lunak yang berbasis pada kebutuhan masyarakat, pemerintah dan dunia industri.</li>
                        <li>Membangun kerjasama dengan pemerintah dan dunia industri sebagai mitra Program Studi Teknologi Rekayasa Perangkat Lunak, dengan mengoptimalkan sumber daya yang ada dalam mencapai mutu dan kemandirian melalui kegiatan pendidikan, penelitian, dan pengabdian kepada masyarakat.</li>
                    </ul>
                    
                    <h3 class="text-trpl-red mb-3">Tujuan</h3>
                    <ul class="mb-4">
                        <li>Menghasilkan lulusan yang memiliki kompetensi dalam pengembangan perangkat lunak</li>
                        <li>Mengembangkan kurikulum yang sesuai dengan kebutuhan industri</li>
                        <li>Meningkatkan kualitas penelitian dan pengabdian masyarakat</li>
                        <li>Membangun jaringan kerjasama dengan industri dan institusi pendidikan</li>
                    </ul>
                    
                    <h3 class="text-trpl-red mb-3">Profil Lulusan</h3>
                    <p class="mb-4">
                        Lulusan Program Studi TRPL diharapkan dapat menjadi:
                    </p>
                    <ul class="mb-4">
                        <li><strong>Software Developer:</strong> Mengembangkan aplikasi dan sistem perangkat lunak</li>
                        <li><strong>Web Developer:</strong> Membuat dan mengelola website dan aplikasi web</li>
                        <li><strong>Mobile Developer:</strong> Mengembangkan aplikasi mobile</li>
                        <li><strong>System Analyst:</strong> Menganalisis kebutuhan sistem dan merancang solusi</li>
                        <li><strong>Database Administrator:</strong> Mengelola dan mengoptimalkan database</li>
                    </ul>
                    
                    <h3 class="text-trpl-red mb-3">Keunggulan Program Studi</h3>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="text-center p-3 border rounded">
                                <i class="fas fa-laptop-code fa-3x text-trpl-red mb-3"></i>
                                <h5>Kurikulum Berbasis Industri</h5>
                                <p class="small">Kurikulum yang disesuaikan dengan kebutuhan industri terkini</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="text-center p-3 border rounded">
                                <i class="fas fa-users fa-3x text-trpl-red mb-3"></i>
                                <h5>Dosen Berpengalaman</h5>
                                <p class="small">Dosen yang memiliki pengalaman di industri dan akademik</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="text-center p-3 border rounded">
                                <i class="fas fa-tools fa-3x text-trpl-red mb-3"></i>
                                <h5>Fasilitas Lengkap</h5>
                                <p class="small">Laboratorium komputer dan perangkat lunak yang memadai</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="text-center p-3 border rounded">
                                <i class="fas fa-handshake fa-3x text-trpl-red mb-3"></i>
                                <h5>Kerjasama Industri</h5>
                                <p class="small">Program magang dan kerjasama dengan perusahaan teknologi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Struktur Organisasi Content -->
            <div class="card mb-4" id="struktur">
                <div class="card-body">
                    <h3 class="text-trpl-red mb-3">Struktur Organisasi</h3>
                    <p class="text-muted">Informasi struktur organisasi Program Studi TRPL akan ditampilkan di sini.</p>
                    <div class="text-center">
                        <i class="fas fa-sitemap fa-4x text-muted mb-3"></i>
                        <p class="text-muted">Struktur organisasi sedang dalam pengembangan</p>
                    </div>
                </div>
            </div>
            
            <!-- Sambutan Kaprodi Content -->
            <div class="card mb-4" id="sambutan">
                <div class="card-body">
                    <h3 class="text-trpl-red mb-3">Sambutan Kaprodi</h3>
                    <p class="text-muted">Sambutan dari Ketua Program Studi TRPL akan ditampilkan di sini.</p>
                    <div class="text-center">
                        <i class="fas fa-user-tie fa-4x text-muted mb-3"></i>
                        <p class="text-muted">Sambutan kaprodi sedang dalam pengembangan</p>
                    </div>
                </div>
            </div>
            
            <!-- Dosen Content -->
            <div class="card mb-4" id="dosen">
                <div class="card-body">
                    <h3 class="text-trpl-red mb-3">Dosen</h3>
                    <p class="text-muted">Informasi tentang dosen Program Studi TRPL akan ditampilkan di sini.</p>
                    <div class="text-center">
                        <i class="fas fa-chalkboard-teacher fa-4x text-muted mb-3"></i>
                        <p class="text-muted">Data dosen sedang dalam pengembangan</p>
                    </div>
                </div>
            </div>
            
            <!-- Akreditasi Content -->
            <div class="card mb-4" id="akreditasi">
                <div class="card-body">
                    <h3 class="text-trpl-red mb-3">Akreditasi</h3>
                    <p class="text-muted">Informasi akreditasi Program Studi TRPL akan ditampilkan di sini.</p>
                    <div class="text-center">
                        <i class="fas fa-certificate fa-4x text-muted mb-3"></i>
                        <p class="text-muted">Informasi akreditasi sedang dalam pengembangan</p>
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
            
            <!-- Contact Info -->
            <div class="sidebar-section">
                <h5>KONTAK</h5>
                <p class="mb-2">
                    <i class="fas fa-map-marker-alt text-trpl-red me-2"></i>
                    Jl. Sei Batanghari No.2, Jambi
                </p>
                <p class="mb-2">
                    <i class="fas fa-phone text-trpl-red me-2"></i>
                    082280069039
                </p>
                <p class="mb-2">
                    <i class="fas fa-envelope text-trpl-red me-2"></i>
                    info@politeknikjambi.ac.id
                </p>
            </div>
            
            <!-- Navigation -->
            <div class="sidebar-section">
                <h5>NAVIGASI</h5>
                <a href="{{ route('home') }}" class="sidebar-link">
                    <i class="fas fa-home me-2"></i>Beranda
                </a>
                <a href="{{ route('academic') }}" class="sidebar-link">
                    <i class="fas fa-graduation-cap me-2"></i>Akademik
                </a>
                <a href="{{ route('contact') }}" class="sidebar-link">
                    <i class="fas fa-envelope me-2"></i>Kontak
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

