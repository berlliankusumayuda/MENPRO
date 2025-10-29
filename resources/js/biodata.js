document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll('.btn-bio');
  const sections = document.querySelectorAll('.bio-section');

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      const target = btn.getAttribute('data-target');

      // Sembunyikan semua section
      sections.forEach(sec => sec.style.display = 'none');

      // Hanya tampilkan section yang diklik
      document.getElementById(target).style.display = 'block';

      // Ganti warna tombol aktif
      buttons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
    });
  });
});
