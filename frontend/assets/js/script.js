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
  const profileArea = document.getElementById('mobileProfileArea');
  let dropdown = document.getElementById('profileDropdown');

  function handleProfileDropdown() {
    if (window.innerWidth < 600) {
      if (!dropdown && profileArea) {
        dropdown = document.createElement('div');
        dropdown.id = 'profileDropdown';
        dropdown.innerHTML = `
          <div class="dropdown-content">
            <div class="profile-name">John Doe</div>
            <div class="profile-role">Global Admin</div>
          </div>
        `;
        profileArea.appendChild(dropdown);
      }
      if (profileArea && dropdown) {
        profileArea.onclick = function(e) {
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
      if (profileArea) {
        profileArea.onclick = null;
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

document.addEventListener('DOMContentLoaded', function () {
  if (window.innerWidth < 600) {
    // Highlight the active nav icon based on current page
    const navLinks = document.querySelectorAll('.mobile-bottom-nav .nav-icon');
    const current = location.pathname.split('/').pop();
    navLinks.forEach(link => {
      if (link.getAttribute('href').includes(current)) {
        link.classList.add('active');
      }
    });
  }
});

document.addEventListener('DOMContentLoaded', function () {
  // Only run on mobile
  function isMobile() { return window.innerWidth <= 600; }

  const sidebarToggle = document.querySelector('.sidebar-toggle');
  const overlay = document.querySelector('.sidebar-overlay');
  const drawer = document.getElementById('mobile-side-drawer');

const sidebarMap = {
  'dashboard': 'assets/partials/sidebar.php',
  'parking': 'assets/partials/sidebar.php',
  'season parking': 'assets/partials/sidebar.php',
  'report': 'assets/partials/sidebar_report.php',
  'settings': 'assets/partials/sidebar.php',
  'admin': 'assets/partials/sidebar.php'
};
  function getCurrentSection() {
    return document.body.getAttribute('data-section') || 'home';
  }

  function loadSidebar(section) {
    const url = sidebarMap[section] || sidebarMap['dashboard'];
    // Always pass section for sidebar.php
    const fetchUrl = url.includes('sidebar.php')
      ? url + '?section=' + encodeURIComponent(section)
      : url;
    fetch(fetchUrl)
      .then(res => res.text())
      .then(html => {
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');
        const sideMenu = doc.querySelector('.side-menu');
        drawer.innerHTML = '';
        // Add close button
        const closeBtn = document.createElement('button');
        closeBtn.className = 'close-drawer-btn';
        closeBtn.innerHTML = '&times;';
        closeBtn.onclick = closeDrawer;
        drawer.appendChild(closeBtn);
        if (sideMenu) {
          drawer.appendChild(sideMenu);
        } else {
          drawer.innerHTML += '<div style="padding:24px;">Menu not found.</div>';
        }
      });
  }

  function openDrawer() {
    if (!isMobile()) return;
    const section = getCurrentSection();
    loadSidebar(section);
    drawer.classList.add('open');
    overlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeDrawer() {
    drawer.classList.remove('open');
    overlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  function enforceMobileDrawerVisibility() {
    if (!isMobile()) {
      drawer.classList.remove('open');
      overlay.classList.remove('active');
      drawer.style.display = 'none';
      overlay.style.display = 'none';
      document.body.style.overflow = '';
    } else {
      drawer.style.display = 'block';
      overlay.style.display = '';
    }
  }

  if (sidebarToggle) sidebarToggle.onclick = openDrawer;
  if (overlay) overlay.onclick = closeDrawer;
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && isMobile()) closeDrawer();
  });

  enforceMobileDrawerVisibility();
  window.addEventListener('resize', enforceMobileDrawerVisibility);
});

// Status toggle button logic (reusable for any .status-toggle-btn)
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.status-toggle-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
      if (btn.classList.contains('status-enabled')) {
        btn.classList.remove('status-enabled');
        btn.classList.add('status-disabled');
      } else {
        btn.classList.remove('status-disabled');
        btn.classList.add('status-enabled');
      }
    });
  });
});

document.addEventListener('DOMContentLoaded', function() {
  // Holiday Date Overlay logic
  const openBtn = document.getElementById('openHolidayDateConfigBtn');
  const overlay = document.getElementById('holidayDateOverlay');
  const closeBtn = document.getElementById('closeHolidayDateOverlayBtn');
  const agreeBtn = document.getElementById('holidayDateAgreeBtn');

  if (openBtn && overlay) {
    openBtn.addEventListener('click', function() {
      overlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  }
  if (closeBtn && overlay) {
    closeBtn.addEventListener('click', function() {
      overlay.classList.remove('active');
      document.body.style.overflow = '';
    });
  }
  if (agreeBtn && overlay) {
    agreeBtn.addEventListener('click', function() {
      overlay.classList.remove('active');
      document.body.style.overflow = '';
    });
  }
  // Optional: close overlay when clicking outside modal
  if (overlay) {
    overlay.addEventListener('click', function(e) {
      if (e.target === overlay) {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
      }
    });
  }
    // Refunds table action buttons logic
  document.querySelectorAll('.table').forEach(function(table) {
    table.querySelectorAll('tbody tr').forEach(function(row) {
      const statusCell = row.querySelector('td:nth-last-child(2) span');
      const actionCell = row.querySelector('td:last-child');
      if (!statusCell || !actionCell) return;
      const status = statusCell.className;

      // Clear existing buttons
      actionCell.innerHTML = '';

      if (status.includes('status-approved')) {
        // Approved: View + Mark as Paid
        const viewBtn = document.createElement('button');
        viewBtn.className = 'table-action-view';
        viewBtn.textContent = 'View';
        actionCell.appendChild(viewBtn);

        const paidBtn = document.createElement('button');
        paidBtn.className = 'table-action-approve';
        paidBtn.textContent = 'Mark as Paid';
        actionCell.appendChild(paidBtn);
      } else if (status.includes('status-not-reviewed')) {
        // Not Reviewed: View only
        const viewBtn = document.createElement('button');
        viewBtn.className = 'table-action-view';
        viewBtn.textContent = 'View';
        actionCell.appendChild(viewBtn);
      } else if (status.includes('status-pending')) {
        // Pending: View + Approve + Reject
        const viewBtn = document.createElement('button');
        viewBtn.className = 'table-action-view';
        viewBtn.textContent = 'View';
        actionCell.appendChild(viewBtn);

        const approveBtn = document.createElement('button');
        approveBtn.className = 'table-action-approve';
        approveBtn.textContent = 'Approve';
        actionCell.appendChild(approveBtn);

        const rejectBtn = document.createElement('button');
        rejectBtn.className = 'table-action-reject';
        rejectBtn.textContent = 'Reject';
        actionCell.appendChild(rejectBtn);
      } else if (status.includes('status-rejected')) {
        // Rejected: Mark as Completed
        const completedBtn = document.createElement('button');
        completedBtn.className = 'table-action-reject';
        completedBtn.textContent = 'Mark as Completed';
        actionCell.appendChild(completedBtn);
      }
    });
  });

});

document.addEventListener('DOMContentLoaded', function () {
  // Generic pagination for any visible table
  function paginateVisibleTable() {
    // Find the visible table
    const table = document.querySelector('.table-responsive table.table:not([style*="display: none"])');
    if (!table) return;
    const tbody = table.querySelector('tbody');
    if (!tbody) return;
    const rows = Array.from(tbody.querySelectorAll('tr'));
    const info = document.getElementById('table-info');
    const pagination = document.getElementById('pagination-controls');
    const entriesSelect = document.getElementById('entriesPerPage');

    let currentPage = 1;
    let entriesPerPage = parseInt(entriesSelect.value);

    function renderTable() {
      rows.forEach(row => row.style.display = 'none');
      const total = rows.length;
      const totalPages = Math.max(1, Math.ceil(total / entriesPerPage));
      const start = (currentPage - 1) * entriesPerPage;
      const end = Math.min(start + entriesPerPage, total);
      rows.slice(start, end).forEach(row => row.style.display = '');
      info.textContent = `Showing ${start + 1}-${end} out of ${total} items`;
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

    entriesSelect.onchange = function () {
      entriesPerPage = parseInt(this.value);
      currentPage = 1;
      renderTable();
    };

    renderTable();

    // Expose for toggling
    return {
      reset: function() {
        currentPage = 1;
        renderTable();
      }
    };
  }

  // Initial pagination
  let paginator = paginateVisibleTable();

  // Re-run pagination when toggling account type
  document.querySelectorAll('.account-type-toggle').forEach(function(btn) {
    btn.addEventListener('click', function() {
      setTimeout(function() {
        paginator = paginateVisibleTable();
      }, 0);
    });
  });
});

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.account-type-toggle').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.account-type-toggle').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            if (btn.dataset.type === 'individual') {
                document.getElementById('individual-table').style.display = '';
                document.getElementById('corporate-table').style.display = 'none';
                document.getElementById('account-table-title').textContent = 'Current Individual List';
                document.getElementById('account-table-subtext').textContent = 'All current individual records';
            } else {
                document.getElementById('individual-table').style.display = 'none';
                document.getElementById('corporate-table').style.display = '';
                document.getElementById('account-table-title').textContent = 'Current Corporate List';
                document.getElementById('account-table-subtext').textContent = 'All current corporate records';
            }
        });
    });

        document.querySelectorAll('.account-type-toggle').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.account-type-toggle').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            if (btn.dataset.type === 'individual') {
                document.getElementById('individual-applications-table').style.display = '';
                document.getElementById('corporate-applications-table').style.display = 'none';
                document.getElementById('applications-table-title').textContent = 'Pending Individual Applications';
                document.getElementById('applications-table-subtext').textContent = 'Review and approve/reject individual applications';
            } else {
                document.getElementById('individual-applications-table').style.display = 'none';
                document.getElementById('corporate-applications-table').style.display = '';
                document.getElementById('applications-table-title').textContent = 'Pending Corporate Applications';
                document.getElementById('applications-table-subtext').textContent = 'Review and approve/reject corporate applications';
            }
        });
    });
  });
