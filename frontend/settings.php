<?php
// Set your page variables
$topbar_title = 'Admin';
$page_title = 'Settings';
$page_subtext = 'This page lets you view and update system settings';
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
<body>

<div id="loading-spinner" style="display:none;">
  <div class="spinner"></div>
</div>

<div class="main-wrapper">

    <?php include 'assets/partials/topbar.php'; ?>
    
    <div class="main-row">

        <?php include 'assets/partials/primary_sidebar.php'; ?>
        <?php include 'assets/partials/sidebar_settings.php'; ?>

        <div class="page-wrapper">
            <div class="main-content">
                <div class="page-header">
                    <div class="page-title"><?= htmlspecialchars($page_title) ?></div>
                    <div class="page-subtext"><?= htmlspecialchars($page_subtext) ?></div>
                </div>
                <div class="content">

                    <div class="card-body">
                        <div class="row-greeting-filters">
                            <div class="col-greeting">
                                <span class="greeting-text">Welcome, John Doe!</span>
                            </div>
                            <div class="filter-search">
                                <input class="search" type="text" placeholder="Search for anything..." />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="big-card">
                                    <div class="big-card-header">
                                        <img src="assets/img/notifications_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Notifications" class="big-card-icon">
                                        <span class="big-card-title">Notifications</span>
                                    </div>
                                    <div class="big-card-number">4</div>
                                    <div class="big-card-subtext neutral">new notifications</div>
                                    <button class="big-card-btn">View detail <span class="big-card-arrow">&#8250;</span></button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="big-card">
                                    <div class="big-card-header">
                                        <img src="assets/img/warning_24dp_EA5455_FILL0_wght400_GRAD0_opsz24.svg" alt="Warning" class="big-card-icon">
                                        <span class="big-card-title" style="color:#ea5455;">Warning</span>
                                    </div>
                                    <div class="big-card-number" style="color:#ea5455;">1</div>
                                    <div class="big-card-subtext negative">since this morning</div>
                                    <button class="big-card-btn">View detail <span class="big-card-arrow">&#8250;</span></button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="big-card">
                                    <div class="big-card-header">
                                        <img src="assets/img/pending_actions_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Pending" class="big-card-icon">
                                        <span class="big-card-title">Pending</span>
                                    </div>
                                    <div class="big-card-number">5</div>
                                    <div class="big-card-subtext neutral">to be verified</div>
                                    <button class="big-card-btn">View detail <span class="big-card-arrow">&#8250;</span></button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="big-card">
                                    <div class="big-card-header">
                                        <img src="assets/img/folder_copy_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Quick Access" class="big-card-icon">
                                        <span class="big-card-title">Quick Access Settings</span>
                                    </div>
                                    <div class="quick-access-settings">
                                        <a href="parking_rate_adjustment.php" class="quick-access-settings-btn">Rate Adjustment <span class="big-card-arrow">&#8250;</span></a>
                                        <a href="privileges.php" class="quick-access-settings-btn">Privileges & Admin Roles <span class="big-card-arrow">&#8250;</span></a>
                                        <a href="redemptions.php" class="quick-access-settings-btn">Redemption Settings <span class="big-card-arrow">&#8250;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <span class="report-title">Global Audit Log Tab</span>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table live-update-table">
                                        <thead>
                                            <tr>
                                                <th>Date Updated</th>
                                                <th>Performed By</th>
                                                <th>Type of Change</th>
                                                <th>Action Type</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>10:42:18 2025-21-01</td>
                                                <td>Aidan Chow</td>
                                                <td>Parking Rate Adjustment</td>
                                                <td>Increase Grace Period</td>
                                                <td>Access to "Gate Control" granted</td>
                                            </tr>
                                            <tr>
                                                <td>09:12:02 2025-21-01</td>
                                                <td>Farah Zainal</td>
                                                <td>Parking Rate Adjustment</td>
                                                <td>Global Admin</td>
                                                <td>Access to "Gate Control" granted</td>
                                            </tr>
                                            <tr>
                                                <td>17:48:23 2025-21-01</td>
                                                <td>Farah Zainal</td>
                                                <td>Privileges</td>
                                                <td>Promote Admin to Global Admin</td>
                                                <td>Role changed from Admin to Global Admin</td>
                                            </tr>
                                            <tr>
                                                <td>18:32:23 2025-21-01</td>
                                                <td>Kevin Lim</td>
                                                <td>Privileges</td>
                                                <td>Edit Privileges</td>
                                                <td>Access to "Dashboard" and "Gate Control" removed</td>
                                            </tr>
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
                                <span id="table-info" style="margin-left:16px;"></span>
                            </div>
                            <div class="table-footer-right" id="pagination-controls"></div>
                        </div>

                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/charts.js"></script>
</body>
</html>