<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StaffSeeder::class,
            FacilitySeeder::class,
            GallerySeeder::class,
            ExtracurricularSeeder::class,
        ]);

        if (\App\Models\Post::count() == 0) {
            \App\Models\Post::create([
                'title' => 'Penerimaan Peserta Didik Baru (PPDB) Tahun Ajaran 2026/2027 Telah Dibuka',
                'slug' => 'ppdb-tahun-ajaran-2026-2027',
                'type' => 'pengumuman',
                'content' => 'Pendaftaran siswa baru dibuka secara daring dan luring. Siapkan dokumen persyaratan dan daftarkan diri Anda segera melalui portal resmi kami.',
                'image' => null,
            ]);

            \App\Models\Post::create([
                'title' => 'Siswa SMK Meraih Medali Emas di Ajang LKS Tingkat Nasional',
                'slug' => 'medali-emas-lks-nasional',
                'type' => 'berita',
                'content' => 'Prestasi membanggakan kembali diraih oleh perwakilan sekolah dalam bidang Web Technologies dan Cloud Computing pada Lomba Kompetensi Siswa nasional.',
                'image' => null,
            ]);

            \App\Models\Post::create([
                'title' => 'Workshop Literasi Digital & AI untuk Kesiapan Karir Masa Depan',
                'slug' => 'workshop-literasi-digital-ai',
                'type' => 'artikel',
                'content' => 'Mengembangkan wawasan siswa mengenai kecerdasan buatan, etika digital, dan peluang karir di industri kreatif global.',
                'image' => null,
            ]);
        }

        if (\App\Models\Agendas::count() == 0) {
            \App\Models\Agendas::create([
                'title' => 'Ujian Tengah Semester Ganjil',
                'event_date' => now()->addDays(5)->toDateString(),
                'location' => 'Ruang Kelas & Lab Komputer',
                'description' => 'Evaluasi pembelajaran tengah semester untuk seluruh siswa kelas X, XI, dan XII.',
            ]);

            \App\Models\Agendas::create([
                'title' => 'Pentas Seni & Gelar Karya P5',
                'event_date' => now()->addDays(12)->toDateString(),
                'location' => 'Aula Utama Sekolah',
                'description' => 'Pameran kreativitas dan pementasan seni hasil karya proyek penguatan profil pelajar Pancasila.',
            ]);

            \App\Models\Agendas::create([
                'title' => 'Pertemuan Orang Tua & Guru (Parenting)',
                'event_date' => now()->addDays(20)->toDateString(),
                'location' => 'Gedung Serbaguna',
                'description' => 'Sosialisasi perkembangan akademik siswa dan program sekolah semester mendatang.',
            ]);
        }
    }
}
