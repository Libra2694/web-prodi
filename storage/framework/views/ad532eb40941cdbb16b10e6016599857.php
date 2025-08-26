<?php $__env->startSection('title', 'Beranda - Program Studi TRPL'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Featured News -->
            <div class="row mb-4">
                <?php $__currentLoopData = $featuredNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 mb-3">
                    <div class="card news-card h-100">
                        <div class="position-relative">
                            <?php if($news->image): ?>
                                <img src="<?php echo e(asset($news->image)); ?>" class="card-img-top" alt="<?php echo e($news->title); ?>" style="height: 100px; object-fit: cover;">
                            <?php else: ?>
                                <div class="bg-secondary d-flex align-items-center justify-content-center" style="height: 100px;">
                                    <i class="fas fa-newspaper fa-3x text-white"></i>
                                </div>
                            <?php endif; ?>
                            <div class="position-absolute top-0 start-0 m-2">
                                <span class="badge bg-trpl-red"><?php echo e($news->status); ?></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center text-muted small mb-2">
                                <i class="fas fa-user me-2"></i><?php echo e($news->author); ?>

                                <i class="fas fa-calendar ms-3 me-2"></i><?php echo e($news->created_at->format('d M Y')); ?>

                                <i class="fas fa-eye ms-3 me-2"></i>Hits: <?php echo e($news->hits); ?>

                            </div>
                            <h5 class="card-title"><?php echo e($news->title); ?></h5>
                            <p class="card-text text-muted">
                                <?php echo e(Str::limit(strip_tags($news->content), 120)); ?>

                            </p>
                            <a href="<?php echo e(route('news.show', $news->slug)); ?>" class="text-warning fw-bold">
                                Read more: <?php echo e($news->title); ?>

                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Recent News -->
            <h4 class="text-trpl-red mb-3">Berita Terbaru</h4>
            <div class="row">
                <?php $__currentLoopData = $recentNews->skip(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 mb-3">
                    <div class="card news-card h-100">
                        <div class="row g-0">
                            <div class="col-4">
                                <?php if($news->image): ?>
                                    <img src="<?php echo e(asset($news->image)); ?>" class="img-fluid rounded-start h-100" alt="<?php echo e($news->title); ?>" style="object-fit: cover;">
                                <?php else: ?>
                                    <div class="bg-secondary d-flex align-items-center justify-content-center h-100">
                                        <i class="fas fa-newspaper fa-2x text-white"></i>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h6 class="card-title"><?php echo e(Str::limit($news->title, 60)); ?></h6>
                                    <p class="card-text small text-muted">
                                        <?php echo e(Str::limit(strip_tags($news->content), 80)); ?>

                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted"><?php echo e($news->created_at->format('d M Y')); ?></small>
                                        <a href="<?php echo e(route('news.show', $news->slug)); ?>" class="btn btn-sm btn-outline-primary">Baca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <?php $__currentLoopData = $popularNews->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="mb-3">
                    <a href="<?php echo e(route('news.show', $news->slug)); ?>" class="text-decoration-none">
                        <h6 class="text-dark"><?php echo e(Str::limit($news->title, 50)); ?></h6>
                    </a>
                    <small class="text-muted">
                        <i class="fas fa-calendar me-1"></i><?php echo e($news->created_at->format('d M Y')); ?>

                        <i class="fas fa-eye ms-2 me-1"></i><?php echo e($news->hits); ?>

                    </small>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kuliah\projek\webprodi\trpl\trpl-web\resources\views/home.blade.php ENDPATH**/ ?>