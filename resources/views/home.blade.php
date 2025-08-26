@extends('layouts.app')

@section('title', 'Beranda - Program Studi TRPL')

@section('content')
<div class="container">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Featured News -->
            <div class="row mb-4">
                @foreach($featuredNews as $news)
                <div class="col-md-6 mb-3">
                    <div class="card news-card h-100">
                        <div class="position-relative">
                            @if($news->image)
                                <img src="{{ asset($news->image) }}" class="card-img-top" alt="{{ $news->title }}" style="height: 100px; object-fit: cover;">
                            @else
                                <div class="bg-secondary d-flex align-items-center justify-content-center" style="height: 100px;">
                                    <i class="fas fa-newspaper fa-3x text-white"></i>
                                </div>
                            @endif
                            <div class="position-absolute top-0 start-0 m-2">
                                <span class="badge bg-trpl-red">{{ $news->status }}</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center text-muted small mb-2">
                                <i class="fas fa-user me-2"></i>{{ $news->author }}
                                <i class="fas fa-calendar ms-3 me-2"></i>{{ $news->created_at->format('d M Y') }}
                                <i class="fas fa-eye ms-3 me-2"></i>Hits: {{ $news->hits }}
                            </div>
                            <h5 class="card-title">{{ $news->title }}</h5>
                            <p class="card-text text-muted">
                                {{ Str::limit(strip_tags($news->content), 120) }}
                            </p>
                            <a href="{{ route('news.show', $news->slug) }}" class="text-warning fw-bold">
                                Read more: {{ $news->title }}
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Recent News -->
            <h4 class="text-trpl-red mb-3">Berita Terbaru</h4>
            <div class="row">
                @foreach($recentNews->skip(2) as $news)
                <div class="col-md-6 mb-3">
                    <div class="card news-card h-100">
                        <div class="row g-0">
                            <div class="col-4">
                                @if($news->image)
                                    <img src="{{ asset($news->image) }}" class="img-fluid rounded-start h-100" alt="{{ $news->title }}" style="object-fit: cover;">
                                @else
                                    <div class="bg-secondary d-flex align-items-center justify-content-center h-100">
                                        <i class="fas fa-newspaper fa-2x text-white"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h6 class="card-title">{{ Str::limit($news->title, 60) }}</h6>
                                    <p class="card-text small text-muted">
                                        {{ Str::limit(strip_tags($news->content), 80) }}
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">{{ $news->created_at->format('d M Y') }}</small>
                                        <a href="{{ route('news.show', $news->slug) }}" class="btn btn-sm btn-outline-primary">Baca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
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
                @foreach($popularNews->take(3) as $news)
                <div class="mb-3">
                    <a href="{{ route('news.show', $news->slug) }}" class="text-decoration-none">
                        <h6 class="text-dark">{{ Str::limit($news->title, 50) }}</h6>
                    </a>
                    <small class="text-muted">
                        <i class="fas fa-calendar me-1"></i>{{ $news->created_at->format('d M Y') }}
                        <i class="fas fa-eye ms-2 me-1"></i>{{ $news->hits }}
                    </small>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

