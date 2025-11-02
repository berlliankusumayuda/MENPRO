<div class="datawarga">
    <h1>DATA WARGA</h1>
    
    @if($successMessage)
        <div style="background-color: #d4edda; border: 1px solid #c3e6cb; padding: 15px; border-radius: 10px; margin: 20px auto; width: 80%; color: #155724;">
            {{ $successMessage }}
        </div>
    @endif

    @if($errorMessage)
        <div style="background-color: #f8d7da; border: 1px solid #f5c6cb; padding: 15px; border-radius: 10px; margin: 20px auto; width: 80%; color: #721c24;">
            {{ $errorMessage }}
        </div>
    @endif

    <div class="form-datawarga">
        <h2>INPUT WARGA DIBAWAH INI</h2>
        <form class="wargaForm" wire:submit.prevent="simpan">
            <!-- No KK -->
            <div class="input-group">
                <label for="no_kk">No. Kartu Keluarga</label>
                <input type="text" id="no_kk" wire:model="no_kk" placeholder="ketik disini" maxlength="16">
                @error('no_kk') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            
            <!-- NIK -->
            <div class="input-group">
                <label for="nik">Nomor Induk Kependudukan</label>
                <input type="text" id="nik" wire:model="nik" placeholder="ketik disini" maxlength="16">
                @error('nik') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            
            <!-- Nama -->
            <div class="input-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" wire:model="nama" placeholder="ketik disini">
                @error('nama') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            
            <!-- Tempat Lahir -->
            <div class="input-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" wire:model="tempat_lahir" placeholder="ketik disini">
                @error('tempat_lahir') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            
            <!-- Tanggal Lahir -->
            <div class="input-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" wire:model="tanggal_lahir">
                @error('tanggal_lahir') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            
            <!-- Jenis Kelamin -->
            <div class="input-group">
                <p class="jenis-kelamin">jenis kelamin</p>
                <div class="radio-inputs">
                    <label class="radio">
                        <input type="radio" wire:model="jenis_kelamin" value="L" checked>
                        <span class="name">Laki-Laki</span>
                    </label>
                    <label class="radio">
                        <input type="radio" wire:model="jenis_kelamin" value="P">
                        <span class="name">PEREMPUAN</span>
                    </label>
                </div>
            </div>
            
            <!-- Golongan Darah -->
            <div class="input-group">
                <label for="golongan_darah">Golongan Darah</label>
                <select id="golongan_darah" wire:model="golongan_darah">
                    <option value="">-- Pilih Golongan Darah --</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
            
            <!-- Agama -->
            <div class="input-group">
                <label for="agama">Agama</label>
                <select id="agama" wire:model="agama">
                    <option value="">-- Pilih Agama --</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
                @error('agama') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            
            <!-- Alamat -->
            <div class="input-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" wire:model="alamat" placeholder="ketik disini"></textarea>
                @error('alamat') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            
            <!-- Pendidikan Terakhir -->
            <div class="input-group">
                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                <select id="pendidikan_terakhir" wire:model="pendidikan_terakhir">
                    <option value="">-- Pilih Pendidikan Terakhir --</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA/SMK">SMA/SMK</option>
                    <option value="D1/D2/D3">D1/D2/D3</option>
                    <option value="S1/D4">S1/D4</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
                @error('pendidikan_terakhir') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            
            <!-- Pekerjaan -->
            <div class="input-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" id="pekerjaan" wire:model="pekerjaan" placeholder="ketik disini">
                @error('pekerjaan') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            
            <!-- Status Kawin -->
            <div class="input-group">
                <label for="status_kawin">STATUS KAWIN</label>
                <select id="status_kawin" wire:model="status_kawin">
                    <option value="">-- Pilih Status Kawin --</option>
                    <option value="BELUM MENIKAH">BELUM MENIKAH</option>
                    <option value="MENIKAH">MENIKAH</option>
                    <option value="JANDA">JANDA</option>
                    <option value="DUDA">DUDA</option>
                </select>
                @error('status_kawin') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            
            <!-- Status Merokok -->
            <div class="input-group">
                <p class="jenis-kelamin">Status MEROKOK</p>
                <div class="radio-inputs">
                    <label class="radio">
                        <input type="radio" wire:model="status_merokok" value="MEROKOK">
                        <span class="name">MEROKOK</span>
                    </label>
                    <label class="radio">
                        <input type="radio" wire:model="status_merokok" value="TIDAK MEROKOK" checked>
                        <span class="name">TIDAK MEROKOK</span>
                    </label>
                </div>
            </div>
            
            <!-- Nama Ayah -->
            <div class="input-group">
                <label for="nama_ayah">Nama Ayah</label>
                <input type="text" id="nama_ayah" wire:model="nama_ayah" placeholder="ketik disini">
                @error('nama_ayah') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            
            <!-- Nama Ibu -->
            <div class="input-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input type="text" id="nama_ibu" wire:model="nama_ibu" placeholder="ketik disini">
                @error('nama_ibu') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            
            <!-- Riwayat Penyakit -->
            <div class="input-group">
                <label for="riwayat_penyakit">Riwayat Penyakit</label>
                <input type="text" id="riwayat_penyakit" wire:model="riwayat_penyakit" placeholder="ketik disini atau '-' jika tidak ada">
            </div>
            
            <!-- Cek Kesehatan -->
            <div class="input-group">
                <label for="cek_kesehatan">Cek Kesehatan</label>
                <select wire:model="cek_kesehatan" id="cek_kesehatan">
                    <option value="">-- Pilih Frekuensi Cek Kesehatan --</option>
                    <option value="SETIAP BULAN">SETIAP BULAN</option>
                    <option value="3 BULAN SEKALI">3 BULAN SEKALI</option>
                    <option value="6 BULAN SEKALI">6 BULAN SEKALI</option>
                    <option value="SETAHUN SEKALI">SETAHUN SEKALI</option>
                    <option value="TIDAK PERNAH">TIDAK PERNAH</option>
                </select>
            </div>
            
            <!-- Asuransi Kesehatan -->
            <div class="input-group">
                <label for="asuransi_kesehatan">Asuransi Kesehatan</label>
                <select wire:model="asuransi_kesehatan" id="asuransi_kesehatan">
                    <option value="">-- Pilih Asuransi Kesehatan --</option>
                    <option value="BPJS KESEHATAN">BPJS KESEHATAN</option>
                    <option value="BPJS PRIBADI">BPJS PRIBADI</option>
                    <option value="ASURANSI SWASTA">ASURANSI SWASTA</option>
                    <option value="TIDAK MEMILIKI">TIDAK MEMILIKI</option>
                </select>
            </div>
            
            <!-- BPJS Ketenagakerjaan -->
            <div class="input-group">
                <p class="jenis-kelamin">BPJS KETENAGAKERJAAN</p>
                <div class="radio-inputs">
                    <label class="radio">
                        <input type="radio" wire:model="bpjs_ketenagakerjaan" value="MEMILIKI">
                        <span class="name">MEMILIKI</span>
                    </label>
                    <label class="radio">
                        <input type="radio" wire:model="bpjs_ketenagakerjaan" value="TIDAK MEMILIKI" checked>
                        <span class="name">TIDAK MEMILIKI</span>
                    </label>
                </div>
            </div>
            
            <!-- Keinginan Menambah Anak -->
            <div class="input-group">
                <p class="jenis-kelamin">KEINGINAN MENAMBAH ANAK</p>
                <div class="radio-inputs">
                    <label class="radio">
                        <input type="radio" wire:model="keinginan_menambah_anak" value="YA">
                        <span class="name">YA</span>
                    </label>
                    <label class="radio">
                        <input type="radio" wire:model="keinginan_menambah_anak" value="TIDAK" checked>
                        <span class="name">TIDAK</span>
                    </label>
                </div>
            </div>
            
            <!-- Jumlah Anak -->
            <div class="input-group">
                <label for="jumlah_anak">Jumlah Anak</label>
                <input type="number" id="jumlah_anak" wire:model="jumlah_anak" min="0" placeholder="0">
                @error('jumlah_anak') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            
            <!-- Alat Kontrasepsi -->
            <div class="input-group">
                <label for="alat_kontrasepsi">Alat Kontrasepsi</label>
                <select id="alat_kontrasepsi" wire:model="alat_kontrasepsi">
                    <option value="">-- Pilih alat kontrasepsi --</option>
                    <option value="KONDOM">KONDOM</option>
                    <option value="IUD/SPIRAL">IUD/SPIRAL</option>
                    <option value="PIL">PIL</option>
                    <option value="SUNTIK">SUNTIK</option>
                    <option value="IMPLANT">IMPLANT</option>
                    <option value="STERIL">STERIL</option>
                    <option value="TIDAK ADA">TIDAK ADA</option>
                </select>
            </div>
            
            <!-- Range Usia -->
            <div class="input-range">
                <label for="usia">Usia (Tahun)</label>
                <input type="range" id="usia" wire:model.live="usia" min="0" max="150">
                <span>Usia: <span>{{ $usia }}</span> tahun</span>
                @error('usia') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            
            <button type="submit" class="btn-form">SIMPAN</button>
        </form>
    </div>
</div>
