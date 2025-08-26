@extends('layouts.app')

@section('title', 'Sambutan Kaprodi - Program Studi TRPL')

@section('content')
<div class="container">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Page Header -->
            <div class="mb-4">
                <h1 class="h2 text-trpl-red">Sambutan Ketua Program Studi</h1>
                <p class="text-muted">Pesan dari Ketua Program Studi Teknologi Rekayasa Perangkat Lunak</p>
                <img src="{{ asset('image/sambutan-kaprodi.png') }}" 
                     alt="Sambutan Kaprodi TRPL" 
                     class="img-fluid rounded mb-3" 
                     style="max-width: 100%; height: auto;">
            </div>
            
            <!-- Kaprodi Profile -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center mb-3">
                            <div class="bg-light rounded p-4">
                                <i class="fas fa-user-tie fa-5x text-trpl-red mb-3"></i>
                                <h5 class="text-trpl-red">Ketua Program Studi</h5>
                                <p class="small text-muted mb-0">TRPL</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3 class="text-trpl-red mb-3">Assalamu'alaikum Wr. Wb.</h3>
                            <p class="mb-4">
                                Selamat datang di Program Studi Teknologi Rekayasa Perangkat Lunak (TRPL) Politeknik Jambi. 
                                Kami bangga dapat menyambut Anda di institusi pendidikan yang berkomitmen untuk menghasilkan 
                                lulusan berkualitas di bidang teknologi informasi.
                            </p>
                            <p class="mb-4">
                                Program Studi TRPL didirikan dengan visi menjadi pusat pendidikan unggulan dalam bidang 
                                Teknologi Rekayasa Perangkat Lunak yang terkait dengan Technopreneur untuk tingkat Sumatera. 
                                Kami berkomitmen untuk memberikan pendidikan berkualitas tinggi yang sesuai dengan kebutuhan 
                                industri dan perkembangan teknologi terkini.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Welcome Message -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-trpl-red mb-3">Pesan Kami</h4>
                    <p class="mb-4">
                        Di era digital yang berkembang pesat ini, kebutuhan akan tenaga kerja yang kompeten di bidang 
                        teknologi informasi semakin meningkat. Program Studi TRPL hadir untuk menjawab tantangan tersebut 
                        dengan menyediakan kurikulum yang komprehensif dan relevan dengan kebutuhan industri.
                    </p>
                    <p class="mb-4">
                        Kami mempersiapkan mahasiswa dengan pengetahuan dan keterampilan yang diperlukan untuk:
                    </p>
                    <ul class="mb-4">
                        <li>Mengembangkan aplikasi dan sistem perangkat lunak yang inovatif</li>
                        <li>Menganalisis dan memecahkan masalah teknologi secara sistematis</li>
                        <li>Berkolaborasi dalam tim pengembangan perangkat lunak</li>
                        <li>Beradaptasi dengan perkembangan teknologi yang cepat</li>
                        <li>Membangun solusi teknologi yang berkelanjutan</li>
                    </ul>
                </div>
            </div>
            
            <!-- Program Highlights -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-trpl-red mb-3">Keunggulan Program Studi</h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100">
                                <h6 class="text-trpl-red"><i class="fas fa-graduation-cap me-2"></i>Kurikulum Berbasis Industri</h6>
                                <p class="small mb-0">Kurikulum yang disesuaikan dengan kebutuhan industri terkini dan standar kompetensi nasional</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100">
                                <h6 class="text-trpl-red"><i class="fas fa-users me-2"></i>Dosen Berpengalaman</h6>
                                <p class="small mb-0">Tim dosen yang memiliki pengalaman akademik dan industri yang mumpuni</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100">
                                <h6 class="text-trpl-red"><i class="fas fa-tools me-2"></i>Fasilitas Lengkap</h6>
                                <p class="small mb-0">Laboratorium komputer dan perangkat lunak yang memadai untuk praktik</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100">
                                <h6 class="text-trpl-red"><i class="fas fa-handshake me-2"></i>Kerjasama Industri</h6>
                                <p class="small mb-0">Program magang dan kerjasama dengan perusahaan teknologi terkemuka</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Future Vision -->
            <div class="card">
                <div class="card-body">
                    <h4 class="text-trpl-red mb-3">Visi Ke Depan</h4>
                    <p class="mb-4">
                        Program Studi TRPL berkomitmen untuk terus berkembang dan berinovasi dalam memberikan 
                        pendidikan berkualitas tinggi. Kami bertekad untuk:
                    </p>
                    <ul class="mb-4">
                        <li>Meningkatkan kualitas pendidikan melalui pengembangan kurikulum yang berkelanjutan</li>
                        <li>Memperkuat kerjasama dengan industri dan institusi pendidikan lainnya</li>
                        <li>Mengembangkan penelitian dan pengabdian masyarakat yang berkualitas</li>
                        <li>Mempersiapkan lulusan yang siap bersaing di pasar kerja global</li>
                    </ul>
                    <p class="mb-0">
                        <strong>Wassalamu'alaikum Wr. Wb.</strong><br>
                        <em>Ketua Program Studi TRPL</em><br>
                        <em>Politeknik Jambi</em>
                    </p>
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
                <a href="{{ route('profil.dosen') }}" class="sidebar-link">
                    <i class="fas fa-chalkboard-teacher me-2"></i>Dosen
                </a>
                <a href="{{ route('profil.akreditasi') }}" class="sidebar-link">
                    <i class="fas fa-certificate me-2"></i>Akreditasi
                </a>
            </div>
            
            <!-- Kaprodi Info -->
            <div class="sidebar-section">
                <h5>INFORMASI KAPRODI</h5>
                <div class="text-center p-3 bg-light rounded mb-3">
                    <i class="fas fa-user-tie fa-3x text-trpl-red mb-2"></i>
                    <h6>Ketua Program Studi</h6>
                    <p class="small text-muted mb-0">TRPL</p>
                </div>
                <div class="text-center p-3 bg-light rounded mb-3">
                    <i class="fas fa-building fa-3x text-trpl-red mb-2"></i>
                    <h6>Politeknik Jambi</h6>
                    <p class="small text-muted mb-0">Institusi Pendidikan</p>
                </div>
                <div class="text-center p-3 bg-light rounded">
                    <i class="fas fa-map-marker-alt fa-3x text-trpl-red mb-2"></i>
                    <h6>Kota Jambi</h6>
                    <p class="small text-muted mb-0">Provinsi Jambi</p>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="sidebar-section">
                <h5>LINK CEPAT</h5>
                <a href="#" class="sidebar-link">
                    <i class="fas fa-envelope me-2"></i>Email Kaprodi
                </a>
                <a href="#" class="fas fa-phone me-2"></i>Kontak Langsung
                </a>
                <a href="#" class="sidebar-link">
                    <i class="fas fa-calendar me-2"></i>Jadwal Konsultasi
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
