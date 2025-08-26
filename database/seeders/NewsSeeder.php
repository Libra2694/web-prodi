<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $news = [
            [
                'title' => 'Clara Alyuson Raih Peringkat 3 Pilmapres Wilayah X Tahun 2025',
                'content' => 'Prestasi membanggakan kembali ditorehkan oleh mahasiswa Politeknik Jambi. Clara Alyuson, mahasiswi Program Studi Teknologi Rekayasa Perangkat Lunak (TRPL), berhasil meraih peringkat 3 dalam ajang Pemilihan Mahasiswa Berprestasi (Pilmapres) Wilayah X Tahun 2025 yang diselenggarakan oleh Direktorat Jenderal Pendidikan Tinggi, Riset, dan Teknologi (Ditjen Diktiristek) Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek).',
                'image' => 'image/berita/clara.png',
                'author' => 'Administrator',
                'hits' => 13,
                'slug' => 'clara-alyuson-raih-peringkat-3-pilmapres-wilayah-x-tahun-2025',
                'status' => 'published',
            ],
            [
                'title' => 'Mahasiswa TRPL Politeknik Jambi Raih Medali Emas Di Ajang POMDA 2025',
                'content' => 'Jambi, 10 Juli 2025 — Prestasi membanggakan kembali ditorehkan oleh mahasiswa Politeknik Jambi. Clara Alyuson, mahasiswa Program Studi Teknologi Rekayasa Perangkat Lunak (TRPL), berhasil meraih medali emas dalam cabang olahraga panjat tebing nomor speed klasik putri pada ajang Pekan Olahraga Mahasiswa Daerah (POMDA) Tahun 2025 yang berlangsung pada 8-11 Juli 2025.',
                'image' => 'image/berita/JUARA_I_PANJAT_TEBING_TRPL.png',
                'author' => 'Administrator',
                'hits' => 10,
                'slug' => 'mahasiswa-trpl-politeknik-jambi-raih-medali-emas-di-ajang-pomda-2025',
                'status' => 'published',
            ],
            // [
            //     'title' => 'Program Studi TRPL Gelar Workshop Pengembangan Aplikasi Mobile',
            //     'content' => 'Program Studi Teknologi Rekayasa Perangkat Lunak (TRPL) Politeknik Jambi menggelar workshop pengembangan aplikasi mobile yang diikuti oleh mahasiswa semester 4 dan 6. Workshop ini bertujuan untuk meningkatkan kompetensi mahasiswa dalam pengembangan aplikasi mobile menggunakan teknologi terkini.',
            //     'author' => 'Administrator',
            //     'hits' => 8,
            //     'slug' => 'program-studi-trpl-gelar-workshop-pengembangan-aplikasi-mobile',
            //     'status' => 'published',
            // ],
        ];

        foreach ($news as $item) {
            News::create($item);
        }
    }
}

