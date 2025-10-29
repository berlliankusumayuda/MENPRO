import ApexCharts from 'apexcharts';

document.addEventListener('DOMContentLoaded', function () {
  const chartArea = document.querySelector('#chart-area');
  const buttons = document.querySelectorAll('.button-area button');
  let currentChart = null;

  // === Data tiap chart ===
  const chartConfigs = {
    umurChart: {
      title: "Distribusi Umur",
      series: [20, 40, 25, 15, 22],
      labels: ['Bayi', 'Balita', 'Remaja', 'Dewasa', 'Lansia']
    },
    pendidikanChart: {
      title: "Pendidikan Terakhir",
      series: [1, 2, 36, 40, 44, 3],
      labels: ['SD', 'SMP', 'SMA/SMK', 'D1/D2/D3', 'S1', 'S2', 'S3']
    },
    pekerjaanChart: {
      title: "Agama",
      series: [76, 8, 10, 1, 2, 1],
      labels: ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu']
    },
    statusChart: {
      title: "Status Perkawinan",
      series: [60, 40, 20, 7],
      labels: ['Belum Menikah', 'Menikah', 'Janda', 'Duda']
    }
  };

  // === Fungsi render chart ===
  function renderChart(target) {
    const cfg = chartConfigs[target];
    if (!cfg) return;

    // Hapus chart lama dulu
    if (currentChart) {
      currentChart.destroy();
      chartArea.innerHTML = '';
    }

    const total = cfg.series.reduce((a, b) => a + b, 0);

    const options = {
      chart: { type: 'donut', height: 650 },
      series: cfg.series,
      labels: cfg.labels,
      title: {
        text: cfg.title,
        align: 'center',
        style: { fontSize: '28px', fontWeight: 'bold' }
      },
      legend: { position: 'bottom' },
      dropShadow: {
        enabled: true,
        top: 0,
        left: 0,
        blur: 10,
        opacity: 0.5
      },
      plotOptions: {
        pie: {
          donut: {
            size: '65%',
            labels: {
              show: true,
              name: {
                show: true,
                offsetY: -10,
                fontSize: '18px'
              },
              value: {
                show: true,
                fontSize: '28px',
                fontWeight: 700,
                color: '#333',
                formatter: () => total
              },
              total: {
                show: true,
                label: 'Total',
                fontSize: '20px',
                fontWeight: 600,
                color: '#666',
                formatter: () => total
              }
            }
          }
        }
      }
    };

    currentChart = new ApexCharts(chartArea, options);
    currentChart.render();
  }

  // === Klik tombol ganti chart ===
  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      const target = btn.getAttribute('data-target');

      buttons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      renderChart(target);
    });
  });

  renderChart('umurChart');
});
