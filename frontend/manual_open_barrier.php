<?php
$topbar_title = 'Report'; // or 'Report' if you want to match the sidebar
$page_title = 'Manual Open Barrier'; // Change this to the appropriate page title
$page_subtext = 'This page shows records of manual gate operations, including total entries and exits'; // Change as needed
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
        <?php include 'assets/partials/sidebar_report.php'; ?>

        <div class="page-wrapper">
            <div class="main-content">
                <div class="page-header">
                    <div class="page-title"><?= htmlspecialchars($page_title) ?></div>
                    <div class="page-subtext"><?= htmlspecialchars($page_subtext) ?></div>
                </div>
                <div class="content">
                    <div class="row manual-barrier-stats-row">
                        <div class="manual-barrier-stat-card stat-green">
                            <div class="stat-card-content">
                                <span class="stat-icon"><img src="assets/img/check_circle_24dp.svg" alt="Performance"></span>
                                <div>
                                    <div class="stat-value">99.36%</div>
                                    <div class="stat-label">Average Performance</div>
                                </div>
                            </div>
                        </div>
                        <div class="manual-barrier-stat-card stat-red">
                            <div class="stat-card-content">
                                <span class="stat-icon"><img src="assets/img/error_24dp.svg" alt="System Error"></span>
                                <div>
                                    <div class="stat-value">1.36%</div>
                                    <div class="stat-label">System Error</div>
                                </div>
                            </div>
                        </div>
                        <div class="manual-barrier-stat-card stat-blue">
                            <div class="stat-card-content">
                                <span class="stat-icon"><img src="assets/img/block_24dp.svg" alt="Unpaid"></span>
                                <div>
                                    <div class="stat-value">0.45%</div>
                                    <div class="stat-label">Unpaid</div>
                                </div>
                            </div>
                        </div>
                        <div class="manual-barrier-stat-card stat-brown">
                            <div class="stat-card-content">
                                <span class="stat-icon"><img src="assets/img/warning_24dp.svg" alt="Season Violation"></span>
                                <div>
                                    <div class="stat-value">0.00%</div>
                                    <div class="stat-label">Season Violation</div>
                                </div>
                            </div>
                        </div>
                        <div class="manual-barrier-stat-card stat-purple">
                            <div class="stat-card-content">
                                <span class="stat-icon"><img src="assets/img/directions_car_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Duplicate"></span>
                                <div>
                                    <div class="stat-value">0.00%</div>
                                    <div class="stat-label">Duplicate Car Plate</div>
                                </div>
                            </div>
                        </div>
                        <div class="manual-barrier-stat-card stat-grey">
                            <div class="stat-card-content">
                                <span class="stat-icon"><img src="assets/img/receipt_long_24dp.svg" alt="Others"></span>
                                <div>
                                    <div class="stat-value">0.24%</div>
                                    <div class="stat-label">Others</div>
                                </div>
                            </div>
                        </div>
                    </div>

                                <div class="card report-card">
                        <div class="card-header">
                            <span class="report-title"><?= htmlspecialchars($page_title) ?> Report</span>
                        </div>
                        <div class="card-body">
                    <div class="summary-chart-box" style="flex-direction:column;gap:18px;">
                        <div id="manual_barrier_chart_1" style="width:100%;height:260px;background:#ffffff;border-radius:8px;display:flex;align-items:center;justify-content:center;color:#bbb;margin-bottom:12px;"></div>
                        <div id="manual_barrier_chart_2" style="width:100%;height:260px;background:#ffffff;border-radius:8px;display:flex;align-items:center;justify-content:center;color:#bbb;"></div>
                    </div>
                            </div>
                        </div>
                        <div class="report-divider"></div>

                                            <div class="card report-card">
                        <div class="card-header">
                            <span class="report-title"><?= htmlspecialchars($page_title) ?> Report</span>
                        </div>
                        <div class="card-body">
                            <div class="filters-row" style="margin-bottom:18px;">
                                <div class="filter-dropdown">
                                    <div class="filter-label">Start Date</div>
                                    <div class="dropdown-wrapper">
                                        <select class="dropdown" name="start_date">
                                            <option value="">Start Date</option>
                                            <option value="2025-03-24">2025-03-24</option>
                                            <option value="2025-03-25">2025-03-25</option>
                                        </select>
                                        <span class="dropdown-polygon"></span>
                                    </div>
                                </div>
                                <div class="filter-dropdown">
                                    <div class="filter-label">End Date</div>
                                    <div class="dropdown-wrapper">
                                        <select class="dropdown" name="end_date">
                                            <option value="">End Date</option>
                                            <option value="2025-03-30">2025-03-30</option>
                                        </select>
                                        <span class="dropdown-polygon"></span>
                                    </div>
                                </div>
                                <div class="filter-search">
                                    <div class="filter-label">Parking Type</div>
                                    <input type="text" class="search" placeholder="Select Parking Type" name="parking_type" />
                                </div>
                                <div class="filter-search">
                                    <div class="filter-label">Daily Cut-off Time</div>
                                    <input type="time" class="search" name="cutoff_time" disabled/>
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
                                            <th>Date</th>
                                            <th>Total Entries (A)</th>
                                            <th>Total Exits (B)</th>
                                            <th>Total Manual Open Barrier (C)</th>
                                            <th>Total Unpaid Trx</th>
                                            <th>Performance D=(A+B-C)/(A+B) (%)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Example data from your screenshot
                                        $dates = [
                                            "24 Mar", "25 Mar", "26 Mar", "27 Mar", "28 Mar", "29 Mar", "30 Mar"
                                        ];
                                        $entries = [57,112,111,73,157,132,81];
                                        $exits = [9,111,114,92,163,136,67];
                                        $manual = [0,1,0,3,0,6,0];
                                        $unpaid = [0.00,0.00,0.00,3.00,0.00,21.00,0.00];
                                        $performance = [100.00,99.55,100.00,98.18,100.00,97.76,100.00];
                                        for ($i = 0; $i < count($dates); $i++) {
                                            $rowClass = ($manual[$i] > 0) ? 'style="background:#fdd;"' : '';
                                            echo "<tr $rowClass>
                                                <td>".($i+1)."</td>
                                                <td>{$dates[$i]}</td>
                                                <td>{$entries[$i]}</td>
                                                <td>{$exits[$i]}</td>
                                                <td>{$manual[$i]}</td>
                                                <td>".number_format($unpaid[$i],2)."</td>
                                                <td>".number_format($performance[$i],2)."</td>
                                                <td>
                                                    <a href='#' class='btn btn-search' style='padding:4px 10px;font-size:13px;'>View</a>
                                                    <a href='#' class='btn btn-export' style='padding:4px 10px;font-size:13px;'>Download</a>
                                                </td>
                                            </tr>";
                                        }
                                        // Total row
                                        echo "<tr style='font-weight:bold; background:#f4f6f8;'>
                                            <td>8</td>
                                            <td>TOTAL</td>
                                            <td>723</td>
                                            <td>692</td>
                                            <td>9</td>
                                            <td>9133.04</td>
                                            <td>582.96</td>
                                            <td>
                                                <a href='#' class='btn btn-search' style='padding:4px 10px;font-size:13px;'>View</a>
                                                <a href='#' class='btn btn-export' style='padding:4px 10px;font-size:13px;'>Download</a>
                                            </td>
                                        </tr>";
                                        ?>
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
<div id="mobile-side-drawer" class="mobile-side-drawer"></div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/charts.js"></script>
</body>
</html>
