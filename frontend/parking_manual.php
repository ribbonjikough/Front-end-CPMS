<?php
$topbar_title = 'Parking';
$page_title = 'Manual Gate Opening Record';
$page_subtext = 'This page logs all manually opened gates performed by admins due to system issues or user problems';
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
                            <div class="filter-label">MOpening ID</div>
                            <input type="text" class="search" placeholder="Search MOpening ID" name="mopening_id" />
                        </div>
                        <div class="filter-search">
                            <div class="filter-label">Admin ID</div>
                            <input type="text" class="search" placeholder="Search Admin ID" name="admin_id" />
                        </div>
                        <div class="filter-btns">
                            <button class="btn btn-search" type="button">Search</button>
                            <button class="btn btn-export" type="button">Export</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Manual Gate Opening Record</h4>
                            <div class="card-subtext">All manual gate openings performed by admins</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>MOpening ID</th>
                                            <th>eTicket/Season ID/Unit No</th>
                                            <th>Plate No</th>
                                            <th>Gate No</th>
                                            <th>Parking Type</th>
                                            <th>Entry/Exit Time</th>
                                            <th>Vehicle Type</th>
                                            <th>Performed by (Admin ID)</th>
                                            <th>Reason</th>
                                            <th>Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>MO-001</td>
                                            <td>ETK-101 / S-2001 / U-21</td>
                                            <td>ABC1234</td>
                                            <td>Gate 1</td>
                                            <td>Season</td>
                                            <td>2024-07-01 08:45</td>
                                            <td>Car</td>
                                            <td>admin01</td>
                                            <td>System Error</td>
                                            <td>Manual override</td>
                                        </tr>
                                        <tr>
                                            <td>MO-002</td>
                                            <td>ETK-102 / S-2002 / U-22</td>
                                            <td>XYZ5678</td>
                                            <td>Gate 2</td>
                                            <td>Visitor</td>
                                            <td>2024-07-01 09:10</td>
                                            <td>Van</td>
                                            <td>admin02</td>
                                            <td>User forgot card</td>
                                            <td>Checked by security</td>
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
