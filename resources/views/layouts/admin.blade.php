<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard - Program Studi TRPL')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --trpl-red: #dc3545;
            --trpl-dark-red: #c82333;
        }
        
        .sidebar {
            min-height: 100vh;
            background: #2c3e50;
            color: white;
        }
        
        .sidebar .nav-link {
            color: #bdc3c7;
            padding: 12px 20px;
            border-radius: 5px;
            margin: 2px 10px;
        }
        
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: var(--trpl-red);
            color: white;
        }
        
        .sidebar .nav-link i {
            width: 20px;
            margin-right: 10px;
        }
        
        .main-content {
            background: #f8f9fa;
            min-height: 100vh;
        }
        
        .top-navbar {
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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
        
        .card-stats {
            border: none;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .card-stats .card-body {
            padding: 1.5rem;
        }
        
        .stats-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0 sidebar">
                <div class="p-3">
                    <div class="text-center mb-4">
                        <div class="bg-trpl-red text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2" style="width: 60px; height: 60px;">
                            <strong>TRPL</strong>
                        </div>
                        <h6 class="mb-0">ADMIN PANEL</h6>
                        <small class="text-muted">Program Studi TRPL</small>
                    </div>
                    
                    <nav class="nav flex-column">
                        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                            <i class="fas fa-tachometer-alt"></i>Dashboard
                        </a>
                        <a class="nav-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}" href="{{ route('admin.news.index') }}">
                            <i class="fas fa-newspaper"></i>Kelola Berita
                        </a>
                        <a class="nav-link" href="#">
                            <i class="fas fa-users"></i>Kelola User
                        </a>
                        <a class="nav-link" href="#">
                            <i class="fas fa-cog"></i>Pengaturan
                        </a>
                        <hr class="text-muted">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="fas fa-home"></i>Kembali ke Website
                        </a>
                        <form method="POST" action="{{ route('admin.logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="nav-link border-0 bg-transparent w-100 text-start">
                                <i class="fas fa-sign-out-alt"></i>Logout
                            </button>
                        </form>
                    </nav>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 px-0 main-content">
                <!-- Top Navbar -->
                <div class="top-navbar p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">@yield('page-title', 'Dashboard')</h4>
                        <div class="d-flex align-items-center">
                            <span class="me-3">
                                <i class="fas fa-user-circle me-2"></i>
                                {{ Auth::guard('admin')->user()->name }}
                            </span>
                        </div>
                    </div>
                </div>
                
                <!-- Page Content -->
                <div class="p-4">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @yield('scripts')
</body>
</html>






