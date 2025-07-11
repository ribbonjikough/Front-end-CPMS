<?php
$topbar_title = 'Report';
$page_title = 'Monthly Sales';
$page_subtext = 'This page shows the total number of transactions, revenue, and tax collected for each month';
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
                        <!-- Summary Card with two empty graphs -->
                        <div class="card report-card">
                            <div class="card-header">
                                <span class="report-title"><?= htmlspecialchars($page_title) ?> Summary</span>
                            </div>
                            <div class="card-body">
                                <div class="summary-chart-box" style="flex-direction: column;">
                                    <div id="monthly_sales_chart_1" style="width: 100%"></div>
                                    <div id="monthly_sales_chart_2" style="width: 100%"></div>
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
                                        <div class="filter-label">Insert Year</div>
                                        <div class="dropdown-wrapper">
                                            <select class="dropdown" name="insert_year">
                                                <option value="">Select Year</option>
                                                <option value="2025">2025</option>
                                                <option value="2024">2024</option>
                                                <option value="2023">2023</option>
                                            </select>
                                            <span class="dropdown-polygon"></span>
                                        </div>
                                    </div>
                                    <div class="filter-search">
                                        <div class="filter-label">Parking Type</div>
                                        <input type="text" class="search" placeholder="Parking Type" name="parking_type" />
                                    </div>
                                    <div class="filter-dropdown">
                                        <div class="filter-label">Payment Type</div>
                                        <div class="dropdown-wrapper">
                                            <select class="dropdown" name="payment_type">
                                                <option value="">Select Payment Type</option>
                                                <option value="cash">Cash</option>
                                                <option value="credit_card">Credit Card</option>
                                                <option value="ewallet">E-Wallet</option>
                                            </select>
                                            <span class="dropdown-polygon"></span>
                                        </div>
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
                                                <th>Month</th>
                                                <th>Total Trx (RM)</th>
                                                <th>Base Fee (RM)</th>
                                                <th>Tax (RM)</th>
                                                <th>Convenient Fee (RM)</th>
                                                <th>Total (RM)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Example dummy data for 12 months
                                            $months = [
                                                "January", "February", "March", "April", "May", "June",
                                                "July", "August", "September", "October", "November", "December"
                                            ];
                                            $total_trx = $base_fee = $tax = $convenient_fee = $total = 0;
                                            for ($i = 0; $i < 12; $i++) {
                                                $trx = rand(10000, 20000);
                                                $base = rand(7000, 15000);
                                                $tax_amt = rand(500, 2000);
                                                $conv = rand(200, 800);
                                                $sum = $trx + $base + $tax_amt + $conv;
                                                $total_trx += $trx;
                                                $base_fee += $base;
                                                $tax += $tax_amt;
                                                $convenient_fee += $conv;
                                                $total += $sum;
                                                echo "<tr>
                                                    <td>".($i+1)."</td>
                                                    <td>{$months[$i]}</td>
                                                    <td>".number_format($trx,2)."</td>
                                                    <td>".number_format($base,2)."</td>
                                                    <td>".number_format($tax_amt,2)."</td>
                                                    <td>".number_format($conv,2)."</td>
                                                    <td>".number_format($sum,2)."</td>
                                                </tr>";
                                            }
                                            ?>
                                            <tr style="font-weight:bold; background:#f4f6f8;">
                                                <td></td>
                                                <td>Total</td>
                                                <td><?= number_format($total_trx,2) ?></td>
                                                <td><?= number_format($base_fee,2) ?></td>
                                                <td><?= number_format($tax,2) ?></td>
                                                <td><?= number_format($convenient_fee,2) ?></td>
                                                <td><?= number_format($total,2) ?></td>
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
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/charts.js"></script>
</body>
</html>
