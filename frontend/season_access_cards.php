<?php
$topbar_title = 'Season Parking';
$page_title = 'Access Cards';
$page_subtext = 'This page manage and monitor all season parking access cards.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($topbar_title) ?></title>
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
                                        <!-- Content goes here -->
                                        <div class="card report-card">
                        <div class="card-header">
                            <span class="report-title"><?= htmlspecialchars($page_title) ?> Panel</span>
                        </div>
                        <div class="card-body">
                            <div class="filters-row" style="margin-bottom:18px;">
                                <div class="filter-dropdown">
                                    <div class="filter-label">Type</div>
                                    <div class="dropdown-wrapper">
                                        <select class="dropdown" name="type">
                                            <option value="all">All</option>
                                            <option value="individual">Individual</option>
                                            <option value="corporate">Corporate</option>
                                            <option value="visitor">Visitor</option>
                                        </select>
                                        <span class="dropdown-polygon"></span>
                                    </div>
                                </div>
                                <div class="filter-dropdown">
                                    <div class="filter-label">Status</div>
                                    <div class="dropdown-wrapper">
                                        <select class="dropdown" name="status">
                                            <option value="all">All</option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                            <option value="lost">Lost</option>
                                            <option value="pending">Pending</option>
                                        </select>
                                        <span class="dropdown-polygon"></span>
                                    </div>
                                </div>
                                <div class="filter-dropdown">
                                    <div class="filter-label">Insert Branch</div>
                                    <div class="dropdown-wrapper">
                                        <select class="dropdown" name="branch">
                                            <option value="">PLAZA SENTRAL</option>
                                            <option value="">KL SENTRAL</option>
                                            <option value="">BANDAR SENTRAL</option>
                                        </select>
                                        <span class="dropdown-polygon"></span>
                                    </div>
                                </div>
                                <div class="filter-btns">
                                    <button class="btn btn-search" type="button">Search</button>
                                    <button class="btn btn-export" type="button">Export</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Card ID</th>
                                            <th>Holder Name</th>
                                            <th>Type</th>
                                            <th>Company</th>
                                            <th>Plate No</th>
                                            <th>Issued Date</th>
                                            <th>Expiry Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>AC-1001</td>
                                            <td>Ali Bin Abu</td>
                                            <td>Individual</td>
                                            <td>-</td>
                                            <td>ABC1234</td>
                                            <td>2024-07-01</td>
                                            <td>2025-07-01</td>
                                            <td><span class="status-active">Active</span></td>
                                            <td>
                                                <button class="table-action-view">View</button>
                                                <button class="table-action-approve">Renew</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>AC-1002</td>
                                            <td>Beta Holdings</td>
                                            <td>Corporate</td>
                                            <td>Beta Holdings</td>
                                            <td>-</td>
                                            <td>2024-07-02</td>
                                            <td>2025-07-02</td>
                                            <td><span class="status-inactive">Inactive</span></td>
                                            <td>
                                                <button class="table-action-view">View</button>
                                                <button class="table-action-approve">Activate</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>AC-1003</td>
                                            <td>Siti Aminah</td>
                                            <td>Visitor</td>
                                            <td>-</td>
                                            <td>XYZ5678</td>
                                            <td>2024-07-03</td>
                                            <td>2024-07-10</td>
                                            <td><span class="status-pending">Pending</span></td>
                                            <td>
                                                <button class="table-action-view">View</button>
                                                <button class="table-action-approve">Approve</button>
                                                <button class="table-action-reject">Reject</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>AC-1004</td>
                                            <td>Delta Ventures</td>
                                            <td>Corporate</td>
                                            <td>Delta Ventures</td>
                                            <td>-</td>
                                            <td>2024-07-04</td>
                                            <td>2025-07-04</td>
                                            <td><span class="status-active">Active</span></td>
                                            <td>
                                                <button class="table-action-view">View</button>
                                                <button class="table-action-approve">Renew</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>AC-1005</td>
                                            <td>Noraini Zainal</td>
                                            <td>Individual</td>
                                            <td>-</td>
                                            <td>JKL5678</td>
                                            <td>2024-07-05</td>
                                            <td>2025-07-05</td>
                                            <td><span class="status-inactive">Inactive</span></td>
                                            <td>
                                                <button class="table-action-view">View</button>
                                                <button class="table-action-approve">Activate</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>AC-1006</td>
                                            <td>Visitor Parking</td>
                                            <td>Visitor</td>
                                            <td>-</td>
                                            <td>STU1234</td>
                                            <td>2024-07-06</td>
                                            <td>2024-07-13</td>
                                            <td><span class="status-inactive">Lost</span></td>
                                            <td>
                                                <button class="table-action-view">View</button>
                                                <button class="table-action-approve">Replace</button>
                                            </td>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/charts.js"></script>
</body>
</html>