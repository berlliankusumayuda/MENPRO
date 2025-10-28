// file: tableWarga.js
window.addEventListener("resize", () => {
  // Trigger reflow biar posisi sticky di-refresh
  const stickyCols = document.querySelectorAll(".sticky-col");
  stickyCols.forEach(col => {
    col.style.position = "relative";
    col.offsetHeight; // force reflow
    col.style.position = "sticky";
  });
});


window.addEventListener("DOMContentLoaded", function () {
  const scrollDiv = document.getElementById("scrollDiv");
  const tbody = document.getElementById("tbodyWarga");
  const pagination = document.getElementById("pagination");

  if (!scrollDiv || !tbody || !pagination) {
    console.error("Elemen tabel warga tidak ditemukan di HTML.");
    return;
  }

  // Scroll horizontal dengan mouse wheel
  scrollDiv.addEventListener("wheel", (e) => {
    e.preventDefault();
    scrollDiv.scrollLeft += e.deltaY;
  });

  // Data dummy
  const data = [];
  for (let i = 1; i <= 100; i++) {
    data.push({
      nokk: i,
      nik: 100000 + i,
      nama: "Nama " + i,
      tempat: "Kota " + i,
      tgll: "2000-01-" + (i % 28 + 1),
      pl: "L",
      gol: "O",
      agama: "Islam",
      alamat: "Jl. " + i,
      pend: "SMA",
      pekerjaan: "Pekerja",
      status: "Belum Kawin",
      ayah: "Ayah" + i,
      ibu: "Ibu" + i,
      merokok: "Tidak",
      penyakit: "-",
      cek: "Ya",
      asuransi: "BPJS",
      bpjs: "Ya",
      kontrasepsi: "-",
      anak: 0,
      tambah: "Tidak",
    });
  }

  const rowsPerPage = 10;
  let currentPage = 1;
  const totalPages = Math.ceil(data.length / rowsPerPage);

  function renderTable(page) {
    tbody.innerHTML = "";
    const start = (page - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    const pageData = data.slice(start, end);

    pageData.forEach((d) => {
      const tr = document.createElement("tr");
      let colIndex = 0;
      for (let key in d) {
        const td = document.createElement("td");
        td.textContent = d[key];
        if (colIndex === 0) td.classList.add("sticky-col", "col1");
        if (colIndex === 1) td.classList.add("sticky-col", "col2");
        if (colIndex === 2) td.classList.add("sticky-col", "col3");
        tr.appendChild(td);
        colIndex++;
      }
      tbody.appendChild(tr);
    });

    renderPagination();
  }

  function renderPagination() {
    pagination.innerHTML = "";
    for (let i = 1; i <= totalPages; i++) {
      const btn = document.createElement("button");
      btn.textContent = i;
      if (i === currentPage) btn.disabled = true;

      btn.addEventListener("click", () => {
        currentPage = i;
        renderTable(currentPage);
      });

      pagination.appendChild(btn);
    }
  }

  // Render pertama kali
  renderTable(currentPage);

});
