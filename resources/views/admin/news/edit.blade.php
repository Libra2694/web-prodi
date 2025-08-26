@extends('layouts.admin')

@section('title', 'Edit Berita - Admin Panel TRPL')

@section('page-title', 'Edit Berita')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Form Edit Berita</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.news.update', $news) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Berita <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                               id="title" name="title" value="{{ old('title', $news->title) }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="content" class="form-label">Isi Berita <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('content') is-invalid @enderror" 
                                  id="content" name="content" rows="10" required>{{ old('content', $news->content) }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Gunakan format HTML untuk styling teks</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Berita</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" 
                               id="image" name="image" accept="image/*">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Format: JPG, PNG, GIF. Maksimal 2MB. Biarkan kosong jika tidak ingin mengubah gambar</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                        <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                            <option value="">Pilih Status</option>
                            <option value="draft" {{ old('status', $news->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ old('status', $news->status) == 'published' ? 'selected' : '' }}>Published</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-trpl-red">
                            <i class="fas fa-save me-2"></i>Update Berita
                        </button>
                        <a href="{{ route('admin.news.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Kembali
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Gambar Saat Ini</h5>
            </div>
            <div class="card-body text-center">
                @if($news->image)
                    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" 
                         class="img-fluid rounded mb-3" style="max-height: 200px;">
                    <p class="text-muted small">Gambar saat ini</p>
                @else
                    <div class="text-muted">
                        <i class="fas fa-image fa-3x mb-2"></i>
                        <p class="mb-0">Tidak ada gambar</p>
                    </div>
                @endif
            </div>
        </div>
        
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="mb-0">Preview Gambar Baru</h5>
            </div>
            <div class="card-body text-center">
                <div id="imagePreview" class="d-none">
                    <img id="previewImg" src="" alt="Preview" class="img-fluid rounded" style="max-height: 200px;">
                </div>
                <div id="noImage" class="text-muted">
                    <i class="fas fa-image fa-3x mb-2"></i>
                    <p class="mb-0">Belum ada gambar dipilih</p>
                </div>
            </div>
        </div>
        
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="mb-0">Informasi Berita</h5>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-6">
                        <h6 class="text-muted">Penulis</h6>
                        <p class="mb-0">{{ $news->author }}</p>
                    </div>
                    <div class="col-6">
                        <h6 class="text-muted">Hits</h6>
                        <p class="mb-0">{{ $news->hits }}</p>
                    </div>
                </div>
                <hr>
                <div class="row text-center">
                    <div class="col-6">
                        <h6 class="text-muted">Dibuat</h6>
                        <p class="mb-0">{{ $news->created_at->format('d M Y') }}</p>
                    </div>
                    <div class="col-6">
                        <h6 class="text-muted">Diupdate</h6>
                        <p class="mb-0">{{ $news->updated_at->format('d M Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.getElementById('image').addEventListener('change', function(e) {
    const file = e.target.files[0];
    const preview = document.getElementById('imagePreview');
    const noImage = document.getElementById('noImage');
    const previewImg = document.getElementById('previewImg');
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewImg.src = e.target.result;
            preview.classList.remove('d-none');
            noImage.classList.add('d-none');
        }
        reader.readAsDataURL(file);
    } else {
        preview.classList.add('d-none');
        noImage.classList.remove('d-none');
    }
});
</script>
@endsection

