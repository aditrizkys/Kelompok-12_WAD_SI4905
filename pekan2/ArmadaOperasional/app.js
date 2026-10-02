let allData = [];
let filteredData = [];
const rowsPerPage = 10;
let currentPage = 1;

// Helper: Mengambil nilai dokumen perawatan (String atau Object)
function getDokumenText(item) {
  if (!item.nomor_dokumen_perawatan) return '-';
  
  if (typeof item.nomor_dokumen_perawatan === 'object') {
    return item.nomor_dokumen_perawatan.no || 
           item.nomor_dokumen_perawatan.nomor || 
           item.nomor_dokumen_perawatan.kode || 
           '-';
  }
  
  return item.nomor_dokumen_perawatan;
}

// Fetch Data
function loadVehicleData() {
  const tableBody = document.getElementById('tableBody');

  fetch('data.json')
    .then(response => {
      if (!response.ok) {
        throw new Error(`Gagal memuat file (Status: ${response.status})`);
      }
      return response.json();
    })
    .then(data => {
      allData = Array.isArray(data) ? data : (data.data || []);
      filteredData = [...allData];
      renderTable();
    })
    .catch(error => {
      console.error('Fetch Error:', error);
      if (tableBody) {
        tableBody.innerHTML = `
          <tr>
            <td colspan="4" class="text-center text-danger">
              <strong>Error:</strong> ${error.message}. Pastikan file data.json tidak di-lock/read-only.
            </td>
          </tr>`;
      }
    });
}

// Render Tabel
function renderTable() {
  const tableBody = document.getElementById('tableBody');
  const paginationNav = document.getElementById('pagination');
  if (!tableBody) return;

  tableBody.innerHTML = '';

  if (filteredData.length === 0) {
    tableBody.innerHTML = `<tr><td colspan="4" class="text-center">Data tidak ditemukan.</td></tr>`;
    if (paginationNav) paginationNav.innerHTML = '';
    return;
  }

  const start = (currentPage - 1) * rowsPerPage;
  const end = start + rowsPerPage;
  const paginatedData = filteredData.slice(start, end);

  paginatedData.forEach((item, index) => {
    const row = document.createElement('tr');
    const teksDokumen = getDokumenText(item);

    row.innerHTML = `
      <td>${start + index + 1}</td>
      <td>${item.jenis_kendaraan || '-'}</td>
      <td>${item.nomor_seri || '-'}</td>
      <td>${teksDokumen}</td>
    `;
    tableBody.appendChild(row);
  });

  renderPagination();
}

// Pagination
function renderPagination() {
  const paginationNav = document.getElementById('pagination');
  if (!paginationNav) return;
  
  paginationNav.innerHTML = '';
  const pageCount = Math.ceil(filteredData.length / rowsPerPage);

  if (pageCount <= 1) return;

  for (let i = 1; i <= pageCount; i++) {
    const li = document.createElement('li');
    li.className = `page-item ${i === currentPage ? 'active' : ''}`;
    li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
    
    li.addEventListener('click', (e) => {
      e.preventDefault();
      currentPage = i;
      renderTable();
    });

    paginationNav.appendChild(li);
  }
}

// Search Handling
function handleSearch(query) {
  const keyword = query.toLowerCase().trim();
  
  filteredData = allData.filter(item => {
    const nama = (item.jenis_kendaraan || '').toLowerCase();
    const seri = (item.nomor_seri || '').toLowerCase();
    const dokumen = getDokumenText(item).toLowerCase();

    return nama.includes(keyword) || seri.includes(keyword) || dokumen.includes(keyword);
  });

  currentPage = 1;
  renderTable();
}

// Event Listener dan Panggilan Awal
function initApp() {
  const searchInput = document.getElementById('searchInput');
  if (searchInput) {
    searchInput.addEventListener('keyup', function() {
      handleSearch(this.value);
    });
  }

  loadVehicleData();
}

document.addEventListener('DOMContentLoaded', initApp);