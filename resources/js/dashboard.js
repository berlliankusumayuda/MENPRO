const checkbox = document.getElementById('checkbox');
const sidebar = document.querySelector('.sidebar');
const page =  document.querySelector('.container');

  // === Saat halaman dimuat ===
const savedState = localStorage.getItem('sidebarCollapsed');
if (savedState === 'true') {
    checkbox.checked = true;
    page.classList.remove('collapsed');
}else{
    page.classList.add('collapsed');
}

  // === Saat user klik toggle ===
checkbox.addEventListener('change', () => {
    if (checkbox.checked) {
        page.classList.remove('collapsed');
        localStorage.setItem('sidebarCollapsed', 'true');
    } else {
        page.classList.add('collapsed');
        localStorage.setItem('sidebarCollapsed', 'false');
    }
});

