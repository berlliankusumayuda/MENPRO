<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Warga;
use Illuminate\Support\Facades\Log;

class Datawarga extends Component
{
    // Form fields
    public $no_kk = '';
    public $nik = '';
    public $nama = '';
    public $tempat_lahir = '';
    public $tanggal_lahir = '';
    public $jenis_kelamin = 'L';
    public $golongan_darah = '';
    public $agama = '';
    public $alamat = '';
    public $pendidikan_terakhir = '';
    public $pekerjaan = '';
    public $status_kawin = '';
    public $nama_ayah = '';
    public $nama_ibu = '';
    public $status_merokok = 'TIDAK MEROKOK';
    public $riwayat_penyakit = '';
    public $cek_kesehatan = '';
    public $asuransi_kesehatan = '';
    public $bpjs_ketenagakerjaan = 'TIDAK MEMILIKI';
    public $alat_kontrasepsi = '';
    public $jumlah_anak = 0;
    public $keinginan_menambah_anak = 'TIDAK';
    public $usia = 0;

    public $successMessage = '';
    public $errorMessage = '';

    public function simpan()
    {
        $this->validate([
            'no_kk' => 'required|string|size:16',
            'nik' => 'required|string|size:16|unique:warga,nik',
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'agama' => 'required|string',
            'alamat' => 'required|string',
            'pendidikan_terakhir' => 'required|string',
            'pekerjaan' => 'required|string',
            'status_kawin' => 'required|string',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'jumlah_anak' => 'required|integer|min:0',
            'usia' => 'required|integer|min:0|max:150',
        ], [
            'no_kk.required' => 'No. KK harus diisi',
            'no_kk.size' => 'No. KK harus 16 digit',
            'nik.required' => 'NIK harus diisi',
            'nik.size' => 'NIK harus 16 digit',
            'nik.unique' => 'NIK sudah terdaftar',
            'nama.required' => 'Nama harus diisi',
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi',
            'tanggal_lahir.date' => 'Format tanggal tidak valid',
        ]);

        try {
            Warga::create([
                'no_kk' => $this->no_kk,
                'nik' => $this->nik,
                'nama' => $this->nama,
                'tempat_lahir' => $this->tempat_lahir,
                'tanggal_lahir' => $this->tanggal_lahir,
                'jenis_kelamin' => $this->jenis_kelamin,
                'golongan_darah' => $this->golongan_darah,
                'agama' => $this->agama,
                'alamat' => $this->alamat,
                'pendidikan_terakhir' => $this->pendidikan_terakhir,
                'pekerjaan' => $this->pekerjaan,
                'status_kawin' => $this->status_kawin,
                'nama_ayah' => $this->nama_ayah,
                'nama_ibu' => $this->nama_ibu,
                'status_merokok' => $this->status_merokok,
                'riwayat_penyakit' => $this->riwayat_penyakit,
                'cek_kesehatan' => $this->cek_kesehatan,
                'asuransi_kesehatan' => $this->asuransi_kesehatan,
                'bpjs_ketenagakerjaan' => $this->bpjs_ketenagakerjaan,
                'alat_kontrasepsi' => $this->alat_kontrasepsi,
                'jumlah_anak' => $this->jumlah_anak,
                'keinginan_menambah_anak' => $this->keinginan_menambah_anak,
                'usia' => $this->usia,
            ]);

            $this->successMessage = 'Data warga berhasil disimpan!';
            $this->resetForm();
            
            // Redirect atau refresh halaman
            $this->dispatch('wargaSaved');
            
        } catch (\Exception $e) {
            Log::error('Error saving warga: ' . $e->getMessage());
            $this->errorMessage = 'Gagal menyimpan data: ' . $e->getMessage();
        }
    }

    private function resetForm()
    {
        $this->reset([
            'no_kk', 'nik', 'nama', 'tempat_lahir', 'tanggal_lahir',
            'golongan_darah', 'agama', 'alamat', 'pendidikan_terakhir',
            'pekerjaan', 'status_kawin', 'nama_ayah', 'nama_ibu',
            'riwayat_penyakit', 'cek_kesehatan', 'asuransi_kesehatan',
            'alat_kontrasepsi', 'jumlah_anak', 'usia'
        ]);
        $this->jenis_kelamin = 'L';
        $this->status_merokok = 'TIDAK MEROKOK';
        $this->bpjs_ketenagakerjaan = 'TIDAK MEMILIKI';
        $this->keinginan_menambah_anak = 'TIDAK';
    }

    public function render()
    {
        return view('livewire.datawarga');
    }
}
