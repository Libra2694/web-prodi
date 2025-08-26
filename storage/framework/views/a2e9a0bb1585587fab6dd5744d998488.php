

<?php $__env->startSection('title', 'Kontak - Program Studi TRPL'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Page Header -->
            <div class="mb-4">
                <h1 class="h2 text-trpl-red">Hubungi Kami</h1>
                <p class="text-muted">Silakan hubungi kami untuk informasi lebih lanjut tentang Program Studi TRPL</p>
            </div>
            
            <!-- Contact Form -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Kirim Pesan</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="subject" class="form-label">Subjek <span class="text-danger">*</span></label>
                                <select class="form-select" id="subject" name="subject" required>
                                    <option value="">Pilih Subjek</option>
                                    <option value="pendaftaran">Pendaftaran Mahasiswa Baru</option>
                                    <option value="akademik">Informasi Akademik</option>
                                    <option value="kerjasama">Kerjasama</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="message" name="message" rows="5" required 
                                      placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-trpl-red">
                            <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Office Hours -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Jam Operasional</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-trpl-red">Senin - Jumat</h6>
                            <p class="mb-3">08:00 - 16:00 WIB</p>
                            
                            <h6 class="text-trpl-red">Sabtu</h6>
                            <p class="mb-3">08:00 - 12:00 WIB</p>
                            
                            <h6 class="text-trpl-red">Minggu & Hari Libur</h6>
                            <p class="mb-0">Tutup</p>
                        </div>
                        <div class="col-md-6">
                            <div class="alert alert-info">
                                <h6><i class="fas fa-info-circle me-2"></i>Catatan</h6>
                                <ul class="mb-0 small">
                                    <li>Respon email dalam 24 jam</li>
                                    <li>Respon WhatsApp dalam 2 jam</li>
                                    <li>Kunjungan offline dengan appointment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Register Button -->
            <div class="sidebar-section text-center">
                <a href="#" class="btn btn-trpl-red btn-lg w-100 mb-3">DAFTAR SEKARANG</a>
                <a href="#" class="btn btn-trpl-outline btn-lg w-100">DOWNLOAD BROCHURE</a>
            </div>
            
            <!-- Contact Information -->
            <div class="sidebar-section">
                <h5>INFORMASI KONTAK</h5>
                
                <div class="mb-3">
                    <h6 class="text-trpl-red"><i class="fas fa-map-marker-alt me-2"></i>Alamat</h6>
                    <p class="mb-0 small">
                        Jl. Sei Batanghari No.2<br>
                        Kec. Jambi Timur<br>
                        Kota Jambi, Jambi 36124
                    </p>
                </div>
                
                <div class="mb-3">
                    <h6 class="text-trpl-red"><i class="fas fa-phone me-2"></i>Telepon</h6>
                    <p class="mb-0 small">
                        082280069039<br>
                        081289273486
                    </p>
                </div>
                
                <div class="mb-3">
                    <h6 class="text-trpl-red"><i class="fas fa-envelope me-2"></i>Email</h6>
                    <p class="mb-0 small">
                        info@politeknikjambi.ac.id<br>
                        trpl@politeknikjambi.ac.id
                    </p>
                </div>
                
                <div class="mb-3">
                    <h6 class="text-trpl-red"><i class="fab fa-whatsapp me-2"></i>WhatsApp</h6>
                    <p class="mb-0 small">
                        082280069039<br>
                        <small class="text-muted">Respon dalam 2 jam</small>
                    </p>
                </div>
            </div>
            
            <!-- Social Media -->
            <div class="sidebar-section">
                <h5>MEDIA SOSIAL</h5>
                <div class="d-grid gap-2">
                    <a href="#" class="btn btn-outline-primary btn-sm">
                        <i class="fab fa-facebook-f me-2"></i>Facebook
                    </a>
                    <a href="#" class="btn btn-outline-info btn-sm">
                        <i class="fab fa-twitter me-2"></i>Twitter
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-sm">
                        <i class="fab fa-youtube me-2"></i>YouTube
                    </a>
                    <a href="#" class="btn btn-outline-success btn-sm">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="sidebar-section">
                <h5>LINK CEPAT</h5>
                <a href="<?php echo e(route('about')); ?>" class="sidebar-link">
                    <i class="fas fa-info-circle me-2"></i>Profil Program Studi
                </a>
                <a href="<?php echo e(route('academic')); ?>" class="sidebar-link">
                    <i class="fas fa-graduation-cap me-2"></i>Informasi Akademik
                </a>
                <a href="<?php echo e(route('news.index')); ?>" class="sidebar-link">
                    <i class="fas fa-newspaper me-2"></i>Berita & Pengumuman
                </a>
                <a href="#" class="sidebar-link">
                    <i class="fas fa-file-pdf me-2"></i>Download Brosur
                </a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kuliah\projek\webprodi\trpl\trpl-web\resources\views/contact.blade.php ENDPATH**/ ?>