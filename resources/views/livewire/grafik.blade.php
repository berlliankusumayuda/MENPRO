<div>
  <h3>GRAFIK</h3>
  <p>Grafik ini berfungsi untuk melihat diagram kategori umur warga</p>

  <div class="kategori-umur">
    <ul>
      <li><b>Balita 0–5 tahun</b></li>
      <li><b>Remaja 12–19/25 tahun</b></li>
      <li><b>Lansia : 60+ tahun</b></li>
    </ul>
    <ul>
      <li><b>Kanak-kanak 5–12 tahun</b></li>
      <li><b>Dewasa 20–60 tahun</b></li>
    </ul>
  </div>

  <div>
    <svg width="400" height="250">
      <!-- Sumbu -->
      <line x1="50" y1="20" x2="50" y2="200" stroke="black" />
      <line x1="50" y1="200" x2="380" y2="200" stroke="black" />

      <!-- Label sumbu Y -->
      <text x="10" y="120" transform="rotate(-90 10,120)" font-size="12" font-weight="bold">Persentase</text>

      <!-- Batang grafik -->
      <rect x="70" y="150" width="40" height="50" fill="#ccc" />
      <rect x="130" y="120" width="40" height="80" fill="#ccc" />
      <rect x="190" y="80" width="40" height="120" fill="#ccc" />
      <rect x="250" y="140" width="40" height="60" fill="#ccc" />
      <rect x="310" y="80" width="40" height="120" fill="#ccc" />

      <!-- Label bawah -->
      <text x="70" y="220" font-size="12">Balita</text>
      <text x="130" y="220" font-size="12">Kanak-kanak</text>
      <text x="190" y="220" font-size="12">Remaja</text>
      <text x="250" y="220" font-size="12">Dewasa</text>
      <text x="310" y="220" font-size="12">Lansia</text>
    </svg>
  </div>

</div>
