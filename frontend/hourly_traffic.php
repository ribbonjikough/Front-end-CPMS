<?php
$topbar_title = 'Report';
$page_title = 'Hourly Traffic';
$page_subtext = 'This page tracks hourly vehicle entries and exits to identify peak traffic periods.'; 
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
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="big-card">
                                <div class="big-card-header">
                                    <img src="assets/img/directions_car_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Total In" class="big-card-icon">
                                    <span class="big-card-title">Total Cars In</span>
                                </div>
                                <div class="big-card-number">2,345</div>
                                <div class="big-card-subtext positive">+3.2% from yesterday</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="big-card">
                                <div class="big-card-header">
                                    <img src="assets/img/directions_car_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Total Out" class="big-card-icon">
                                    <span class="big-card-title">Total Cars Out</span>
                                </div>
                                <div class="big-card-number">2,210</div>
                                <div class="big-card-subtext positive">+2.8% from yesterday</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="big-card">
                                <div class="big-card-header">
                                    <img src="assets/img/schedule_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Peak Hour" class="big-card-icon">
                                    <span class="big-card-title">Peak Hour</span>
                                </div>
                                <div class="big-card-number">17:00 - 17:59</div>
                                <div class="big-card-subtext neutral">Most entries</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="big-card">
                                <div class="big-card-header">
                                    <img src="assets/img/schedule_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Lowest Hour" class="big-card-icon">
                                    <span class="big-card-title">Lowest Hour</span>
                                </div>
                                <div class="big-card-number">03:00 - 03:59</div>
                                <div class="big-card-subtext negative">Least entries</div>
                            </div>
                        </div>
                    </div>
                    <div class="report-cards-wrapper">
                        <!-- Summary Card -->
                        <div class="card report-card">
                            <div class="card-header">
                                <span class="report-title"><?= htmlspecialchars($page_title) ?> Summary</span>
                            </div>
                            <div class="card-body">
                                <!-- Filter row: one dropdown for date -->
                                <div class="filters-row" style="margin-bottom:18px;">
                                    <div class="filter-dropdown">
                                        <div class="filter-label">Insert Date</div>
                                        <div class="dropdown-wrapper">
                                            <select class="dropdown" name="summary_date">
                                                <option value="">Select Date</option>
                                                <option value="2025-07-01">2025-07-01</option>
                                                <option value="2025-07-02">2025-07-02</option>
                                            </select>
                                            <span class="dropdown-polygon"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-chart-box">
                                    <div id="hourly-traffic-apexchart" style="width:100%;height:260px;background-color: #ffffff;"></div>
                        </div>
                        <div class="report-divider"></div>
                        <div class="card report-card">
                            <div class="card-header">
                                <span class="report-title"><?= htmlspecialchars($page_title) ?> Report</span>
                            </div>
                            <div class="card-body">
                                <div class="filters-row" style="margin-bottom:18px;">
                                    <div class="filter-dropdown">
                                        <div class="filter-label">Insert Date</div>
                                        <div class="dropdown-wrapper">
                                            <select class="dropdown" name="report_date">
                                                <option value="">Select Date</option>
                                                <option value="2025-07-01">2025-07-01</option>
                                                <option value="2025-07-02">2025-07-02</option>
                                            </select>
                                            <span class="dropdown-polygon"></span>
                                        </div>
                                    </div>
                                    <div class="filter-search">
                                        <div class="filter-label">Parking Type</div>
                                        <input type="text" class="search" placeholder="Parking Type" name="parking_type" />
                                    </div>
                                    <div class="filter-dropdown">
                                        <div class="filter-label">Interval</div>
                                        <div class="dropdown-wrapper">
                                            <select class="dropdown" name="interval">
                                                <option value="60">60 minutes</option>
                                                <option value="30">30 minutes</option>
                                                <option value="15">15 minutes</option>
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
                                                <th>Time Interval</th>
                                                <th>No. of Cars In</th>
                                                <th>No. of Cars Out</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Data from your screenshot
                                            $time_intervals = [
                                                "00:00 - 00:59", "01:00 - 01:59", "02:00 - 02:59", "03:00 - 03:59",
                                                "04:00 - 04:59", "05:00 - 05:59", "06:00 - 06:59", "07:00 - 07:59",
                                                "08:00 - 08:59", "09:00 - 09:59", "10:00 - 10:59", "11:00 - 11:59",
                                                "12:00 - 12:59", "13:00 - 13:59", "14:00 - 14:59", "15:00 - 15:59",
                                                "16:00 - 16:59", "17:00 - 17:59", "18:00 - 18:59", "19:00 - 19:59",
                                                "20:00 - 20:59", "21:00 - 21:59", "22:00 - 22:59", "23:00 - 23:59"
                                            ];
                                            $cars_in =  [0, 0, 2, 0, 0, 0, 2, 3, 28, 55, 35, 7, 7, 6, 4, 5, 4, 3, 2, 0, 4, 2, 1, 1];
                                            $cars_out = [2, 1, 1, 2, 1, 1, 1, 0, 1, 3, 5, 5, 8, 0, 5, 9, 9, 10, 15, 12, 12, 6, 30, 21];
                                            $total_in = 0;
                                            $total_out = 0;
                                            for ($i = 0; $i < 24; $i++) {
                                                $total_in += $cars_in[$i];
                                                $total_out += $cars_out[$i];
                                                echo "<tr>
                                                    <td>{$time_intervals[$i]}</td>
                                                    <td>{$cars_in[$i]}</td>
                                                    <td>{$cars_out[$i]}</td>
                                                </tr>";
                                            }
                                            ?>
                                            <tr style="font-weight:bold; background:#f4f6f8;">
                                                <td>TOTAL</td>
                                                <td><?= $total_in ?></td>
                                                <td><?= $total_out ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
