<div class="datawarga">
    <h1>DATA WARGA</h1>
    <div class="form-datawarga">
        <h2>INPUT WARGA DIBAWAH INI</h2>
        <form class="wargaForm">
            <!-- Identitas -->
            <div class="input-group">
                <label for="no_kk">No. Kartu Keluarga</label>
                <input type="text" id="no_kk" name="no_kk" placeholder="ketik disini">
            </div>
            <div class="input-group">
                <label for="nik">Nomor Induk Keluarga</label>
                <input type="text" id="nik" name="nik" placeholder="ketik disini">
            </div>
            <div class="input-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="ketik disini">
            </div>
            <div class="input-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="ketik disini">
            </div>
            <div class="input-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir">
            </div>
            <div class="input-group">
                <p class="jenis-kelamin">jenis kelamin</p>
                <div class="radio-inputs">
                    <label class="radio" for="jns-kel1">
                        <input type="radio" name="kelamin" checked id="jns-kel1" value="L">
                        <span class="name">LAKI-LAKI</span>
                    </label>
                    <label class="radio" for="jns=kel2">
                        <input type="radio" name="kelamin" id="jns=kel2" value="P">
                        <span class="name" >PEREMPUAN</span>
                    </label>
                </div>
            </div>
            <div class="input-group">
                <label for="golongan_darah">Golongan Darah</label>
                <select id="golongan_darah" name="golongan_darah">
                    <option value="">-- Pilih Golongan Darah --</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
            </div>
            <div class="input-group">
                <label for="agama">Agama</label>
                <select id="agama" name="agama">
                    <option value="">-- Pilih Agama --</option>
                    <option value="Islam">ISLAM</option>
                    <option value="Kristen">KRISTEN</option>
                    <option value="Katolik">KATOLIK</option>
                    <option value="Hindu">HINDU</option>
                    <option value="Budha">BUDHA</option>
                    <option value="Konghucu">KONGHUCU</option>
                </select>
            </div>
            <div class="input-group">
                <label for="alamat">Alamat</label>
                <textarea type="text" id="alamat" name="alamat" placeholder="ketik disini"></textarea>
            </div>
            <div class="input-group">
                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                <select id="pendidikan_terakhir" name="pendidikan_terakhir">
                    <option value="">-- Pilih Pendidikan Terakhir --</option>
                    <option value="Belum Sekolah">BELUM SEKOLAH</option>
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA/SMK">SMA/SMK</option>
                    <option value="D1/D2/D3">D1/D2/D3</option>
                    <option value="S1/D4">S1/D4</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
            <div class="input-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" id="pekerjaan" name="pekerjaan" placeholder="ketik disini">
            </div>
            <div class="input-group">
                <label for="STATUS_KAWIN">STATUS KAWIN</label>
                <select id="STATUS_KAWIN" name="STATUS_KAWIN">
                    <option value="">-- Pilih Pendidikan Terakhir --</option>
                    <option value="BELUM MENIKAH">BELUM MENIKAH</option>
                    <option value="MENIKAH">MENIKAH</option>
                    <option value="JANDA">JANDA</option>
                    <option value="DUDA">DUDA</option>
                </select>
            </div>
            <div class="input-group">
                <p class="jenis-kelamin">Status MEROKOK</p>
                <div class="radio-inputs">
                    <label class="radio" for="rokok1">
                        <input type="radio" name="rokok" checked id="rokok1">
                        <span class="name">MEROKOK</span>
                    </label>
                    <label class="radio" for="rokok2">
                        <input type="radio" name="rokok" id="rokok2">
                        <span class="name" >TIDAK MEROKOK</span>
                    </label>
                </div>
            </div>
            <div class="input-group">
                <label for="nama_ayah">Nama Ayah</label>
                <input type="text" id="nama_ayah" name="nama_ayah" placeholder="ketik disini">
            </div>
            <div class="input-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input type="text" id="nama_ibu" name="nama_ibu" placeholder="ketik disini">
            </div>
            <div class="input-group">
                <label for="riwayat_penyakit">Riwayat Penyakit</label>
                <input type="text" id="riwayat_penyakit" name="riwayat_penyakit" placeholder="ketik disini">
            </div>
            <div class="input-group">
                <label for="cek_kesehatan">Cek Kesehatan Rutin</label>
                <select name="cek_kesehatan" id="cek_kesehatan">
                    <option value="">-- Pilih Asuransi Kesehatan --</option>
                    <option value="SETIAP BULAN">SETIAP BULAN</option>
                    <option value="3 BULAN SEKALI">3 BULAN SEKALI</option>
                    <option value="6 BULAN SEKALI">6 BULAN SEKALI</option>
                    <option value="SETAHUN SEKALI">SETAHUN SEKALI</option>
                    <option value="TIDAK PERNAH">TIDAK PERNAH</option>
                </select>
            </div>
            <div class="input-group">
                <label for="asuransi">Asuransi Kesehatan</label>
                <select name="asuransi" id="asuransi">
                    <option value="">-- Pilih Asuransi Kesehatan --</option>
                    <option value="Tidak Memiliki">TIDAK MEMILIKI</option>
                    <option value="BPJS KESEHATAN">BPJS KESEHATAN</option>
                    <option value="BPJS PRIBADI">BPJS PRIBADI</option>
                    <option value="ASURANSI SWASTA">ASRANSI SWASTA</option>
                </select>
            </div>
            <div class="input-group">
                <p class="jenis-kelamin">BPJS KETENAGAKERJAAN</p>
                <div class="radio-inputs">
                    <label class="radio" for="bpjs1">
                        <input type="radio" name="bpjs" checked id="bpjs1">
                        <span class="name">MEMILIKI</span>
                    </label>
                    <label class="radio" for="bpjs2">
                        <input type="radio" name="bpjs" id="bpjs2">
                        <span class="name" >TIDAK MEMILIKI</span>
                    </label>
                </div>
            </div>
            
            <div class="input-group">
                    <label for="jumlah_anak">Jumlah Anak</label>
                    <input type="number" id="jumlah_anak" name="jumlah_anak" min="0" placeholder="ketik disini">
                </div>

            <div class="input-group">
                <p class="jenis-kelamin">KEINGINAN MENAMBAH ANAK</p>
                <div class="radio-inputs">
                    <label class="radio" for="ANAK1">
                        <input type="radio" name="ANAK" checked id="ANAK1">
                        <span class="name">YA</span>
                    </label>
                    <label class="radio" for="ANAK2">
                        <input type="radio" name="ANAK" id="ANAK2">
                        <span class="name" >TIDAK</span>
                    </label>
                </div>
            </div>
            <div class="input-group">
                <label for="alat_kontrasepsi">Alat Kontrasepsi</label>
                <select id="alat_kontrasepsi" name="alat_kontrasepsi">
                    <option value="">-- Pilih alat kontrasepsi --</option>
                    <option value="KONDOM">KONDOM</option>
                    <option value="IUD/SPIRAL">IUD/SPIRAL</option>
                    <option value="PIL">PIL</option>
                    <option value="SUNTIK">SUNTIK</option>
                    <option value="IMPLANT">IMPLANT</option>
                    <option value="STERIL">STERIL</option></option>
                </select>
            </div>
            <button type="submit" class="btn-form"> SIMPAN </button>
        </form>
    </div>
</div>
