<div class="sidebar">
    <div class="sidebar_header">
        <input type="checkbox" id="checkbox">
        <label for="checkbox" class="toggle">
        <div class="bar bar--top"></div>
        <div class="bar bar--middle"></div>
        <div class="bar bar--bottom"></div>
        </label>
        <h1>Gergaji</h1>
    </div>
<div class="sidebar-content">
    <div class="sidebar-item">
        <a href="">Beranda</a>
    </div>
    <div class="sidebar-item">
        <a href="">Tabel Warga</a>
    </div>
    <div class="sidebar-item">
        <a href="">Data Warga</a>
    </div>
    <div class="sidebar-item">
        <a href="">Biodata</a>
    </div>
    <div class="sidebar-item">
        <a href="">Grafik</a>
    </div>
    <div class="sidebar-item">
        <a href="">logout</a>
    </div>
</div>
</div>

<script>
  const checkbox = document.getElementById('checkbox');
  const sidebar = document.querySelector('.sidebar');

  // === Saat halaman dimuat ===
  const savedState = localStorage.getItem('sidebarCollapsed');
  if (savedState === 'true') {
    checkbox.checked = true;
    sidebar.classList.add('collapsed');
  }

  // === Saat user klik toggle ===
  checkbox.addEventListener('change', () => {
    if (checkbox.checked) {
      sidebar.classList.add('collapsed');
      localStorage.setItem('sidebarCollapsed', 'true');
    } else {
      sidebar.classList.remove('collapsed');
      localStorage.setItem('sidebarCollapsed', 'false');
    }
  });
</script>
