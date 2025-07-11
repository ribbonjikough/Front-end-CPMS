<?php
// Set your page variables
$topbar_title = 'Admin';
$page_title = 'Privileges';
$page_subtext = 'This page controls which admins can access specific features. Promote or demote admin levels and assign custom privileges.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/globals.css">
    <link rel="stylesheet" href="assets/css/styleguide.css">
</head>
<body data-section="<?= strtolower(trim($topbar_title)) ?>">

<div id="loading-spinner">
  <div class="spinner"></div>
</div>

<div class="main-wrapper">

    <?php include 'assets/partials/topbar.php'; ?>
    
    <div class="main-row">

        <?php include 'assets/partials/primary_sidebar.php'; ?>
        <?php include 'assets/partials/sidebar.php'; ?>

        <div class="page-wrapper">
            <div class="main-content">
                <div class="page-header">
                    <div class="page-title"><?= htmlspecialchars($page_title) ?></div>
                    <div class="page-subtext"><?= htmlspecialchars($page_subtext) ?></div>
                </div>
                <div class="content">
                    <div class="card" style="margin-bottom:32px;">
                        <div class="card-header">
                            <h4 class="card-title">Admin Privileges Management</h4>
                            <div class="card-subtext">Manage admin roles, privileges, and status</div>
                        </div>
                        <div class="card-body">
                            <div class="filters-row">
                                <div class="filter-search" style="min-width:220px;">
                                    <div class="filter-label">Filter by Role</div>
                                    <select class="search" style="width:100%;">
                                        <option>Global Admin</option>
                                        <option>Admin</option>
                                    </select>
                                </div>
                                <div class="filter-search" style="min-width:180px;">
                                    <div class="filter-label">Name/Admin ID</div>
                                    <input class="search" type="text" placeholder="Search by name" />
                                </div>
                                <div class="filter-search" style="min-width:180px;">
                                    <div class="filter-label">Status Filter</div>
                                    <input class="search" type="text" placeholder="Active" />
                                </div>
                                <div class="filter-btns" style="align-items:flex-end;">
                                    <button class="btn btn-search" type="button">Add new admin</button>
                                    <button class="btn btn-search" type="button">Search</button>
                                    <button class="btn btn-export" type="button">Export</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Admin ID</th>
                                            <th>Admin Full Name</th>
                                            <th>Current Role</th>
                                            <th>Assigned Privilege</th>
                                            <th>Last Updated</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>GlobalAdmin3001</td>
                                            <td>Aidan Chow</td>
                                            <td class="role-global-admin">Global Admin</td>
                                            <td>Dashboard, Reports, Gate Control, Rate Adjustment, Edit Privileges</td>
                                            <td>21 Jan 2025</td>
                                            <td class="status-active">Active</td>
                                            <td>
                                                <div class="action-btn-group">
                                                    <a href="edit_privileges.php?id=GlobalAdmin3001" class="table-action-btn">Edit Privileges</a>
                                                    <a href="promote_demote.php?id=GlobalAdmin3001" class="table-action-btn">Promote/Demote</a>
                                                    <a href="suspend_reactivate.php?id=GlobalAdmin3001" class="table-action-btn">Suspend/Reactivate</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>GlobalAdmin3002</td>
                                            <td>Farah Zainal</td>
                                            <td class="role-global-admin">Global Admin</td>
                                            <td>Dashboard, Reports, Gate Control, Rate Adjustment, Edit Privileges</td>
                                            <td>21 Jan 2025</td>
                                            <td class="status-active">Active</td>
                                            <td>
                                                <div class="action-btn-group">
                                                    <a href="edit_privileges.php?id=GlobalAdmin3002" class="table-action-btn">Edit Privileges</a>
                                                    <a href="promote_demote.php?id=GlobalAdmin3002" class="table-action-btn">Promote/Demote</a>
                                                    <a href="suspend_reactivate.php?id=GlobalAdmin3002" class="table-action-btn">Suspend/Reactivate</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>GlobalAdmin3003</td>
                                            <td>Kevin Lim</td>
                                            <td class="role-global-admin">Global Admin</td>
                                            <td>Dashboard, Reports, Gate Control, Rate Adjustment, Edit Privileges</td>
                                            <td>21 Jan 2025</td>
                                            <td class="status-active">Active</td>
                                            <td>
                                                <div class="action-btn-group">
                                                    <a href="edit_privileges.php?id=GlobalAdmin3003" class="table-action-btn">Edit Privileges</a>
                                                    <a href="promote_demote.php?id=GlobalAdmin3003" class="table-action-btn">Promote/Demote</a>
                                                    <a href="suspend_reactivate.php?id=GlobalAdmin3003" class="table-action-btn">Suspend/Reactivate</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Admin2001</td>
                                            <td>Nisha Kumar</td>
                                            <td class="role-admin">Admin</td>
                                            <td>Dashboard, Reports, Gate Control</td>
                                            <td>21 Jan 2025</td>
                                            <td class="status-active">Active</td>
                                            <td>
                                                <div class="action-btn-group">
                                                    <a href="edit_privileges.php?id=Admin2001" class="table-action-btn">Edit Privileges</a>
                                                    <a href="promote_demote.php?id=Admin2001" class="table-action-btn">Promote/Demote</a>
                                                    <a href="suspend_reactivate.php?id=Admin2001" class="table-action-btn">Suspend/Reactivate</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Admin2002</td>
                                            <td>Daniel Tan</td>
                                            <td class="role-admin">Admin</td>
                                            <td>Dashboard, Reports, Gate Control</td>
                                            <td>21 Jan 2025</td>
                                            <td class="status-active">Active</td>
                                            <td>
                                                <div class="action-btn-group">
                                                    <a href="edit_privileges.php?id=Admin2002" class="table-action-btn">Edit Privileges</a>
                                                    <a href="promote_demote.php?id=Admin2002" class="table-action-btn">Promote/Demote</a>
                                                    <a href="suspend_reactivate.php?id=Admin2002" class="table-action-btn">Suspend/Reactivate</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Admin2003</td>
                                            <td>Amira Rahim</td>
                                            <td class="role-admin">Admin</td>
                                            <td>Dashboard, Reports</td>
                                            <td>24 Jan 2025</td>
                                            <td class="status-inactive">Inactive</td>
                                            <td>
                                                <div class="action-btn-group">
                                                    <a href="edit_privileges.php?id=Admin2003" class="table-action-btn">Edit Privileges</a>
                                                    <a href="promote_demote.php?id=Admin2003" class="table-action-btn">Promote/Demote</a>
                                                    <a href="suspend_reactivate.php?id=Admin2003" class="table-action-btn">Suspend/Reactivate</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                                <div class="table-footer-pagination">
                                    <div class="table-footer-left">
                                        Show
                                        <select id="entriesPerPage" class="entries-dropdown">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        entries
                                        <span id="table-info" style="margin-left:16px;">Showing 1 to 6 of 6 entries</span>
                                    </div>
                                    <div class="table-footer-right" id="pagination-controls">
                                        <button class="pagination-btn" disabled>&laquo;</button>
                                        <button class="pagination-btn active">1</button>
                                        <button class="pagination-btn" disabled>&raquo;</button>
                                    </div>
                                </div>
                        </div>                                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="mobile-side-drawer" class="mobile-side-drawer"></div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/charts.js"></script>
</body>
</html>