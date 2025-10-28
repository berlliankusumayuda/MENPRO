document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".sidebar-item a");
    const checkbox = document.getElementById("checkbox");
    const pageContainer = document.querySelector(".container");

    // === STATE SIDEBAR ===
    const savedState = localStorage.getItem("sidebarCollapsed");
    if (savedState === "true") {
        checkbox.checked = true;
        pageContainer.classList.remove("collapsed");
    } else {
        checkbox.checked = false;
        pageContainer.classList.add("collapsed");
    }

    // Update active links sesuai sidebar state
    function updateActiveLinks() {
        const lastPage = localStorage.getItem("activePage");
        links.forEach(link => link.parentElement.classList.remove("active"));
        if (checkbox.checked && lastPage) {
            const activeLink = Array.from(links).find(link =>
                link.getAttribute("wire:click").includes(`'${lastPage}'`)
            );
            if (activeLink) activeLink.parentElement.classList.add("active");
        }
    }

    updateActiveLinks();

    // Toggle sidebar
    checkbox.addEventListener("change", () => {
        if (checkbox.checked) {
            pageContainer.classList.remove("collapsed");
            localStorage.setItem("sidebarCollapsed", "true");
        } else {
            pageContainer.classList.add("collapsed");
            localStorage.setItem("sidebarCollapsed", "false");
        }
        updateActiveLinks();
    });

    // Klik ganti page + reload
    links.forEach(link => {
        link.addEventListener("click", function () {
            const match = this.getAttribute("wire:click").match(/page:\s*'([^']+)'/);
            if (!match) return;
            const page = match[1];
            const currentPage = localStorage.getItem("activePage");

            if (page !== currentPage) {
                localStorage.setItem("activePage", page);

                // update active class langsung
                links.forEach(l => l.parentElement.classList.remove("active"));
                if (checkbox.checked) this.parentElement.classList.add("active");

                // reload halaman biar data baru muncul
                setTimeout(() => location.reload(), 10);
            }
        });
    });
});
