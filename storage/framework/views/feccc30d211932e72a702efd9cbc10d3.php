<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Program Studi TRPL - Politeknik Jambi'); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo e(asset('image/logo.png')); ?>">
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('image/logo.png')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('image/logo.png')); ?>">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --trpl-red: #dc3545;
            --trpl-dark-red: #c82333;
            --trpl-blue: #007bff;
            --trpl-yellow: #FFD700;
        }
        
        .bg-trpl-red {
            background-color: var(--trpl-red) !important;
        }
        
        .text-trpl-red {
            color: var(--trpl-red) !important;
        }
        
        .text-trpl-yellow {
            color: var(--trpl-yellow) !important;
        }
        
        .btn-trpl-red {
            background-color: var(--trpl-red);
            border-color: var(--trpl-red);
            color: white;
        }
        
        .btn-trpl-red:hover {
            background-color: var(--trpl-dark-red);
            border-color: var(--trpl-dark-red);
            color: white;
        }
        
        .btn-trpl-outline {
            background-color: transparent;
            border: 2px solid var(--trpl-blue);
            color: var(--trpl-blue);
        }
        
        .btn-trpl-outline:hover {
            background-color: var(--trpl-blue);
            color: white;
        }
        
        .navbar-nav .nav-link.active {
            border-bottom: 3px solid var(--trpl-red);
        }
        
        .news-card {
            transition: transform 0.3s ease;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }
        
        .news-card .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
            object-position: center;
        }
        
        .news-card .card-body {
            display: flex;
            flex-direction: column;
        }
        
        .news-card .card-text {
            flex-grow: 1;
        }
        
        .news-card .btn {
            align-self: flex-start;
            margin-top: auto;
        }
        
        .sidebar-section {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .sidebar-section h5 {
            color: var(--trpl-red);
            border-bottom: 2px solid var(--trpl-red);
            padding-bottom: 10px;
        }
        
        .sidebar-link {
            color: #333;
            text-decoration: none;
            display: block;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        
        .sidebar-link:hover {
            color: var(--trpl-red);
            text-decoration: none;
        }
        
        /* Dropdown styling for dark navbar */
        .navbar-dark .dropdown-menu {
            background-color: #343a40;
            border: 1px solid #495057;
        }
        
        .navbar-dark .dropdown-item {
            color: #ffffff;
        }
        
        .navbar-dark .dropdown-item:hover {
            background-color: #495057;
            color: #ffffff;
        }
        
        .navbar-dark .dropdown-item:active {
            background-color: var(--trpl-red);
        }
        
        .dropdown-toggle::after {
            margin-left: 0.5em;
        }
    </style>
    
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <!-- Top Bar -->
    <!-- <div class="bg-dark text-white py-2"> -->
    <div class="bg-secondary text-white py-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <small>
                        <i class="fas fa-phone me-2"></i>082280069039 | 081289273486
                        <i class="fas fa-envelope ms-3 me-2"></i>info@politeknikjambi.ac.id
                    </small>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm"> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                <div class="d-flex align-items-center">
                    <div class="me-3" style="width: 60px; height: 60px;">
                        <img src="<?php echo e(asset('image/logo.png')); ?>" alt="TRPL Logo" class="img-fluid" style="max-width: 100%; height: auto;">
                    </div>
                    <div>
                        <div class="fw-bold text-trpl-red">PROGRAM STUDI TRPL</div>
                        <div class="small text-muted text-trpl-yellow">POLITEKNIK JAMBI</div>
                        <div class="small text-muted text-trpl-yellow">TEKNOLOGI REKAYASA PERANGKAT LUNAK</div>
                    </div>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>">HOME</a>
                    </li>
                    
                    <!-- Profile Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo e(request()->routeIs('profil*') ? 'active' : ''); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PROFIL
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo e(route('profil.sejarah')); ?>">Sejarah Singkat</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('profil.visi-misi')); ?>">Visi dan Misi</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('profil.struktur')); ?>">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('profil.sambutan')); ?>">Sambutan Kaprodi</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('profil.dosen')); ?>">Dosen</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('profil.akreditasi')); ?>">Akreditasi</a></li>
                        </ul>
                    </li>
                    
                    <!-- Academic Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo e(request()->routeIs('academic*') ? 'active' : ''); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            AKADEMIK
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">E-Learning</a></li>
                            <li><a class="dropdown-item" href="#">Student Online</a></li>
                        </ul>
                    </li>
                    
                    <!-- Publication Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo e(request()->routeIs('publication*') ? 'active' : ''); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PUBLIKASI
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Karya Ilmiah (OJS)</a></li>
                            <li><a class="dropdown-item" href="#">Penelitian & Pengabdian</a></li>
                        </ul>
                    </li>
                    
                    <!-- Student Affairs Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo e(request()->routeIs('student*') ? 'active' : ''); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            KEMAHASISWAAN
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Himpunan Mahasiswa</a></li>
                            <li><a class="dropdown-item" href="#">Prestasi</a></li>
                            <li><a class="dropdown-item" href="#">Alumni</a></li>
                        </ul>
                    </li>
                    
                    <!-- Information Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo e(request()->routeIs('information*') ? 'active' : ''); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            INFORMASI
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Penerimaan Mahasiswa Baru</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>" href="<?php echo e(route('contact')); ?>">KONTAK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Program Studi TRPL</h5>
                    <p class="mb-0">Politeknik Jambi</p>
                    <p class="mb-0">Jl. Sei Batanghari No.2, Jambi</p>
                </div>
                <div class="col-md-6 text-end">
                    <p class="mb-0">&copy; 2025 Program Studi TRPL. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>

<?php /**PATH C:\laragon\www\kuliah\projek\webprodi\trpl\trpl-web\resources\views/layouts/app.blade.php ENDPATH**/ ?>