# Website Program Studi TRPL - Politeknik Jambi

Website resmi Program Studi Teknologi Rekayasa Perangkat Lunak (TRPL) Politeknik Jambi yang dibangun menggunakan Laravel framework.

## 🚀 Fitur Utama

- **Halaman Umum**: Berita, profil, akademik, dan informasi untuk publik
- **Panel Admin**: Sistem manajemen berita dan konten website
- **Responsive Design**: Tampilan yang responsif untuk berbagai perangkat
- **Database MySQL**: Penyimpanan data menggunakan MySQL
- **Authentication**: Sistem login admin yang aman

## 🛠️ Teknologi yang Digunakan

- **Backend**: Laravel 12.x
- **Database**: MySQL (via phpMyAdmin Laragon)
- **Frontend**: Bootstrap 5, Font Awesome
- **CSS**: Custom CSS dengan warna identik TRPL (merah)
- **JavaScript**: Vanilla JavaScript untuk interaksi

## 📁 Struktur Proyek

```
trpl-web/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php      # Controller halaman utama
│   │   ├── NewsController.php      # Controller berita publik
│   │   ├── AdminController.php     # Controller admin
│   │   └── AuthController.php      # Controller autentikasi
│   ├── Models/
│   │   ├── News.php               # Model berita
│   │   └── Admin.php              # Model admin
│   └── Http/Middleware/
│       └── AdminMiddleware.php     # Middleware admin
├── database/
│   ├── migrations/                 # File migrasi database
│   └── seeders/                    # Data awal
├── resources/views/
│   ├── layouts/                    # Layout utama
│   ├── home.blade.php             # Halaman beranda
│   ├── about.blade.php            # Halaman profil
│   ├── academic.blade.php         # Halaman akademik
│   ├── publication.blade.php      # Halaman publikasi
│   ├── student.blade.php          # Halaman kemahasiswaan
│   ├── information.blade.php      # Halaman informasi
│   ├── contact.blade.php          # Halaman kontak
│   ├── news/                      # Halaman berita
│   ├── admin/                     # Panel admin
│   └── auth/                      # Halaman login
└── routes/
    └── web.php                    # Definisi routing
```

## 🌐 Akses Halaman

### 1. Halaman Umum (Public)

#### Beranda
- **URL**: `/` atau `/home`
- **Deskripsi**: Halaman utama dengan berita unggulan dan sidebar
- **Fitur**: 
  - Berita unggulan (2 berita utama)
  - Berita terbaru
  - Tombol DAFTAR SEKARANG
  - Link-link penting

#### Profil
- **URL**: `/about`
- **Deskripsi**: Informasi lengkap Program Studi TRPL
- **Fitur**:
  - Visi, Misi, dan Tujuan
  - Profil lulusan
  - Keunggulan program studi

#### Akademik
- **URL**: `/academic`
- **Deskripsi**: Informasi akademik dan kurikulum
- **Fitur**:
  - Kurikulum lengkap (4 semester)
  - Fasilitas pembelajaran
  - Dosen pengajar
  - Kalender akademik

#### Publikasi
- **URL**: `/publication`
- **Deskripsi**: Karya ilmiah dan penelitian dosen
- **Fitur**:
  - Bidang penelitian
  - Publikasi terbaru
  - Proyek penelitian
  - Statistik publikasi

#### Kemahasiswaan
- **URL**: `/student`
- **Deskripsi**: Informasi kegiatan mahasiswa
- **Fitur**:
  - Organisasi mahasiswa
  - Prestasi mahasiswa
  - Kegiatan mahasiswa
  - Statistik mahasiswa

#### Informasi
- **URL**: `/information`
- **Deskripsi**: Informasi penting dan pengumuman
- **Fitur**:
  - Informasi penting
  - Kalender akademik
  - Download dokumen
  - Informasi kontak

#### Kontak
- **URL**: `/contact`
- **Deskripsi**: Halaman kontak dan form pesan
- **Fitur**:
  - Form kontak
  - Jam operasional
  - Informasi kontak lengkap
  - Media sosial

#### Berita
- **URL**: `/news`
- **Deskripsi**: Daftar semua berita
- **Fitur**:
  - Daftar berita dengan pagination
  - Pencarian berita
  - Filter berita

#### Detail Berita
- **URL**: `/news/{slug}`
- **Deskripsi**: Halaman detail berita
- **Fitur**:
  - Konten berita lengkap
  - Berita terkait
  - Tombol share

### 2. Panel Admin

#### Login Admin
- **URL**: `/admin/login`
- **Deskripsi**: Halaman login untuk admin
- **Kredensial Default**:
  - Username: `admin`
  - Password: `admin123`

#### Dashboard Admin
- **URL**: `/admin/dashboard`
- **Deskripsi**: Dashboard utama admin
- **Fitur**:
  - Statistik berita
  - Berita terbaru
  - Aksi cepat

#### Kelola Berita
- **URL**: `/admin/news`
- **Deskripsi**: Daftar dan kelola semua berita
- **Fitur**:
  - Tabel berita
  - Edit berita
  - Hapus berita
  - Lihat berita

#### Tambah Berita
- **URL**: `/admin/news/create`
- **Deskripsi**: Form untuk menambah berita baru
- **Fitur**:
  - Input judul dan konten
  - Upload gambar
  - Pilih status (draft/published)

#### Edit Berita
- **URL**: `/admin/news/{id}/edit`
- **Deskripsi**: Form untuk mengedit berita
- **Fitur**:
  - Edit semua field berita
  - Preview gambar
  - Update status

## 🗄️ Database

### Tabel Utama

#### Tabel `news`
- `id` - Primary key
- `title` - Judul berita
- `content` - Isi berita
- `image` - Path gambar (nullable)
- `author` - Penulis berita
- `hits` - Jumlah hits/views
- `slug` - URL slug unik
- `status` - Status berita (published/draft)
- `created_at`, `updated_at` - Timestamp

#### Tabel `admins`
- `id` - Primary key
- `username` - Username admin
- `email` - Email admin
- `password` - Password (hashed)
- `name` - Nama lengkap admin
- `role` - Role admin (super_admin/admin)
- `is_active` - Status aktif
- `last_login` - Waktu login terakhir
- `created_at`, `updated_at` - Timestamp

## 🚀 Cara Menjalankan

### 1. Persiapan
- Pastikan Laragon sudah terinstall
- Pastikan PHP 8.1+ dan MySQL tersedia
- Clone atau download proyek ini

### 2. Setup Database
```bash
# Buat database baru di phpMyAdmin
# Nama database: trpl_website

# Update file .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=trpl_website
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Install Dependencies
```bash
cd trpl-web
composer install
```

### 4. Setup Environment
```bash
# Copy file .env.example ke .env
cp .env.example .env

# Generate application key
php artisan key:generate

# Buat symbolic link storage
php artisan storage:link
```

### 5. Migrasi dan Seeder
```bash
# Jalankan migrasi
php artisan migrate

# Jalankan seeder
php artisan db:seed
```

### 6. Jalankan Server
```bash
# Development server
php artisan serve

# Atau gunakan Laragon
# Buka http://trpl-website.test
```

## 🔐 Akses Admin

Setelah menjalankan seeder, admin default akan tersedia:

- **URL Login**: `http://localhost:8000/admin/login`
- **Username**: `admin`
- **Password**: `admin123`

## 📱 Fitur Responsive

Website ini didesain responsif untuk berbagai ukuran layar:
- **Desktop**: Layout penuh dengan sidebar
- **Tablet**: Layout menyesuaikan ukuran layar
- **Mobile**: Layout stack vertikal untuk kemudahan akses

## 🎨 Warna dan Desain

Website menggunakan warna identik TRPL:
- **Primary Red**: `#dc3545` (TRPL Red)
- **Dark Red**: `#c82333` (TRPL Dark Red)
- **Blue**: `#007bff` (Accent Blue)
- **White & Gray**: Untuk background dan text

## 📝 Catatan Penting

1. **Upload Gambar**: Pastikan folder `storage/app/public/news` memiliki permission write
2. **Database**: Backup database secara berkala
3. **Security**: Ganti password admin default setelah deployment
4. **Backup**: Backup file dan database secara berkala

## 🤝 Kontribusi

Untuk berkontribusi pada pengembangan website ini:
1. Fork repository
2. Buat branch fitur baru
3. Commit perubahan
4. Push ke branch
5. Buat Pull Request

## 📞 Support

Jika ada pertanyaan atau masalah:
- Email: trpl@politeknikjambi.ac.id
- Phone: 082280069039
- WhatsApp: 081289273486

## 📄 Lisensi

Website ini dikembangkan untuk Program Studi TRPL Politeknik Jambi. Semua hak cipta dilindungi.

---

**Dikembangkan dengan ❤️ untuk Program Studi TRPL Politeknik Jambi**
