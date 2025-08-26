@extends('layouts.app')

@section('title', $news->title . ' - Program Studi TRPL')

@section('content')
<div class="container">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('news.index') }}">Berita</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($news->title, 50) }}</li>
                </ol>
            </nav>
            
            <!-- News Content -->
            <article class="card">
                <div class="card-body">
                    <!-- News Header -->
                    <header class="mb-4">
                        <h1 class="h2 mb-3">{{ $news->title }}</h1>
                        <div class="d-flex align-items-center text-muted mb-3">
                            <i class="fas fa-user me-2"></i>{{ $news->author }}
                            <i class="fas fa-calendar ms-3 me-2"></i>{{ $news->created_at->format('d M Y') }}
                            <i class="fas fa-eye ms-3 me-2"></i>{{ $news->hits }} hits
                            <span class="badge bg-trpl-red ms-3">{{ ucfirst($news->status) }}</span>
                        </div>
                    </header>
                    
                    <!-- News Image -->
                    @if($news->image)
                        <div class="text-center mb-4">
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" 
                                 class="img-fluid rounded" style="max-height: 400px;">
                        </div>
                    @endif
                    
                    <!-- News Content -->
                    <div class="news-content">
                        {!! $news->content !!}
                    </div>
                    
                    <!-- Share Buttons -->
                    <div class="mt-4 pt-4 border-top">
                        <h6 class="mb-3">Bagikan berita ini:</h6>
                        <div class="d-flex gap-2">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                               target="_blank" class="btn btn-outline-primary btn-sm">
                                <i class="fab fa-facebook-f me-2"></i>Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($news->title) }}" 
                               target="_blank" class="btn btn-outline-info btn-sm">
                                <i class="fab fa-twitter me-2"></i>Twitter
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($news->title . ' - ' . request()->url()) }}" 
                               target="_blank" class="btn btn-outline-success btn-sm">
                                <i class="fab fa-whatsapp me-2"></i>WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            
            <!-- Related News -->
            @if($relatedNews->count() > 0)
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="mb-0">Berita Terkait</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($relatedNews as $related)
                        <div class="col-md-6 mb-3">
                            <div class="card h-100">
                                <div class="row g-0">
                                    <div class="col-4">
                                        @if($related->image)
                                            <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->title }}" 
                                                 class="img-fluid rounded-start h-100" style="object-fit: cover;">
                                        @else
                                            <div class="bg-secondary d-flex align-items-center justify-content-center h-100">
                                                <i class="fas fa-newspaper fa-2x text-white"></i>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h6 class="card-title">{{ Str::limit($related->title, 50) }}</h6>
                                            <p class="card-text small text-muted">
                                                {{ Str::limit(strip_tags($related->content), 80) }}
                                            </p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <small class="text-muted">{{ $related->created_at->format('d M Y') }}</small>
                                                <a href="{{ route('news.show', $related->slug) }}" class="btn btn-sm btn-outline-primary">Baca</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
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
            
            <!-- Back to News -->
            <div class="sidebar-section">
                <h5>NAVIGASI</h5>
                <a href="{{ route('news.index') }}" class="sidebar-link">
                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar Berita
                </a>
                <a href="{{ route('home') }}" class="sidebar-link">
                    <i class="fas fa-home me-2"></i>Beranda
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
.news-content {
    line-height: 1.8;
    font-size: 1.1rem;
}

.news-content p {
    margin-bottom: 1.5rem;
}

.news-content h2, .news-content h3, .news-content h4 {
    color: var(--trpl-red);
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.news-content img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 1rem 0;
}

.news-content blockquote {
    border-left: 4px solid var(--trpl-red);
    padding-left: 1rem;
    margin: 1.5rem 0;
    font-style: italic;
    color: #666;
}
</style>
@endsection

