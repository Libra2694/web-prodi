@extends('layouts.admin')

@section('title', 'Tambah Berita - Admin Panel TRPL')

@section('page-title', 'Tambah Berita Baru')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Form Berita</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Berita <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                               id="title" name="title" value="{{ old('title') }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="content" class="form-label">Isi Berita <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('content') is-invalid @enderror" 
                                  id="content" name="content" rows="10" required>{{ old('content') }}</textarea>
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
                        <div class="form-text">Format: JPG, PNG, GIF. Maksimal 2MB</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                        <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                            <option value="">Pilih Status</option>
                            <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-trpl-red">
                            <i class="fas fa-save me-2"></i>Simpan Berita
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
                <h5 class="mb-0">Panduan</h5>
            </div>
            <div class="card-body">
                <div class="alert alert-info">
                    <h6><i class="fas fa-info-circle me-2"></i>Tips Menulis Berita</h6>
                    <ul class="mb-0 small">
                        <li>Judul harus menarik dan informatif</li>
                        <li>Gunakan bahasa yang mudah dipahami</li>
                        <li>Tambahkan gambar yang relevan</li>
                        <li>Periksa ejaan dan tata bahasa</li>
                    </ul>
                </div>
                
                <div class="alert alert-warning">
                    <h6><i class="fas fa-exclamation-triangle me-2"></i>Format HTML</h6>
                    <p class="mb-0 small">Anda dapat menggunakan tag HTML sederhana seperti:</p>
                    <ul class="mb-0 small">
                        <li><code>&lt;strong&gt;</code> untuk teks tebal</li>
                        <li><code>&lt;em&gt;</code> untuk teks miring</li>
                        <li><code>&lt;br&gt;</code> untuk baris baru</li>
                        <li><code>&lt;p&gt;</code> untuk paragraf</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="mb-0">Preview Gambar</h5>
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

