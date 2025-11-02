<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $table = 'warga';

    protected $fillable = [
        'no_kk',
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'golongan_darah',
        'agama',
        'alamat',
        'pendidikan_terakhir',
        'pekerjaan',
        'status_kawin',
        'nama_ayah',
        'nama_ibu',
        'status_merokok',
        'riwayat_penyakit',
        'cek_kesehatan',
        'asuransi_kesehatan',
        'bpjs_ketenagakerjaan',
        'alat_kontrasepsi',
        'jumlah_anak',
        'keinginan_menambah_anak',
        'usia',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'jumlah_anak' => 'integer',
        'usia' => 'integer',
    ];
}
