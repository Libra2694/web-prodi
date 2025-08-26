@extends('layouts.admin')

@section('title', 'Kelola Berita - Admin Panel TRPL')

@section('page-title', 'Kelola Berita')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Berita</h5>
        <a href="{{ route('admin.news.create') }}" class="btn btn-trpl-red">
            <i class="fas fa-plus me-2"></i>Tambah Berita Baru
        </a>
    </div>
    <div class="card-body">
        @if($news->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Hits</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                @if($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" 
                                         style="width: 60px; height: 40px; object-fit: cover;" class="rounded">
                                @else
                                    <div class="bg-secondary d-flex align-items-center justify-content-center rounded" 
                                         style="width: 60px; height: 40px;">
                                        <i class="fas fa-image text-white"></i>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <strong>{{ Str::limit($item->title, 60) }}</strong>
                                <br>
                                <small class="text-muted">{{ Str::limit($item->content, 80) }}</small>
                            </td>
                            <td>{{ $item->author }}</td>
                            <td>
                                @if($item->status == 'published')
                                    <span class="badge bg-success">Published</span>
                                @else
                                    <span class="badge bg-warning">Draft</span>
                                @endif
                            </td>
                            <td>{{ $item->created_at->format('d M Y') }}</td>
                            <td>{{ $item->hits }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('news.show', $item->slug) }}" target="_blank" 
                                       class="btn btn-sm btn-outline-info" title="Lihat">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.news.edit', $item) }}" 
                                       class="btn btn-sm btn-outline-primary" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="POST" action="{{ route('admin.news.destroy', $item) }}" 
                                          class="d-inline" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $news->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-newspaper fa-4x text-muted mb-3"></i>
                <h5 class="text-muted">Belum ada berita</h5>
                <p class="text-muted">Mulai dengan menambahkan berita pertama Anda</p>
                <a href="{{ route('admin.news.create') }}" class="btn btn-trpl-red">
                    <i class="fas fa-plus me-2"></i>Tambah Berita Pertama
                </a>
            </div>
        @endif
    </div>
</div>
@endsection

