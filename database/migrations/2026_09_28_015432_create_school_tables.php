<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        // Tabel Berita / Artikel
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->enum('type', ['berita', 'pengumuman', 'artikel'])->default('berita');
            $table->text('content');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        // Tabel Agenda Sekolah
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('event_date');
            $table->string('location');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Tabel Guru & Staf
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('photo')->nullable();
            $table->text('bio')->nullable();
            $table->timestamps();
        });

        // Tabel Fasilitas
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        // Tabel Galeri
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['foto', 'video'])->default('foto');
            $table->string('file_path');
            $table->timestamps();
        });

        // Tabel Kontak / Pesan Masuk
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->text('message');
            $table->boolean('is_read')->default(false);
            $table->timestamps();
        });

        // Tabel Ekstrakurikuler
        Schema::create('extracurriculars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('instructor');
            $table->string('schedule');
            $table->string('location');
            $table->string('icon')->default('⚽');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('extracurriculars');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('galleries');
        Schema::dropIfExists('facilities');
        Schema::dropIfExists('staffs');
        Schema::dropIfExists('agendas');
        Schema::dropIfExists('posts');
    }
};