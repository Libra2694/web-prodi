@extends('layouts.admin')

@section('title', 'Dashboard - Admin Panel TRPL')

@section('page-title', 'Dashboard')

@section('content')
<div class="row">
    <!-- Statistics Cards -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card card-stats">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Berita</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $totalNews }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="stats-icon bg-primary">
                            <i class="fas fa-newspaper"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card card-stats">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Berita Dipublikasi</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $publishedNews }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="stats-icon bg-success">
                            <i class="fas fa-check-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card card-stats">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Berita Draft</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $draftNews }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="stats-icon bg-warning">
                            <i class="fas fa-edit"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card card-stats">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Hits</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $recentNews->sum('hits') }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="stats-icon bg-info">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Recent News -->
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Berita Terbaru</h5>
                <a href="{{ route('admin.news.index') }}" class="btn btn-sm btn-trpl-red">Lihat Semua</a>
            </div>
            <div class="card-body">
                @if($recentNews->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th>Hits</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentNews as $news)
                                <tr>
                                    <td>
                                        <strong>{{ Str::limit($news->title, 50) }}</strong>
                                        <br>
                                        <small class="text-muted">oleh {{ $news->author }}</small>
                                    </td>
                                    <td>
                                        @if($news->status == 'published')
                                            <span class="badge bg-success">Published</span>
                                        @else
                                            <span class="badge bg-warning">Draft</span>
                                        @endif
                                    </td>
                                    <td>{{ $news->created_at->format('d M Y') }}</td>
                                    <td>{{ $news->hits }}</td>
                                    <td>
                                        <a href="{{ route('admin.news.edit', $news) }}" class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-4">
                        <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                        <p class="text-muted">Belum ada berita yang ditambahkan</p>
                        <a href="{{ route('admin.news.create') }}" class="btn btn-trpl-red">
                            <i class="fas fa-plus me-2"></i>Tambah Berita Pertama
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    
    <!-- Quick Actions -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Aksi Cepat</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.news.create') }}" class="btn btn-trpl-red">
                        <i class="fas fa-plus me-2"></i>Tambah Berita Baru
                    </a>
                    <a href="{{ route('admin.news.index') }}" class="btn btn-outline-primary">
                        <i class="fas fa-list me-2"></i>Kelola Semua Berita
                    </a>
                    <a href="{{ route('home') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-eye me-2"></i>Lihat Website
                    </a>
                </div>
            </div>
        </div>
        
        <!-- System Info -->
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="mb-0">Informasi Sistem</h5>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-6">
                        <div class="border-end">
                            <h6 class="text-muted">Laravel</h6>
                            <p class="mb-0">{{ app()->version() }}</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <h6 class="text-muted">PHP</h6>
                        <p class="mb-0">{{ phpversion() }}</p>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <small class="text-muted">
                        <i class="fas fa-clock me-1"></i>
                        {{ now()->format('d M Y H:i:s') }}
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






