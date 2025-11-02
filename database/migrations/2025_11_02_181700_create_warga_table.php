<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            $table->string('no_kk', 16);
            $table->string('nik', 16)->unique();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->enum('golongan_darah', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'])->nullable();
            $table->string('agama');
            $table->text('alamat');
            $table->string('pendidikan_terakhir');
            $table->string('pekerjaan');
            $table->string('status_kawin');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->enum('status_merokok', ['MEROKOK', 'TIDAK MEROKOK'])->default('TIDAK MEROKOK');
            $table->text('riwayat_penyakit')->nullable();
            $table->string('cek_kesehatan')->nullable();
            $table->string('asuransi_kesehatan')->nullable();
            $table->enum('bpjs_ketenagakerjaan', ['MEMILIKI', 'TIDAK MEMILIKI'])->default('TIDAK MEMILIKI');
            $table->string('alat_kontrasepsi')->nullable();
            $table->integer('jumlah_anak')->default(0);
            $table->enum('keinginan_menambah_anak', ['YA', 'TIDAK'])->default('TIDAK');
            $table->integer('usia')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('warga');
    }
};
