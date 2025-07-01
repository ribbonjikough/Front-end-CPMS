<?php
$topbar_title = 'Parking'; 
$page_title = 'Car in Park';
$page_subtext = 'This page logs all vehicles that is currently in the bay'; 
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
                        <div class="filter-dropdown">
                            <div class="filter-label">Insert Current Bay</div>
                            <div class="dropdown-wrapper">
                                <select class="dropdown" name="current_bay">
                                    <option value="">Insert Current Bay</option>
                                    <option value="A">Bay A</option>
                                    <option value="B">Bay B</option>
                                    <option value="C">Bay C</option>
                                </select>
                                <span class="dropdown-polygon"></span>
                            </div>
                        </div>
                        <div class="filter-search">
                            <div class="filter-label">Parking Type</div>
                            <input type="text" class="search" placeholder="Select Parking Type" name="parking_type" />
                        </div>
                        <div class="filter-search">
                            <div class="filter-label">Season ID</div>
                            <input type="text" class="search" placeholder="Select Season ID" name="season_id" />
                        </div>
                        <div class="filter-btns">
                            <button class="btn btn-search" type="button">Search</button>
                            <button class="btn btn-export" type="button">Export</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Car In Park</h4>
                            <div class="card-subtext">All vehicles currently in the bay</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Ticket ID</th>
                                            <th>Plate No1</th>
                                            <th>eTicket/Season ID/Unit No</th>
                                            <th>Parking Type</th>
                                            <th>Entry Time</th>
                                            <th>Entry Lane</th>
                                            <th>Tariff</th>
                                            <th>Grace Period (min)</th>
                                            <th>Vehicle Type</th>
                                            <th>Discount Plan</th>
                                            <th>Card Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TK12345</td>
                                            <td>WXY1234</td>
                                            <td>ETK-001 / S-1001 / U-12</td>
                                            <td>Season</td>
                                            <td>2024-07-01 09:15</td>
                                            <td>Lane 2</td>
                                            <td>RM2.00/hr</td>
                                            <td>15</td>
                                            <td>Car</td>
                                            <td>None</td>
                                            <td>RFID</td>
                                            <td>
                                                <button class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></button>
                                                <button class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></button>
                                                <button class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12346</td>
                                            <td>BKL5678</td>
                                            <td>ETK-002 / S-1002 / U-15</td>
                                            <td>Visitor</td>
                                            <td>2024-07-01 10:05</td>
                                            <td>Lane 1</td>
                                            <td>RM3.00/hr</td>
                                            <td>10</td>
                                            <td>Van</td>
                                            <td>Promo10</td>
                                            <td>Ticket</td>
                                            <td>
                                                <button class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></button>
                                                <button class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></button>
                                                <button class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12347</td>
                                            <td>JHN4321</td>
                                            <td>ETK-003 / S-1003 / U-18</td>
                                            <td>Season</td>
                                            <td>2024-07-01 10:30</td>
                                            <td>Lane 3</td>
                                            <td>RM2.50/hr</td>
                                            <td>20</td>
                                            <td>Motorcycle</td>
                                            <td>None</td>
                                            <td>RFID</td>
                                            <td>
                                                <button class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></button>
                                                <button class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></button>
                                                <button class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></button>
                                            </td>
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
