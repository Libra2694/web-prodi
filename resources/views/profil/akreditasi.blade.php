@extends('layouts.app')

@section('title', 'Akreditasi - Program Studi TRPL')

@section('content')
<div class="container">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Page Header -->
            <div class="mb-4">
                <h1 class="h2 text-trpl-red">Akreditasi Program Studi TRPL</h1>
                <p class="text-muted">Informasi akreditasi dan penjaminan mutu Program Studi Teknologi Rekayasa Perangkat Lunak</p>
                <img src="{{ asset('image/akreditasi.png') }}" 
                     alt="Akreditasi TRPL" 
                     class="img-fluid rounded mb-3" 
                     style="max-width: 100%; height: auto;">
            </div>
            
            <!-- Accreditation Status -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="text-trpl-red mb-3">Status Akreditasi</h3>
                            <p class="mb-4">
                                Program Studi Teknologi Rekayasa Perangkat Lunak (TRPL) telah mendapatkan akreditasi 
                                dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) dengan peringkat yang 
                                menunjukkan kualitas pendidikan yang baik.
                            </p>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="border rounded p-3 text-center">
                                        <h5 class="text-trpl-red mb-2">Peringkat Akreditasi</h5>
                                        <div class="display-4 text-trpl-red fw-bold">Baik</div>
                                        <p class="small text-muted mb-0">Terakreditasi BAN-PT</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="border rounded p-3 text-center">
                                        <h5 class="text-trpl-red mb-2">Masa Berlaku</h5>
                                        <div class="h4 text-trpl-red fw-bold">2020-2025</div>
                                        <p class="small text-muted mb-0">5 Tahun</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="bg-light rounded p-4">
                                <i class="fas fa-certificate fa-5x text-trpl-red mb-3"></i>
                                <h5>Akreditasi BAN-PT</h5>
                                <p class="small text-muted mb-0">Resmi & Terakreditasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Accreditation Details -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-trpl-red mb-3">Detail Akreditasi</h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100">
                                <h6 class="text-trpl-red"><i class="fas fa-info-circle me-2"></i>Nomor Akreditasi</h6>
                                <p class="mb-0">BAN-PT No. 1226/SK/BAN-PT/PB-PS/ST/II/2022</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100">
                                <h6 class="text-trpl-red"><i class="fas fa-calendar me-2"></i>Tanggal Penetapan</h6>
                                <p class="mb-0">22 Februari 2022</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100">
                                <h6 class="text-trpl-red"><i class="fas fa-building me-2"></i>Lembaga Akreditasi</h6>
                                <p class="mb-0">BAN-PT (Badan Akreditasi Nasional Perguruan Tinggi)</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100">
                                <h6 class="text-trpl-red"><i class="fas fa-graduation-cap me-2"></i>Jenjang</h6>
                                <p class="mb-0">Sarjana Terapan (D-IV)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Accreditation Criteria -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-trpl-red mb-3">Kriteria Akreditasi</h4>
                    <p class="mb-3">Program Studi TRPL dinilai berdasarkan 7 kriteria akreditasi BAN-PT:</p>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3">
                                <h6 class="text-trpl-red"><i class="fas fa-star me-2"></i>Kriteria 1: Visi, Misi, Tujuan, dan Sasaran</h6>
                                <p class="small mb-0">Keselarasan visi, misi, tujuan, dan sasaran program studi</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3">
                                <h6 class="text-trpl-red"><i class="fas fa-users me-2"></i>Kriteria 2: Tata Pamong, Tata Kelola, dan Kerjasama</h6>
                                <p class="small mb-0">Sistem tata pamong dan kerjasama program studi</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3">
                                <h6 class="text-trpl-red"><i class="fas fa-graduation-cap me-2"></i>Kriteria 3: Mahasiswa</h6>
                                <p class="small mb-0">Kualitas input dan proses pembelajaran mahasiswa</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3">
                                <h6 class="text-trpl-red"><i class="fas fa-chalkboard-teacher me-2"></i>Kriteria 4: Sumber Daya Manusia</h6>
                                <p class="small mb-0">Kualitas dan kuantitas tenaga pendidik dan kependidikan</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3">
                                <h6 class="text-trpl-red"><i class="fas fa-tools me-2"></i>Kriteria 5: Keuangan, Sarana, dan Prasarana</h6>
                                <p class="small mb-0">Kecukupan dan kualitas sarana prasarana</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3">
                                <h6 class="text-trpl-red"><i class="fas fa-book me-2"></i>Kriteria 6: Pendidikan</h6>
                                <p class="small mb-0">Kualitas proses pembelajaran dan kurikulum</p>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="border rounded p-3">
                                <h6 class="text-trpl-red"><i class="fas fa-chart-line me-2"></i>Kriteria 7: Penelitian dan Pengabdian</h6>
                                <p class="small mb-0">Kualitas dan kuantitas penelitian dan pengabdian masyarakat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Quality Assurance -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-trpl-red mb-3">Penjaminan Mutu</h4>
                    <p class="mb-3">Program Studi TRPL berkomitmen untuk terus meningkatkan kualitas pendidikan melalui:</p>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chart-bar fa-2x text-trpl-red me-3"></i>
                                <div>
                                    <h6 class="mb-1">Evaluasi Berkelanjutan</h6>
                                    <p class="small mb-0">Monitoring dan evaluasi program studi secara berkala</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-sync-alt fa-2x text-trpl-red me-3"></i>
                                <div>
                                    <h6 class="mb-1">Perbaikan Berkelanjutan</h6>
                                    <p class="small mb-0">Implementasi program perbaikan berdasarkan evaluasi</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-handshake fa-2x text-trpl-red me-3"></i>
                                <div>
                                    <h6 class="mb-1">Kerjasama Stakeholder</h6>
                                    <p class="small mb-0">Kolaborasi dengan industri dan alumni</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-globe fa-2x text-trpl-red me-3"></i>
                                <div>
                                    <h6 class="mb-1">Benchmarking</h6>
                                    <p class="small mb-0">Perbandingan dengan program studi sejenis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Future Plans -->
            <div class="card">
                <div class="card-body">
                    <h4 class="text-trpl-red mb-3">Rencana Pengembangan</h4>
                    <p class="mb-3">Untuk meningkatkan akreditasi ke peringkat yang lebih tinggi, Program Studi TRPL berencana:</p>
                    <ul class="mb-4">
                        <li>Meningkatkan kualitas penelitian dan publikasi dosen</li>
                        <li>Memperkuat kerjasama dengan industri dan institusi pendidikan</li>
                        <li>Mengembangkan kurikulum berbasis outcome-based education</li>
                        <li>Meningkatkan kualitas sarana prasarana pembelajaran</li>
                        <li>Memperkuat sistem penjaminan mutu internal</li>
                    </ul>
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Informasi:</strong> Program Studi TRPL akan melakukan re-akreditasi pada tahun 2025 
                        untuk mempertahankan dan meningkatkan peringkat akreditasi sesuai dengan ketentuan BAN-PT.
                    </div>
                    
                    <!-- Dokumen Akreditasi -->
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="text-trpl-red mb-3">
                                <i class="fas fa-file-certificate me-2"></i>Dokumen Akreditasi
                            </h5>
                            <p class="mb-3">Program Studi TRPL telah mendapatkan akreditasi resmi dari BAN-PT dengan dokumen:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success me-2"></i><strong>Nomor SK:</strong> 1226/SK/BAN-PT/PB-PS/ST/II/2022</li>
                                        <li><i class="fas fa-check text-success me-2"></i><strong>Tanggal:</strong> 22 Februari 2022</li>
                                        <li><i class="fas fa-check text-success me-2"></i><strong>Peringkat:</strong> Baik</li>
                                        <li><i class="fas fa-check text-success me-2"></i><strong>Masa Berlaku:</strong> 20 April 2020 - 20 April 2025</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success me-2"></i><strong>Direktur:</strong> Prof. Ari Purbayanto, Ph.D</li>
                                        <li><i class="fas fa-check text-success me-2"></i><strong>Lembaga:</strong> BAN-PT</li>
                                        <li><i class="fas fa-check text-success me-2"></i><strong>Status:</strong> Terakreditasi Resmi</li>
                                        <li><i class="fas fa-check text-success me-2"></i><strong>Jenjang:</strong> Sarjana Terapan (D-IV)</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Download Dokumen -->
                            <div class="mt-4 p-4 bg-light rounded">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h6 class="text-trpl-red mb-2">
                                            <i class="fas fa-download me-2"></i>Download Dokumen Akreditasi
                                        </h6>
                                        <p class="small text-muted mb-0">
                                            Unduh surat keputusan akreditasi BAN-PT Program Studi TRPL dalam format gambar PNG
                                        </p>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <a href="{{ asset('image/surat-akreditasi.png') }}" 
                                           download="Surat-Akreditasi-TRPL-BAN-PT.png"
                                           class="btn btn-trpl-red btn-sm">
                                            <i class="fas fa-download me-2"></i>Download
                                        </a>
                                    </div>
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
                <a href="{{ route('profil.dosen') }}" class="sidebar-link">
                    <i class="fas fa-chalkboard-teacher me-2"></i>Dosen
                </a>
            </div>
            
            <!-- Accreditation Info -->
            <div class="sidebar-section">
                <h5>INFO AKREDITASI</h5>
                <div class="text-center p-3 bg-light rounded mb-3">
                    <i class="fas fa-certificate fa-3x text-trpl-red mb-2"></i>
                    <h6>Peringkat Baik</h6>
                    <p class="small text-muted mb-0">Terakreditasi BAN-PT</p>
                </div>
                <div class="text-center p-3 bg-light rounded mb-3">
                    <i class="fas fa-calendar fa-3x text-trpl-red mb-2"></i>
                    <h6>Masa Berlaku</h6>
                    <p class="small text-muted mb-0">20 April 2020 - 20 April 2025</p>
                </div>
                <div class="text-center p-3 bg-light rounded">
                    <i class="fas fa-building fa-3x text-trpl-red mb-2"></i>
                    <h6>BAN-PT</h6>
                    <p class="small text-muted mb-0">Lembaga Akreditasi</p>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="sidebar-section">
                <h5>LINK CEPAT</h5>
                <a href="{{ asset('image/surat-akreditasi.png') }}" 
                   download="Surat-Akreditasi-TRPL-BAN-PT.png"
                   class="sidebar-link">
                    <i class="fas fa-download me-2"></i>Download Sertifikat
                </a>
                <a href="https://banpt.or.id" target="_blank" class="sidebar-link">
                    <i class="fas fa-external-link-alt me-2"></i>Website BAN-PT
                </a>
                <a href="{{ asset('image/surat-akreditasi.png') }}" 
                   target="_blank"
                   class="sidebar-link">
                    <i class="fas fa-eye me-2"></i>Lihat Dokumen
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
