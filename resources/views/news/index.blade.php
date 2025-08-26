@extends('layouts.app')

@section('title', 'Berita - Program Studi TRPL')

@section('content')
<div class="container">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Page Header -->
            <div class="mb-4">
                <h1 class="h2 text-trpl-red">Berita Program Studi TRPL</h1>
                <p class="text-muted">Informasi terbaru seputar kegiatan, prestasi, dan perkembangan Program Studi TRPL</p>
            </div>
            
            <!-- Search Bar -->
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('news.search') }}" method="GET" class="row g-3">
                        <div class="col-md-8">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-search"></i>
                                </span>
                                <input type="text" class="form-control" name="q" 
                                       placeholder="Cari berita..." value="{{ request('q') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-trpl-red w-100">
                                <i class="fas fa-search me-2"></i>Cari
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- News List -->
            @if($news->count() > 0)
                <div class="row">
                    @foreach($news as $item)
                    <div class="col-md-6 mb-4">
                        <div class="card news-card h-100">
                            <div class="position-relative">
                                @if($item->image)
                                    <img src="{{ asset($item->image) }}" class="card-img-top" 
                                         alt="{{ $item->title }}" style="height: 200px; object-fit: cover;">
                                @else
                                    <div class="bg-secondary d-flex align-items-center justify-content-center" 
                                         style="height: 200px;">
                                        <i class="fas fa-newspaper fa-3x text-white"></i>
                                    </div>
                                @endif
                                <div class="position-absolute top-0 start-0 m-2">
                                    <span class="badge bg-trpl-red">{{ ucfirst($item->status) }}</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center text-muted small mb-2">
                                    <i class="fas fa-user me-2"></i>{{ $item->author }}
                                    <i class="fas fa-calendar ms-3 me-2"></i>{{ $item->created_at->format('d M Y') }}
                                    <i class="fas fa-eye ms-3 me-2"></i>{{ $item->hits }}
                                </div>
                                <h5 class="card-title">{{ Str::limit($item->title, 80) }}</h5>
                                <p class="card-text text-muted">
                                    {{ Str::limit(strip_tags($item->content), 120) }}
                                </p>
                                <a href="{{ route('news.show', $item->slug) }}" class="btn btn-outline-primary">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $news->links() }}
                </div>
            @else
                <div class="text-center py-5">
                    <i class="fas fa-newspaper fa-4x text-muted mb-3"></i>
                    <h5 class="text-muted">Tidak ada berita ditemukan</h5>
                    <p class="text-muted">
                        @if(request('q'))
                            Tidak ada berita yang cocok dengan pencarian "{{ request('q') }}"
                        @else
                            Belum ada berita yang dipublikasikan
                        @endif
                    </p>
                    @if(request('q'))
                        <a href="{{ route('news.index') }}" class="btn btn-trpl-red">
                            <i class="fas fa-arrow-left me-2"></i>Kembali ke Semua Berita
                        </a>
                    @endif
                </div>
            @endif
        </div>
        
        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Register Button -->
            <div class="sidebar-section text-center">
                <a href="#" class="btn btn-trpl-red btn-lg w-100 mb-3">DAFTAR SEKARANG</a>
                <a href="#" class="btn btn-trpl-outline btn-lg w-100">DOWNLOAD BROCHURE</a>
            </div>
            
            <!-- Frequently Read -->
            <div class="sidebar-section">
                <h5>SERING DIBACA</h5>
                <a href="#" class="sidebar-link">> Dosen Prodi TRPL</a>
                <a href="#" class="sidebar-link">> Sambutan Kaprodi</a>
                <a href="#" class="sidebar-link">> Tugas Akhir</a>
                <a href="#" class="sidebar-link">> Penelitian Dosen</a>
                <a href="#" class="sidebar-link">> Pengabdian Masyarakat</a>
            </div>
            
            <!-- Download Documents -->
            <div class="sidebar-section">
                <h5>DOWNLOAD DOKUMEN</h5>
                <a href="#" class="sidebar-link">> Panduan Magang</a>
                <a href="#" class="sidebar-link">> Panduan Proyek Akhir</a>
                <a href="#" class="sidebar-link">> Panduan Akademik</a>
            </div>
            
            <!-- Popular News -->
            <div class="sidebar-section">
                <h5>BERITA POPULER</h5>
                @foreach($popularNews->take(3) as $item)
                <div class="mb-3">
                    <a href="{{ route('news.show', $item->slug) }}" class="text-decoration-none">
                        <h6 class="text-dark">{{ Str::limit($item->title, 50) }}</h6>
                    </a>
                    <small class="text-muted">
                        <i class="fas fa-calendar me-1"></i>{{ $item->created_at->format('d M Y') }}
                        <i class="fas fa-eye ms-2 me-1"></i>{{ $item->hits }}
                    </small>
                </div>
                @endforeach
            </div>
            
            <!-- Back to Home -->
            <div class="sidebar-section">
                <h5>NAVIGASI</h5>
                <a href="{{ route('home') }}" class="sidebar-link">
                    <i class="fas fa-home me-2"></i>Beranda
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

