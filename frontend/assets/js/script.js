document.addEventListener('DOMContentLoaded', function() {
  const spinner = document.getElementById('loading-spinner');
  if (spinner) {
    spinner.style.display = 'flex';
    spinner.style.opacity = 1;
    setTimeout(() => {
      spinner.style.transition = 'opacity 0.4s';
      spinner.style.opacity = 0;
      setTimeout(() => {
        spinner.style.display = 'none';
        spinner.style.transition = '';
      }, 400);
    }, 500); // 0.5 second minimum
  }

  // Profile dropdown for mobile only
  const frame = document.querySelector('.top-menu .frame');
  let dropdown = document.getElementById('profileDropdown');
  function handleProfileDropdown() {
    if (window.innerWidth < 600) {
      if (!dropdown && frame) {
        dropdown = document.createElement('div');
        dropdown.id = 'profileDropdown';
        dropdown.innerHTML = `
          <div class="dropdown-content">
            <div class="profile-name">John Doe</div>
            <div class="profile-role">Global Admin</div>
          </div>
        `;
        frame.appendChild(dropdown);
      }
      if (frame && dropdown) {
        frame.onclick = function(e) {
          e.stopPropagation();
          dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        };
        document.addEventListener('click', hideDropdownOnClick);
        dropdown.addEventListener('click', function(e) {
          e.stopPropagation();
        });
      }
    } else {
      if (dropdown) {
        dropdown.style.display = 'none';
      }
      if (frame) {
        frame.onclick = null;
      }
      document.removeEventListener('click', hideDropdownOnClick);
    }
  }
  function hideDropdownOnClick() {
    if (dropdown) dropdown.style.display = 'none';
  }
  handleProfileDropdown();
  window.addEventListener('resize', handleProfileDropdown);

  // Insert page title next to hamburger for mobile
  const sidebarToggle = document.querySelector('.sidebar-toggle');
  if (sidebarToggle && window.innerWidth <= 600) {
    let mobileTitle = document.querySelector('.mobile-title');
    if (!mobileTitle) {
      mobileTitle = document.createElement('span');
      mobileTitle.className = 'mobile-title';
      const walkin = document.querySelector('.walkin .walk-in');
      mobileTitle.textContent = walkin ? walkin.textContent : 'Ddwdashboard';
      sidebarToggle.insertAdjacentElement('afterend', mobileTitle);
    }
  }
});

function showSpinner() {
  document.getElementById('loading-spinner').style.display = 'block';
}
function hideSpinner() {
  document.getElementById('loading-spinner').style.display = 'none';
}

// === Table Sorting for All Tables with .table class ===
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.table').forEach(function(table) {
    const thead = table.querySelector('thead');
    if (!thead) return;
    const headers = thead.querySelectorAll('th');
    headers.forEach((th, colIdx) => {
      // Add sort button if not already present
      if (!th.querySelector('.sort-btn')) {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'sort-btn';
        btn.style.background = 'none';
        btn.style.border = 'none';
        btn.style.cursor = 'pointer';
        btn.style.padding = '0 4px';
        btn.style.marginLeft = '4px';
        btn.style.fontSize = '1em';
        btn.innerHTML = '⇅';
        btn.setAttribute('aria-label', 'Sort');
        th.appendChild(btn);

        let asc = true;
        // Make the whole th clickable for sorting
        th.style.cursor = 'pointer';
        th.addEventListener('click', function(e) {
          // Prevent double sort if button is clicked
          if (e.target === btn) e.stopPropagation();
          sortTable(table, colIdx, asc);
          asc = !asc;
          btn.innerHTML = asc ? '⇅' : (asc ? '↑' : '↓');
        });
        // Also keep the button working for accessibility
        btn.addEventListener('click', function(e) {
          e.stopPropagation();
          sortTable(table, colIdx, asc);
          asc = !asc;
          btn.innerHTML = asc ? '⇅' : (asc ? '↑' : '↓');
        });
      }
    });
  });

  function sortTable(table, col, asc = true) {
    const tbody = table.querySelector('tbody');
    if (!tbody) return;
    const rows = Array.from(tbody.querySelectorAll('tr'));
    const getCellValue = (row, idx) => row.children[idx]?.innerText || '';
    const isNumeric = rows.every(row => !isNaN(getCellValue(row, col).replace(/,/g, '')));
    rows.sort((a, b) => {
      let vA = getCellValue(a, col).trim();
      let vB = getCellValue(b, col).trim();
      if (isNumeric) {
        vA = parseFloat(vA.replace(/,/g, ''));
        vB = parseFloat(vB.replace(/,/g, ''));
        return asc ? vA - vB : vB - vA;
      } else {
        return asc ? vA.localeCompare(vB) : vB.localeCompare(vA);
      }
    });
    rows.forEach(row => tbody.appendChild(row));
  }
});

document.addEventListener('DOMContentLoaded', function () {
  // Pagination for Car In Park Table
  const table = document.querySelector('.table');
  const tbody = table.querySelector('tbody');
  const rows = Array.from(tbody.querySelectorAll('tr'));
  const info = document.getElementById('table-info');
  const pagination = document.getElementById('pagination-controls');
  const entriesSelect = document.getElementById('entriesPerPage');

  let currentPage = 1;
  let entriesPerPage = parseInt(entriesSelect.value);

  function renderTable() {
    // Hide all rows
    rows.forEach(row => row.style.display = 'none');
    // Calculate range
    const total = rows.length;
    const totalPages = Math.ceil(total / entriesPerPage);
    const start = (currentPage - 1) * entriesPerPage;
    const end = Math.min(start + entriesPerPage, total);
    // Show only current page rows
    rows.slice(start, end).forEach(row => row.style.display = '');
    // Info text
    info.textContent = `Showing ${start + 1}-${end} out of ${total} items`;
    // Pagination buttons
    pagination.innerHTML = '';
    // Previous button
    const prevBtn = document.createElement('button');
    prevBtn.textContent = 'Previous';
    prevBtn.className = 'pagination-btn';
    prevBtn.disabled = currentPage === 1;
    prevBtn.onclick = () => { if (currentPage > 1) { currentPage--; renderTable(); }};
    pagination.appendChild(prevBtn);
    // Page numbers
    for (let i = 1; i <= totalPages; i++) {
      const btn = document.createElement('button');
      btn.textContent = i;
      btn.className = 'pagination-btn' + (i === currentPage ? ' active' : '');
      btn.onclick = () => { currentPage = i; renderTable(); };
      pagination.appendChild(btn);
    }
    // Next button
    const nextBtn = document.createElement('button');
    nextBtn.textContent = 'Next';
    nextBtn.className = 'pagination-btn';
    nextBtn.disabled = currentPage === totalPages;
    nextBtn.onclick = () => { if (currentPage < totalPages) { currentPage++; renderTable(); }};
    pagination.appendChild(nextBtn);
  }

  entriesSelect.addEventListener('change', function () {
    entriesPerPage = parseInt(this.value);
    currentPage = 1;
    renderTable();
  });

  renderTable();
});
