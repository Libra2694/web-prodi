@extends('layouts.app')

@section('title', 'Hasil Pencarian: ' . $query . ' - Program Studi TRPL')

@section('content')
<div class="container">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Search Results Header -->
            <div class="mb-4">
                <h1 class="h2 text-trpl-red">Hasil Pencarian</h1>
                <p class="text-muted">
                    Ditemukan {{ $news->total() }} berita untuk pencarian "<strong>{{ $query }}</strong>"
                </p>
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
                                       placeholder="Cari berita..." value="{{ $query }}">
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
            
            <!-- Search Results -->
            @if($news->count() > 0)
                <div class="row">
                    @foreach($news as $item)
                    <div class="col-md-6 mb-4">
                        <div class="card news-card h-100">
                            <div class="position-relative">
                                @if($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" 
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
                    {{ $news->appends(['q' => $query])->links() }}
                </div>
            @else
                <div class="text-center py-5">
                    <i class="fas fa-search fa-4x text-muted mb-3"></i>
                    <h5 class="text-muted">Tidak ada hasil ditemukan</h5>
                    <p class="text-muted">
                        Tidak ada berita yang cocok dengan pencarian "<strong>{{ $query }}</strong>"
                    </p>
                    <div class="d-flex gap-2 justify-content-center">
                        <a href="{{ route('news.index') }}" class="btn btn-trpl-red">
                            <i class="fas fa-newspaper me-2"></i>Lihat Semua Berita
                        </a>
                        <a href="{{ route('home') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-home me-2"></i>Kembali ke Beranda
                        </a>
                    </div>
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
            
            <!-- Search Tips -->
            <div class="sidebar-section">
                <h5>TIPS PENCARIAN</h5>
                <ul class="list-unstyled small">
                    <li class="mb-2">
                        <i class="fas fa-lightbulb text-warning me-2"></i>
                        Gunakan kata kunci yang spesifik
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-lightbulb text-warning me-2"></i>
                        Coba kata kunci yang berbeda
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-lightbulb text-warning me-2"></i>
                        Periksa ejaan kata kunci
                    </li>
                </ul>
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
            
            <!-- Navigation -->
            <div class="sidebar-section">
                <h5>NAVIGASI</h5>
                <a href="{{ route('news.index') }}" class="sidebar-link">
                    <i class="fas fa-newspaper me-2"></i>Semua Berita
                </a>
                <a href="{{ route('home') }}" class="sidebar-link">
                    <i class="fas fa-home me-2"></i>Beranda
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

