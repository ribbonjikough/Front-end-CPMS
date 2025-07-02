<?php
$topbar_title = 'Report';
$page_title = 'Daily Sales'; 
$page_subtext = 'This page shows the total number of transactions, revenue, and tax collected for each day';
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
                                                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="big-card">
                                <div class="big-card-header">
                                    <img src="assets/img/credit_card_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Total Sales" class="big-card-icon">
                                    <span class="big-card-title">Revenue this week</span>
                                </div>
                                <div class="big-card-number">RM12,345</div>
                                <div class="big-card-subtext positive">+5.2% from last month</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="big-card">
                                <div class="big-card-header">
                                    <img src="assets/img/payments_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Transactions" class="big-card-icon">
                                    <span class="big-card-title">Average revenue per Day</span>
                                </div>
                                <div class="big-card-number">RM1,234</div>
                                <div class="big-card-subtext positive">+2.1% from last week</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="big-card">
                                <div class="big-card-header">
                                    <img src="assets/img/paid_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Tax Collected" class="big-card-icon">
                                    <span class="big-card-title">Most Transactions</span>
                                </div>
                                <div class="big-card-number">170</div>
                                <div class="big-card-subtext neutral">0% change</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="big-card">
                                <div class="big-card-header">
                                    <img src="assets/img/schedule_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Average Sales" class="big-card-icon">
                                    <span class="big-card-title">Highest Sales Day</span>
                                </div>
                                <div class="big-card-number">RM398.17</div>
                                <div class="big-card-subtext positive">+1.5% from last month</div>
                            </div>
                        </div>
                    </div>
                                <div class="filters-row" style="margin-bottom:18px;">
                                    <div class="filter-dropdown">
                                        <div class="filter-label">Date</div>
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
                                    <div class="col-lg-6 col-sm-12 col-12">
                                        <canvas id="weekly_transactions_bar"></canvas>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 col-12" >
                                        <canvas id="weekly_sales_line"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="report-divider"></div>
                        <!-- Report Card -->
                        <div class="card report-card">
                            <div class="card-header">
                                <span class="report-title"><?= htmlspecialchars($page_title) ?> Report</span>
                            </div>
                            <div class="card-body">
                                <!-- Filter row: 2 dropdowns and 2 search -->
                                <div class="filters-row" style="margin-bottom:18px;">
                                    <div class="filter-dropdown">
                                        <div class="filter-label">Start Date</div>
                                        <div class="dropdown-wrapper">
                                            <select class="dropdown" name="start_date">
                                                <option value="">Start Date</option>
                                                <option value="2025-07-01">2025-07-01</option>
                                                <option value="2025-07-02">2025-07-02</option>
                                            </select>
                                            <span class="dropdown-polygon"></span>
                                        </div>
                                    </div>
                                    <div class="filter-dropdown">
                                        <div class="filter-label">End Date</div>
                                        <div class="dropdown-wrapper">
                                            <select class="dropdown" name="end_date">
                                                <option value="">End Date</option>
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
                                                <th>Id</th>
                                                <th>Date</th>
                                                <th>No. of Transactions</th>
                                                <th>Trx Count (Casual)</th>
                                                <th>Sales (RM)</th>
                                                <th>Base Fee (RM)</th>
                                                <th>SST (RM)</th>
                                                <th>Service Fee (RM)</th>
                                                <th>Excluded Service Fee (RM)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>2025-07-01</td>
                                                <td>400</td>
                                                <td>350</td>
                                                <td>4,000.00</td>
                                                <td>3,500.00</td>
                                                <td>200.00</td>
                                                <td>100.00</td>
                                                <td>50.00</td>
                                                <td>
                                                    <a href="#" class="btn btn-view" style="margin-right:6px;">View</a>
                                                    <a href="#" class="btn btn-download">Download</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>2025-07-02</td>
                                                <td>834</td>
                                                <td>700</td>
                                                <td>8,345.67</td>
                                                <td>7,000.00</td>
                                                <td>367.89</td>
                                                <td>150.00</td>
                                                <td>80.00</td>
                                                <td>
                                                    <a href="#" class="btn btn-view" style="margin-right:6px;">View</a>
                                                    <a href="#" class="btn btn-download">Download</a>
                                                </td>
                                            </tr>
                                            <!-- Total row -->
                                            <tr style="font-weight:bold; background:#f4f6f8;">
                                                <td></td>
                                                <td>Total</td>
                                                <td>1,234</td>
                                                <td>1,050</td>
                                                <td>12,345.67</td>
                                                <td>10,500.00</td>
                                                <td>567.89</td>
                                                <td>250.00</td>
                                                <td>130.00</td>
                                                <td></td>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/charts.js"></script>
</body>
</html>
