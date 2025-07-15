<?php
$topbar_title = 'Report';
$page_title = 'Length of Stay';
$page_subtext = 'This page shows how long vehicles typically stay in the parking area, categorized by time intervals';
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
                    <div class="report-cards-wrapper">
                        <div class="card report-card">
                            <div class="card-header">
                                <span class="report-title"><?= htmlspecialchars($page_title) ?> Summary</span>
                            </div>
                            <div class="card-body">
                                <div class="summary-chart-box">
                                    <div id="length_of_stay_chart" style="width:100%;height:260px;background:#e9ecef;border-radius:8px;display:flex;align-items:center;justify-content:center;color:#bbb;"></div>
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
                                    <div class="filter-search">
                                        <div class="filter-label">Date Range</div>
                                        <div class="daterange-wrapper">
                                            <input type="text" id="length-daterange" class="search daterange-input" name="length_daterange" autocomplete="off" placeholder="Insert Date Range here"/>
                                            <span class="dropdown-polygon"></span>
                                        </div>
                                    </div>
                                    <div class="filter-search">
                                        <div class="filter-label">Parking Type</div>
                                        <input type="text" class="search" placeholder="Parking Type" name="parking_type" />
                                    </div>
                                    <div class="filter-search">
                                        <div class="filter-label">Daily Cut-off Time</div>
                                        <input type="time" class="search" name="cutoff_time" />
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
                                                <th>Duration (hours)</th>
                                                <th>Total Trx</th>
                                                <th>Base Fee (RM)</th>
                                                <th>Tax (RM)</th>
                                                <th>Convenient Fee (RM)</th>
                                                <th>Total (RM)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Data from your screenshot
                                            $durations = [
                                                "<30 mins", "Between 30 mins to 1 hour", "1 hours to 2 hours", "2 hours to 3 hours",
                                                "3 hours to 4 hours", "4 hours to 5 hours", "5 hours to 6 hours", "6 hours to 7 hours",
                                                "7 hours to 8 hours", "8 hours to 9 hours", "9 hours to 10 hours", "10 hours to 11 hours",
                                                "11 hours to 12 hours", "12 hours to 13 hours", "13 hours to 14 hours", "14 hours to 15 hours",
                                                "15 hours to 16 hours", "16 hours to 17 hours", "17 hours to 18 hours", "18 hours to 19 hours",
                                                "19 hours to 20 hours", "20 hours to 21 hours", "21 hours to 22 hours", "22 hours to 23 hours",
                                                "23 hours to 24 hours", "More than 24 hours"
                                            ];
                                            $total_trx = [34,56,80,36,32,27,14,16,24,35,136,83,35,16,12,7,2,4,1,0,1,0,0,0,0,41];
                                            $base_fee = [0.00,254.88,488.89,296.30,232.16,310.39,149.08,184.90,300.96,442.47,1167.22,842.54,508.52,178.32,162.27,102.83,9.44,9.43,14.15,0.00,40.57,0.00,0.00,0.00,0.00,2901.88];
                                            $tax = [0.00,15.12,29.11,17.70,13.84,18.61,8.932,11.10,18.04,26.53,69.78,50.46,30.48,10.68,9.73,6.17,0.85,0.56,0.57,0.00,2.43,0.00,0.00,0.00,0.00,514.80];
                                            $convenient_fee = array_fill(0, 26, 0.00);
                                            $total = [0.00,270.00,518.00,314.00,246.00,329.00,158.00,196.00,319.00,469.00,1237.00,893.00,539.00,189.00,172.00,109.00,15.00,10.00,10.00,0.00,43.00,0.00,0.00,0.00,0.00,3076.00];
                                            $sum_trx = $sum_base = $sum_tax = $sum_conv = $sum_total = 0;
                                            for ($i = 0; $i < count($durations); $i++) {
                                                $sum_trx += $total_trx[$i];
                                                $sum_base += $base_fee[$i];
                                                $sum_tax += $tax[$i];
                                                $sum_conv += $convenient_fee[$i];
                                                $sum_total += $total[$i];
                                                echo "<tr>
                                                    <td>".($i+1)."</td>
                                                    <td>{$durations[$i]}</td>
                                                    <td>{$total_trx[$i]}</td>
                                                    <td>".number_format($base_fee[$i],2)."</td>
                                                    <td>".number_format($tax[$i],2)."</td>
                                                    <td>".number_format($convenient_fee[$i],2)."</td>
                                                    <td>".number_format($total[$i],2)."</td>
                                                </tr>";
                                            }
                                            ?>
                                            <tr style="font-weight:bold; background:#f4f6f8;">
                                                <td></td>
                                                <td>TOTAL</td>
                                                <td><?= $sum_trx ?></td>
                                                <td><?= number_format($sum_base,2) ?></td>
                                                <td><?= number_format($sum_tax,2) ?></td>
                                                <td><?= number_format($sum_conv,2) ?></td>
                                                <td><?= number_format($sum_total,2) ?></td>
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
