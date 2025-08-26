@extends('layouts.app')

@section('title', 'Informasi - Program Studi TRPL')

@section('content')
<div class="container">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Page Header -->
            <div class="mb-4">
                <h1 class="h2 text-trpl-red">Informasi & Pengumuman</h1>
                <p class="text-muted">Informasi penting dan pengumuman terkini Program Studi TRPL</p>
            </div>
            
            <!-- Important Information -->
            <div class="card mb-4">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0"><i class="fas fa-exclamation-triangle me-2"></i>Informasi Penting</h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-warning mb-3">
                        <h6 class="mb-2">Pendaftaran Mahasiswa Baru 2025/2026</h6>
                        <p class="mb-2">
                            Pendaftaran mahasiswa baru Program Studi TRPL untuk tahun akademik 2025/2026 
                            akan dibuka pada <strong>1 Agustus 2025</strong>.
                        </p>
                        <ul class="mb-0">
                            <li>Kuota: 40 mahasiswa</li>
                            <li>Biaya pendaftaran: Rp 200.000</li>
                            <li>Deadline: 31 Agustus 2025</li>
                        </ul>
                    </div>
                    
                    <div class="alert alert-info mb-0">
                        <h6 class="mb-2">Jadwal UAS Semester Genap 2024/2025</h6>
                        <p class="mb-2">
                            Ujian Akhir Semester (UAS) akan dilaksanakan pada <strong>15-25 Juli 2025</strong>.
                        </p>
                        <p class="mb-0">
                            <strong>Catatan:</strong> Mahasiswa wajib mengikuti UAS sesuai jadwal yang telah ditentukan.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Academic Calendar -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Kalender Akademik 2025/2026</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-trpl-red">Semester Ganjil 2025/2026</h6>
                            <table class="table table-sm">
                                <tr>
                                    <td>Pendaftaran</td>
                                    <td>1-31 Agustus 2025</td>
                                </tr>
                                <tr>
                                    <td>Kuliah</td>
                                    <td>2 September 2025</td>
                                </tr>
                                <tr>
                                    <td>UTS</td>
                                    <td>20-25 Oktober 2025</td>
                                </tr>
                                <tr>
                                    <td>UAS</td>
                                    <td>15-20 Januari 2026</td>
                                </tr>
                                <tr>
                                    <td>Yudisium</td>
                                    <td>25 Januari 2026</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-trpl-red">Semester Genap 2025/2026</h6>
                            <table class="table table-sm">
                                <tr>
                                    <td>Pendaftaran</td>
                                    <td>1-28 Februari 2026</td>
                                </tr>
                                <tr>
                                    <td>Kuliah</td>
                                    <td>2 Maret 2026</td>
                                </tr>
                                <tr>
                                    <td>UTS</td>
                                    <td>20-25 April 2026</td>
                                </tr>
                                <tr>
                                    <td>UAS</td>
                                    <td>15-20 Juli 2026</td>
                                </tr>
                                <tr>
                                    <td>Yudisium</td>
                                    <td>25 Juli 2026</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Downloads -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Download Dokumen</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-file-pdf fa-2x text-danger me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Panduan Akademik</h6>
                                        <small class="text-muted">PDF, 2.5 MB</small>
                                    </div>
                                </div>
                                <p class="small mb-2">
                                    Panduan lengkap untuk mahasiswa Program Studi TRPL.
                                </p>
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-download me-2"></i>Download
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-file-pdf fa-2x text-danger me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Panduan Magang</h6>
                                        <small class="text-muted">PDF, 1.8 MB</small>
                                    </div>
                                </div>
                                <p class="small mb-2">
                                    Panduan pelaksanaan magang industri mahasiswa.
                                </p>
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-download me-2"></i>Download
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-file-pdf fa-2x text-danger me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Panduan Proyek Akhir</h6>
                                        <small class="text-muted">PDF, 3.2 MB</small>
                                    </div>
                                </div>
                                <p class="small mb-2">
                                    Panduan penulisan dan presentasi proyek akhir.
                                </p>
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-download me-2"></i>Download
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-file-pdf fa-2x text-danger me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Brosur Program Studi</h6>
                                        <small class="text-muted">PDF, 1.5 MB</small>
                                    </div>
                                </div>
                                <p class="small mb-2">
                                    Brosur informasi Program Studi TRPL.
                                </p>
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-download me-2"></i>Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Information -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Informasi Kontak</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h6 class="text-trpl-red"><i class="fas fa-clock me-2"></i>Jam Operasional</h6>
                            <p class="mb-2">
                                <strong>Senin - Jumat:</strong> 08:00 - 16:00 WIB<br>
                                <strong>Sabtu:</strong> 08:00 - 12:00 WIB<br>
                                <strong>Minggu & Hari Libur:</strong> Tutup
                            </p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h6 class="text-trpl-red"><i class="fas fa-phone me-2"></i>Kontak Darurat</h6>
                            <p class="mb-2">
                                <strong>Kaprodi:</strong> 082280069039<br>
                                <strong>Admin:</strong> 081289273486<br>
                                <strong>Email:</strong> trpl@politeknikjambi.ac.id
                            </p>
                        </div>
                    </div>
                    <div class="alert alert-info mb-0">
                        <h6 class="mb-2"><i class="fas fa-info-circle me-2"></i>Catatan Penting</h6>
                        <ul class="mb-0">
                            <li>Untuk informasi mendesak, gunakan WhatsApp</li>
                            <li>Respon email dalam 24 jam kerja</li>
                            <li>Kunjungan offline dengan appointment</li>
                        </ul>
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
                <div class="mb-3">
                    <h6 class="text-trpl-red">Status Pendaftaran</h6>
                    <span class="badge bg-success">Dibuka</span>
                    <p class="small mb-0">1-31 Agustus 2025</p>
                </div>
                <div class="mb-3">
                    <h6 class="text-trpl-red">Kuota Tersedia</h6>
                    <span class="badge bg-info">40 Mahasiswa</span>
                    <p class="small mb-0">Program Studi TRPL</p>
                </div>
                <div class="mb-0">
                    <h6 class="text-trpl-red">Biaya Pendaftaran</h6>
                    <span class="badge bg-warning">Rp 200.000</span>
                    <p class="small mb-0">Satu kali bayar</p>
                </div>
            </div>
            
            <!-- Important Dates -->
            <div class="sidebar-section">
                <h5>TANGGAL PENTING</h5>
                <div class="mb-3">
                    <h6 class="text-trpl-red">Deadline Pendaftaran</h6>
                    <p class="small mb-1">31 Agustus 2025</p>
                    <small class="text-muted">23:59 WIB</small>
                </div>
                <div class="mb-3">
                    <h6 class="text-trpl-red">Pengumuman Lulus</h6>
                    <p class="small mb-1">5 September 2025</p>
                    <small class="text-muted">Website & Email</small>
                </div>
                <div class="mb-0">
                    <h6 class="text-trpl-red">Daftar Ulang</h6>
                    <p class="small mb-1">6-8 September 2025</p>
                    <small class="text-muted">Kampus TRPL</small>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="sidebar-section">
                <h5>LINK CEPAT</h5>
                <a href="{{ route('about') }}" class="sidebar-link">
                    <i class="fas fa-info-circle me-2"></i>Profil Program Studi
                </a>
                <a href="{{ route('academic') }}" class="sidebar-link">
                    <i class="fas fa-graduation-cap me-2"></i>Informasi Akademik
                </a>
                <a href="{{ route('news.index') }}" class="sidebar-link">
                    <i class="fas fa-newspaper me-2"></i>Berita & Pengumuman
                </a>
                <a href="{{ route('contact') }}" class="sidebar-link">
                    <i class="fas fa-envelope me-2"></i>Kontak
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

