<?php
$topbar_title = 'Report';
$page_title = 'Transactions';
$page_subtext = 'This page shows all transactions made for all vehicles';
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
                                <div class="filters-row" style="margin-bottom:18px;">
                                    <div class="filter-search">
                                        <div class="filter-label">Start Date</div>
                                        <input type="date" class="search" name="start_date" />
                                    </div>
                                    <div class="filter-search">
                                        <div class="filter-label">End Date</div>
                                        <input type="date" class="search" name="end_date" />
                                    </div>
                                    <div class="filter-search">
                                        <div class="filter-label">Parking Type</div>
                                        <input type="text" class="search" placeholder="Parking Type" name="parking_type" />
                                    </div>
                                    <div class="filter-search">
                                        <div class="filter-label">Daily Cutoff Time</div>
                                        <input type="time" class="search" name="cutoff_time" />
                                    </div>
                                    <div class="filter-btns">
                                        <button class="btn btn-search" type="button">Search</button>
                                        <button class="btn btn-export" type="button">Export</button>
                                    </div>
                                </div>
                                <!-- Summary content goes here -->
                                <div class="summary-chart-box">
                                    <!-- Example: you can put a chart or summary graphic here -->
                                    <canvas id="transaction.summary" width="100%" height="450px"></canvas>
                                </div>
                                <p class="summary-info">
                                    <span class="summary-label">Total Transactions:</span>
                                    <span class="summary-value">4,385</span>
                                </p>
                                <p class="summary-info">
                                    <span class="summary-label">Total Amount:</span>
                                    <span class="summary-value">RM 385,656.50</span>
                                </p>
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
                                        <div class="filter-label">Insert Current Bay</div>
                                        <div class="dropdown-wrapper">
                                            <select class="dropdown" name="current_bay">
                                                <option value="">Select Bay</option>
                                                <option value="A">Bay A</option>
                                                <option value="B">Bay B</option>
                                                <option value="C">Bay C</option>
                                            </select>
                                            <span class="dropdown-polygon"></span>
                                        </div>
                                    </div>
                                    <div class="filter-search">
                                        <div class="filter-label">Parking Type</div>
                                        <input type="text" class="search" placeholder="Parking Type" name="parking_type_report" />
                                    </div>
                                    <div class="filter-search">
                                        <div class="filter-label">Season ID</div>
                                        <input type="text" class="search" placeholder="Season ID" name="season_id" />
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
                                                <th>Ticket ID</th>
                                                <th>Plate No1</th>
                                                <th>Card No</th>
                                                <th>Parking Type</th>
                                                <th>Parking Fee A (RM)</th>
                                                <th>Discount B (RM)</th>
                                                <th>Sub Total (RM) C = A-B (inclusive SST)</th>
                                                <th>Base Fee C1</th>
                                                <th>SST C2 (RM)</th>
                                                <th>Convenient Fee D (RM)</th>
                                                <th>Total Amount E = C+D (RM)</th>
                                                <th>Trx Time</th>
                                                <th>Payment Scheme</th>
                                                <th>Status</th>
                                                <th>Receipt No</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>TKT12345</td>
                                                <td>WXY1234</td>
                                                <td>CRD56789</td>
                                                <td>Season</td>
                                                <td>10.00</td>
                                                <td>2.00</td>
                                                <td>8.00</td>
                                                <td>7.00</td>
                                                <td>1.00</td>
                                                <td>0.50</td>
                                                <td>8.50</td>
                                                <td>2025-07-02 10:15</td>
                                                <td>Credit Card</td>
                                                <td>Paid</td>
                                                <td>RCPT001</td>
                                                <td>
                                                    <a href="view.php?id=TKT12345" class="btn btn-view" style="margin-right:6px;">View</a>
                                                    <a href="download.php?id=TKT12345" class="btn btn-download">Download</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>TKT67890</td>
                                                <td>BCA4321</td>
                                                <td>CRD12345</td>
                                                <td>Hourly</td>
                                                <td>5.00</td>
                                                <td>0.00</td>
                                                <td>5.00</td>
                                                <td>4.50</td>
                                                <td>0.50</td>
                                                <td>0.30</td>
                                                <td>5.30</td>
                                                <td>2025-07-02 11:45</td>
                                                <td>Cash</td>
                                                <td>Paid</td>
                                                <td>RCPT002</td>
                                                <td>
                                                    <a href="view.php?id=TKT67890" class="btn btn-view" style="margin-right:6px;">View</a>
                                                    <a href="download.php?id=TKT67890" class="btn btn-download">Download</a>
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
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/charts.js"></script>
</body>
</html>