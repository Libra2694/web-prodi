<?php $__env->startSection('title', $news->title . ' - Program Studi TRPL'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('news.index')); ?>">Berita</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e(Str::limit($news->title, 50)); ?></li>
                </ol>
            </nav>
            
            <!-- News Content -->
            <article class="card">
                <div class="card-body">
                    <!-- News Header -->
                    <header class="mb-4">
                        <h1 class="h2 mb-3"><?php echo e($news->title); ?></h1>
                        <div class="d-flex align-items-center text-muted mb-3">
                            <i class="fas fa-user me-2"></i><?php echo e($news->author); ?>

                            <i class="fas fa-calendar ms-3 me-2"></i><?php echo e($news->created_at->format('d M Y')); ?>

                            <i class="fas fa-eye ms-3 me-2"></i><?php echo e($news->hits); ?> hits
                            <span class="badge bg-trpl-red ms-3"><?php echo e(ucfirst($news->status)); ?></span>
                        </div>
                    </header>
                    
                    <!-- News Image -->
                    <?php if($news->image): ?>
                        <div class="text-center mb-4">
                            <img src="<?php echo e(asset('storage/' . $news->image)); ?>" alt="<?php echo e($news->title); ?>" 
                                 class="img-fluid rounded" style="max-height: 400px;">
                        </div>
                    <?php endif; ?>
                    
                    <!-- News Content -->
                    <div class="news-content">
                        <?php echo $news->content; ?>

                    </div>
                    
                    <!-- Share Buttons -->
                    <div class="mt-4 pt-4 border-top">
                        <h6 class="mb-3">Bagikan berita ini:</h6>
                        <div class="d-flex gap-2">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(request()->url())); ?>" 
                               target="_blank" class="btn btn-outline-primary btn-sm">
                                <i class="fab fa-facebook-f me-2"></i>Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo e(urlencode(request()->url())); ?>&text=<?php echo e(urlencode($news->title)); ?>" 
                               target="_blank" class="btn btn-outline-info btn-sm">
                                <i class="fab fa-twitter me-2"></i>Twitter
                            </a>
                            <a href="https://wa.me/?text=<?php echo e(urlencode($news->title . ' - ' . request()->url())); ?>" 
                               target="_blank" class="btn btn-outline-success btn-sm">
                                <i class="fab fa-whatsapp me-2"></i>WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            
            <!-- Related News -->
            <?php if($relatedNews->count() > 0): ?>
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="mb-0">Berita Terkait</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php $__currentLoopData = $relatedNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 mb-3">
                            <div class="card h-100">
                                <div class="row g-0">
                                    <div class="col-4">
                                        <?php if($related->image): ?>
                                            <img src="<?php echo e(asset('storage/' . $related->image)); ?>" alt="<?php echo e($related->title); ?>" 
                                                 class="img-fluid rounded-start h-100" style="object-fit: cover;">
                                        <?php else: ?>
                                            <div class="bg-secondary d-flex align-items-center justify-content-center h-100">
                                                <i class="fas fa-newspaper fa-2x text-white"></i>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h6 class="card-title"><?php echo e(Str::limit($related->title, 50)); ?></h6>
                                            <p class="card-text small text-muted">
                                                <?php echo e(Str::limit(strip_tags($related->content), 80)); ?>

                                            </p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <small class="text-muted"><?php echo e($related->created_at->format('d M Y')); ?></small>
                                                <a href="<?php echo e(route('news.show', $related->slug)); ?>" class="btn btn-sm btn-outline-primary">Baca</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
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
                <a href="<?php echo e(route('news.index')); ?>" class="sidebar-link">
                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar Berita
                </a>
                <a href="<?php echo e(route('home')); ?>" class="sidebar-link">
                    <i class="fas fa-home me-2"></i>Beranda
                </a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kuliah\projek\webprodi\trpl\trpl-web\resources\views/news/show.blade.php ENDPATH**/ ?>