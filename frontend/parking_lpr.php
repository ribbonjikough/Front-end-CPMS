<?php
$topbar_title = 'Parking';
$page_title = 'LPR Logs';
$page_subtext = 'This page displays all license plate recognition activity, capturing vehicle entries and exits in real time to help monitor parking usage and support incident tracking';
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
                    <div class="filters-row"> 
                        <div class="filter-search">
                            <div class="filter-label">Exit Date Range</div>
                            <div class="daterange-wrapper">
                                <input type="text" id="exit-daterange" class="search daterange-input" name="exit_daterange" autocomplete="off" placeholder="Insert Date Range here"/>
                                <span class="dropdown-polygon"></span>
                            </div>
                        </div>
                        <div class="filter-search">
                            <div class="filter-label">Plate No</div>
                            <input type="text" class="search" placeholder="Search Plate No" name="plate_no" />
                        </div>
                        <div class="filter-btns">
                            <button class="btn btn-search" type="button">Search</button>
                            <button class="btn btn-export" type="button">Export</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">LPR Logs</h4>
                            <div class="card-subtext">All license plate recognition activity</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table lpr-logs">
                                    <thead>
                                        <tr>
                                            <th>Ticket ID</th>
                                            <th>Entry Lane</th>
                                            <th>Entry Time</th>
                                            <th>Image Entry</th>
                                            <th>Plate Entry</th>
                                            <th>Exit Lane</th>
                                            <th>Exit Time</th>
                                            <th>Image Exit</th>
                                            <th>Plate Exit</th>
                                            <th>Confidence Level (%)</th>
                                            <th>Leave Status</th>
                                            <th>Payment Scheme</th>
                                            <th>Car Type</th>
                                            <th>Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TKLPR001</td>
                                            <td>Lane 1</td>
                                            <td>2024-07-01 08:30</td>
                                            <td>
                                                <img src="assets/img/sample-entry.jpg" alt="Entry Plate" class="lpr-img" />
                                            </td>
                                            <td>ABC1234</td>
                                            <td>Lane 2</td>
                                            <td>2024-07-01 17:45</td>
                                            <td>
                                                <img src="assets/img/sample-exit.jpg" alt="Exit Plate" class="lpr-img" />
                                            </td>
                                            <td>ABC1234</td>
                                            <td>98</td>
                                            <td>Exited</td>
                                            <td>Standard</td>
                                            <td>Sedan</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>TKLPR002</td>
                                            <td>Lane 3</td>
                                            <td>2024-07-01 09:10</td>
                                            <td>
                                                <img src="assets/img/sample-entry2.jpg" alt="Entry Plate" class="lpr-img" />
                                            </td>
                                            <td>XYZ5678</td>
                                            <td>Lane 1</td>
                                            <td>2024-07-01 12:00</td>
                                            <td>
                                                <img src="assets/img/sample-exit2.jpg" alt="Exit Plate" class="lpr-img" />
                                            </td>
                                            <td>XYZ5678</td>
                                            <td>95</td>
                                            <td>Exited</td>
                                            <td>Promo10</td>
                                            <td>SUV</td>
                                            <td>Promo used</td>
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
<div id="mobile-side-drawer" class="mobile-side-drawer"></div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/charts.js"></script>
</body>
</html>
