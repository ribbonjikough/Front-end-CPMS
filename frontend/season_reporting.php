<?php
$topbar_title = 'Season Parking';
$page_title = 'Reporting';
$page_subtext = 'This page shows the access and analyze seasonal parking financial and usage reports.';
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
                                            <th>ID</th>
                                            <th>Invoice ID</th>
                                            <th>Name/PIC</th>
                                            <th>Type</th>
                                            <th>Corporate</th>
                                            <th>Plate No1</th>
                                            <th>Plate No2</th>
                                            <th>Issue Date</th>
                                            <th>Due Date</th>
                                            <th>Amount (RM)</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>INV-1001</td>
                                            <td>Ali Bin Abu</td>
                                            <td>Individual</td>
                                            <td>-</td>
                                            <td>ABC1234</td>
                                            <td>XYZ5678</td>
                                            <td>2024-07-01</td>
                                            <td>2024-07-10</td>
                                            <td>120.00</td>
                                            <td><span class="status-approved">Approved</span></td>
                                            <td>
                                                <button class="table-action-view">View</button>
                                                <button class="table-action-approve">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>INV-1002</td>
                                            <td>Beta Holdings</td>
                                            <td>Corporate</td>
                                            <td>Beta Holdings</td>
                                            <td>-</td>
                                            <td>LMN4321</td>
                                            <td>2024-07-02</td>
                                            <td>2024-07-12</td>
                                            <td>350.00</td>
                                            <td><span class="status-not-reviewed">Not Reviewed</span></td>
                                            <td>
                                                <button class="table-action-view">View</button>
                                                <button class="table-action-approve">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>INV-1003</td>
                                            <td>Siti Aminah</td>
                                            <td>Visitor</td>
                                            <td>-</td>
                                            <td>DEF5678</td>
                                            <td>OPQ7890</td>
                                            <td>2024-07-03</td>
                                            <td>2024-07-13</td>
                                            <td>80.00</td>
                                            <td><span class="status-pending">Pending</span></td>
                                            <td>
                                                <button class="table-action-view">View</button>
                                                <button class="table-action-approve">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>INV-1004</td>
                                            <td>Delta Ventures</td>
                                            <td>Corporate</td>
                                            <td>Delta Ventures</td>
                                            <td>-</td>
                                            <td>UVW3456</td>
                                            <td>2024-07-04</td>
                                            <td>2024-07-14</td>
                                            <td>200.00</td>
                                            <td><span class="status-rejected">Rejected</span></td>
                                            <td>
                                                <button class="table-action-view">View</button>
                                                <button class="table-action-approve">Download</button>
                                            </td>
                                        </tr>
                                        <!-- Added rows -->
                                        <tr>
                                            <td>5</td>
                                            <td>INV-1005</td>
                                            <td>Noraini Zainal</td>
                                            <td>Individual</td>
                                            <td>-</td>
                                            <td>JKL5678</td>
                                            <td>QRS2345</td>
                                            <td>2024-07-05</td>
                                            <td>2024-07-15</td>
                                            <td>150.00</td>
                                            <td><span class="status-approved">Approved</span></td>
                                            <td>
                                                <button class="table-action-view">View</button>
                                                <button class="table-action-approve">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>INV-1006</td>
                                            <td>Gamma Sdn Bhd</td>
                                            <td>Corporate</td>
                                            <td>Gamma Sdn Bhd</td>
                                            <td>-</td>
                                            <td>XYZ1234</td>
                                            <td>2024-07-06</td>
                                            <td>2024-07-16</td>
                                            <td>400.00</td>
                                            <td><span class="status-pending">Pending</span></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>INV-1007</td>
                                            <td>Ahmad Fauzi</td>
                                            <td>Individual</td>
                                            <td>-</td>
                                            <td>MNO6789</td>
                                            <td>PQR5678</td>
                                            <td>2024-07-07</td>
                                            <td>2024-07-17</td>
                                            <td>180.00</td>
                                            <td><span class="status-not-reviewed">Not Reviewed</span></td>
                                            <td>
                                                <button class="table-action-view">View</button>
                                                <button class="table-action-approve">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>INV-1008</td>
                                            <td>Visitor Parking</td>
                                            <td>Visitor</td>
                                            <td>-</td>
                                            <td>STU1234</td>
                                            <td>VWX5678</td>
                                            <td>2024-07-08</td>
                                            <td>2024-07-18</td>
                                            <td>60.00</td>
                                            <td><span class="status-approved">Approved</span></td>
                                            <td>
                                                <button class="table-action-view">View</button>
                                                <button class="table-action-approve">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>INV-1009</td>
                                            <td>Syafiq Rahman</td>
                                            <td>Individual</td>
                                            <td>-</td>
                                            <td>YZA2345</td>
                                            <td>BCD6789</td>
                                            <td>2024-07-09</td>
                                            <td>2024-07-19</td>
                                            <td>210.00</td>
                                            <td><span class="status-rejected">Rejected</span></td>
                                            <td>
                                                <button class="table-action-view">View</button>
                                                <button class="table-action-approve">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>INV-1010</td>
                                            <td>Omega Corp</td>
                                            <td>Corporate</td>
                                            <td>Omega Corp</td>
                                            <td>-</td>
                                            <td>EFG1234</td>
                                            <td>2024-07-10</td>
                                            <td>2024-07-20</td>
                                            <td>500.00</td>
                                            <td><span class="status-approved">Approved</span></td>
                                            <td>
                                                <button class="table-action-view">View</button>
                                                <button class="table-action-approve">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>INV-1011</td>
                                            <td>Rina Lee</td>
                                            <td>Individual</td>
                                            <td>-</td>
                                            <td>HIJ3456</td>
                                            <td>KLM7890</td>
                                            <td>2024-07-11</td>
                                            <td>2024-07-21</td>
                                            <td>175.00</td>
                                            <td><span class="status-pending">Pending</span></td>
                                            <td>
                                                <button class="table-action-view">View</button>
                                                <button class="table-action-approve">Download</button>
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