<?php
$topbar_title = 'Parking';
$page_title = 'Parking History';
$page_subtext = 'This page views the complete record of all vehicle entries, exits and parking fee transactions';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($topbar_title) ?></title>
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
        <?php include 'assets/partials/sidebar_parking.php'; ?>
        <div class="page-wrapper">
            <div class="main-content">
                <div class="page-header">
                    <div class="page-title"><?= htmlspecialchars($page_title) ?></div>
                    <div class="page-subtext"><?= htmlspecialchars($page_subtext) ?></div>
                </div>
                <div class="content">
                    <div class="parking-filters">
                        <div class="filter-search">
                            <div class="filter-label">Start Datetime</div>
                            <input type="datetime-local" class="search" name="start_datetime" />
                        </div>
                        <div class="filter-search">
                            <div class="filter-label">End Datetime</div>
                            <input type="datetime-local" class="search" name="end_datetime" />
                        </div>
                        <div class="filter-search">
                            <div class="filter-label">Plate No</div>
                            <input type="text" class="search" placeholder="Search Plate No" name="plate_no" />
                        </div>
                        <div class="filter-btns">
                            <button class="btn btn-export" type="button">Export</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Parking History</h4>
                            <div class="card-subtext">All vehicle entries, exits, and transactions</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Ticket Id</th>
                                            <th>Plate No1</th>
                                            <th>eTicket/Season ID/Unit No</th>
                                            <th>Parking Type</th>
                                            <th>Entry Time</th>
                                            <th>Entry Lane</th>
                                            <th>Exit Time</th>
                                            <th>Exit Lane</th>
                                            <th>Duration (hours)</th>
                                            <th>Day Type</th>
                                            <th>Leave Status</th>
                                            <th>Total Paid (RM)</th>
                                            <th>Vehicle Type</th>
                                            <th>Payment Scheme</th>
                                            <th>Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TK10001</td>
                                            <td>WXY1234</td>
                                            <td>ETK-001 / S-1001 / U-12</td>
                                            <td>Season</td>
                                            <td>2024-07-01 09:15</td>
                                            <td>Lane 2</td>
                                            <td>2024-07-01 18:00</td>
                                            <td>Lane 3</td>
                                            <td>8.75</td>
                                            <td>Weekday</td>
                                            <td>Exited</td>
                                            <td>18.00</td>
                                            <td>Car</td>
                                            <td>Standard</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>TK10002</td>
                                            <td>BKL5678</td>
                                            <td>ETK-002 / S-1002 / U-15</td>
                                            <td>Visitor</td>
                                            <td>2024-07-01 10:05</td>
                                            <td>Lane 1</td>
                                            <td>2024-07-01 12:30</td>
                                            <td>Lane 1</td>
                                            <td>2.42</td>
                                            <td>Weekend</td>
                                            <td>Exited</td>
                                            <td>7.00</td>
                                            <td>Van</td>
                                            <td>Promo10</td>
                                            <td>Used promo</td>
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
<script src="assets/js/script.js"></script>
</body>
</html>
