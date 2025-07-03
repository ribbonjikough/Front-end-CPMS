<?php
$topbar_title = 'Dashboard';
$page_title = 'Global Overview';
$page_subtext = 'This is your dashboard overview. Here you can see a summary of your parking management system.';
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
<body>

<div id="loading-spinner" style="display:none;">
  <div class="spinner"></div>
</div>

<div class="main-wrapper">

    <?php include 'assets/partials/topbar.php'; ?>
    
    <div class="main-row">

        <?php include 'assets/partials/primary_sidebar.php'; ?>
        <?php include 'assets/partials/sidebar_home.php'; ?>

        <div class="page-wrapper">
            <div class="main-content">
                <div class="page-header">
                    <div class="page-title"><?= htmlspecialchars($page_title) ?></div>
                    <div class="page-subtext"><?= htmlspecialchars($page_subtext) ?></div>
                </div>
                <div class="content">
                    <div class="row row-greeting-filters">
                        <div class="col-greeting">
                            <span class="greeting-text">Welcome, John Doe!</span>
                        </div>
                        <div class="col-filters">
                            <div class="filter-frame">
                                <select class="filter-select">
                                    <option>KL Sentral</option>
                                    <option>Location B</option>
                                    <option>Location C</option>
                                </select>
                                <span class="polygon"></span>
                            </div>
                            <div class="filter-frame">
                                <select class="filter-select">
                                    <option>Bay 1</option>
                                    <option>Bay 2</option>
                                    <option>Bay 3</option>
                                </select>
                                <span class="polygon"></span>
                            </div>
                            <div class="filter-frame">
                                <select class="filter-select">
                                    <option><?= date('d M Y') ?></option>
                                </select>
                                <span class="polygon"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="dash-widget">
                                <div class="dash-widgetimg">
                                    <span><img src="assets/img/credit_card_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="img"></span>
                                </div>
                                <div class="dash-widgetcontent">
                                    <h5>RM<span class="counters" data-count="307144.00">307,144.00</span></h5>
                                    <h6>Global Total Sales</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="dash-widget dash1">
                                <div class="dash-widgetimg">
                                    <span><img src="assets/img/payments_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="img"></span>
                                </div>
                                <div class="dash-widgetcontent">
                                    <h5><span class="counters" data-count="4385.00">4,385.00</span></h5>
                                    <h6>Global Total Transactions</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="dash-widget dash2">
                                <div class="dash-widgetimg">
                                    <span><img src="assets/img/credit_card_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="img"></span>
                                </div>
                                <div class="dash-widgetcontent">
                                    <h5><span class="counters" data-count="385656.50">385,656.50</span></h5>
                                    <h6>Total Redemptions Applied</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="dash-widget dash3">
                                <div class="dash-widgetimg">
                                    <span><img src="assets/img/paid_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="img"></span>
                                </div>
                                <div class="dash-widgetcontent">
                                    <h5>RM<span class="counters" data-count="40000.00">400.00</span></h5>
                                    <h6>Estimated Tax Collected</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="big-card">
                                <div class="big-card-header">
                                    <img src="assets/img/paid_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Users" class="big-card-icon">
                                    <span class="big-card-title">Revenue This Month</span>
                                </div>
                                <div class="big-card-number">RM12,345</div>
                                <div class="big-card-subtext positive">+5.2% from last month</div>
                                <a href="monthly_sales.php" class="big-card-btn">
                                    View details
                                    <span class="big-card-arrow">&#8594;</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="big-card">
                                <div class="big-card-header">
                                    <img src="assets/img/paid_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Parking" class="big-card-icon">
                                    <span class="big-card-title">Revenue Today</span>
                                </div>
                                <div class="big-card-number">RM8,210</div>
                                <div class="big-card-subtext negative">-1.3% from last week</div>
                                <a href="daily_sales.php" class="big-card-btn">
                                    View details
                                    <span class="big-card-arrow">&#8594;</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="big-card">
                                <div class="big-card-header">
                                    <img src="assets/img/directions_car_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Invoices" class="big-card-icon">
                                    <span class="big-card-title">Today Vehicles</span>
                                </div>
                                <div class="big-card-number">2,450</div>
                                <div class="big-card-subtext positive">+2.8% this month</div>
                                <a href="transactions.php" class="big-card-btn">
                                    View details
                                    <span class="big-card-arrow">&#8594;</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="big-card">
                                <div class="big-card-header">
                                    <img src="assets/img/schedule_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Refunds" class="big-card-icon">
                                    <span class="big-card-title">Average Parking Duration</span>
                                </div>
                                <div class="big-card-number">2h 30m</div>
                                <div class="big-card-subtext neutral">0% change</div>
                                <a href="length_of_stay.php" class="big-card-btn">
                                    View details
                                    <span class="big-card-arrow">&#8594;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                <div class="card report-card">
                    <div class="card-header">
                        <span class="report-title">Visual Summary Panels</span>
                        <div class="card-subtext" style="margin-top:4px;">
                            A collection of key visualizations and analytics for quick insights.
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="summary-chart-box" style="gap:15px;">
                            <!-- Left column: two stacked line charts -->
                            <div class="col-lg-6 col-sm-12" style="display:flex;flex-direction:column;gap:18px;width:50%;">
                                <!-- Daily Revenue Line Chart -->
                                <div class="graph-container" style="height:220px;">
                                    <div class="chart-header filter-box" style="display:flex;align-items:center;justify-content:space-between;width:100%;margin-bottom:8px;">
                                        <span style="font-weight:600;font-size:16px;color:#212b36;">Daily Revenue</span>
                                        <select class="filter-select" style="min-width:120px;">
                                            <option>Today</option>
                                            <option>Yesterday</option>
                                            <option>This Week</option>
                                        </select>
                                    </div>
                                    <div id="dashboard_graph_1" style="width:100%;height:160px;"></div>
                                </div>
                                <!-- Monthly Revenue Line Chart -->
                                <div class="graph-container" style="height:220px;">
                                    <div class="chart-header filter-box" style="display:flex;align-items:center;justify-content:space-between;width:100%;margin-bottom:8px;">
                                        <span style="font-weight:600;font-size:16px;color:#212b36;">Monthly Revenue</span>
                                        <select class="filter-select" style="min-width:120px;">
                                            <option>2025</option>
                                            <option>2024</option>
                                            <option>2023</option>
                                        </select>
                                    </div>
                                    <div id="dashboard_graph_2" style="width:100%;height:160px;"></div>
                                </div>
                            </div>
                            <!-- Right column: pie chart -->
                            <div class="col-lg-6 col-sm-12" style="display:flex;flex-direction:column;gap:18px;width:50%;height:100%;">
                                <div class="graph-container" style="height:458px;">
                                    <div class="chart-header filter-box" style="display:flex;align-items:center;justify-content:space-between;width:100%;margin-bottom:8px;">
                                        <span style="font-weight:600;font-size:16px;color:#212b36;">Monthly Length of Stay</span>
                                        <select class="filter-select" style="min-width:120px;">
                                            <option>March 2025</option>
                                            <option>February 2025</option>
                                            <option>January 2025</option>
                                        </select>
                                    </div>
                                    <div id="dashboard_graph_3" style="width:100%;height:400px;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="summary-chart-box" style="gap:24px;">
                            <div class="col-lg-6 col-sm-12" style="display:flex;flex-direction:column;width:50%;">
                                <div id="dashboard_graph_7" class="graph-container" style="height:320px;"></div>
                            </div>
                            <div class="col-lg-6 col-sm-12" style="display:flex;flex-direction:column;width:50%;">
                                <div id="dashboard_graph_8" class="graph-container" style="height:320px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="report-divider"></div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Real Time Logs</h4>
                    <div class="card-subtext">updates every 10 seconds</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Time</th>
                            <th>Event Type</th>
                            <th>Details</th>
                            <th>Performed By</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>2024-06-30 14:23:10</td>
                            <td>Login</td>
                            <td>User logged in</td>
                            <td>John Doe</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>2024-06-30 14:23:20</td>
                            <td>Update</td>
                            <td>Changed password</td>
                            <td>Jane Smith</td>
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

                    <?php for ($i = 1; $i <= 30; $i++): ?>
                        <div style="margin-bottom: 24px; font-size: 16px;">
                            Example content row <?= $i ?>. Scroll to test fixed sidebars and top menu.
                        </div>
                    <?php endfor; ?>
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
