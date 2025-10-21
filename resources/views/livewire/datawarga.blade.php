<div>
    <h2>DATA WARGA</h2>
  <div class="form-datawarga">
  <h2>ISI DATA WARGA DIBAWAH INI</h2>
  <form>
    <!-- Data Identitas -->
    <label>
      No. Kartu Keluarga:<br>
      <input type="text" name="no_kk" placeholder="ketik disini">
    </label><br><br>

    <label>
      Nomor Induk Keluarga:<br>
      <input type="text" name="nik" placeholder="ketik disini">
    </label><br><br>

    <label>
      Nama:<br>
      <input type="text" name="nama" placeholder="ketik disini">
    </label><br><br>

    <label>
      Tempat Lahir:<br>
      <input type="text" name="tempat_lahir" placeholder="ketik disini">
    </label><br><br>

    <label>
      Tanggal Lahir:<br>
      <input type="date" name="tanggal_lahir">
    </label><br><br>

    <!-- Jenis Kelamin -->
    <label>
      Jenis Kelamin:<br>
      <select name="jenis_kelamin">
        <option value="">-- Pilih Jenis Kelamin --</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </label><br><br>

    <!-- Golongan Darah -->
    <label>
      Golongan Darah:<br>
      <select name="golongan_darah">
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
    </label><br><br>

    <!-- Agama -->
    <label>
      Agama:<br>
      <select name="agama">
        <option value="">-- Pilih Agama --</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddha">Buddha</option>
        <option value="Konghucu">Konghucu</option>
      </select>
    </label><br><br>

    <!-- Alamat -->
    <label>
      Alamat:<br>
      <input type="text" name="alamat" placeholder="ketik disini">
    </label><br><br>

    <!-- Pendidikan -->
    <label>
      Pendidikan Terakhir:<br>
      <select name="pendidikan_terakhir">
        <option value="">-- Pilih Pendidikan Terakhir --</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="SMK">SMK</option>
        <option value="DIPLOMA">Diploma</option>
        <option value="SARJANA">Sarjana</option>
      </select>
    </label><br><br>

    <label>
      Pekerjaan:<br>
      <input type="text" name="pekerjaan" placeholder="ketik disini">
    </label><br><br>

    <!-- Status -->
    <label>
      Status Kawin:<br>
      <input type="text" name="status_kawin" placeholder="ketik disini">
    </label><br><br>

    <label>
      Status Merokok:<br>
      <input type="text" name="status_merokok" placeholder="ketik disini">
    </label><br><br>

    <!-- Keluarga -->
    <label>
      Nama Ayah:<br>
      <input type="text" name="nama_ayah" placeholder="ketik disini">
    </label><br><br>

    <label>
      Nama Ibu:<br>
      <input type="text" name="nama_ibu" placeholder="ketik disini">
    </label><br><br>

    <!-- Kesehatan -->
    <label>
      Riwayat Penyakit:<br>
      <input type="text" name="riwayat_penyakit" placeholder="ketik disini">
    </label><br><br>

    <label>
      Cek Kesehatan:<br>
      <input type="text" name="cek_kesehatan" placeholder="ketik disini">
    </label><br><br>

    <label>
      Asuransi Kesehatan:<br>
      <input type="text" name="asuransi" placeholder="ketik disini">
    </label><br><br>

    <label>
      BPJS Ketenagakerjaan:<br>
      <input type="text" name="bpjs" placeholder="ketik disini">
    </label><br><br>

    <!-- Anak dan Keluarga Berencana -->
    <label>
      Rencana Tambah Anak:<br>
      <input type="text" name="rencana_tambah_anak" placeholder="ketik disini">
    </label><br><br>

    <label>
      Jumlah Anak yang Sudah Dilahirkan:<br>
      <input type="number" name="jumlah_anak" min="0">
    </label><br><br>

    <label>
      Alat Kontra:<br>
      <input type="text" name="alat_kontra" placeholder="ketik disini">
    </label><br><br>

    <!-- Usia -->
    <label>
      Range Usia:<br>
      <input type="range" name="usia" min="0" max="90">
    </label>
    <br>
    <span>Usia: <span id="usiaValue">0</span> tahun</span>
  </form>
  </div>
</div>
