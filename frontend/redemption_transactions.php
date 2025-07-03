<?php
$topbar_title = 'Report';
$page_title = 'Redemptions';
$page_subtext = 'This page shows records of parking fee redemptions given through promotions, tenant validations, or customer rewards';
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
                                <div class="summary-chart-box" style="gap:18px;">
                                    <div class="col-lg-6 col-sm-12" style="display:flex;flex-direction:column;width:40%">
                                        <div id="redemption_graph_1" class="graph-container" style="height:220px;"></div>
                                        <div id="redemption_graph_2" class="graph-container" style="height:220px;"></div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12" style="display:flex;flex-direction:column;gap:18px;width:60%;height:100%;">
                                        <div id="redemption_graph_3" class="graph-container" style="height:458px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="report-divider"></div>
                        <!-- Report Card with Filters and Table -->
                        <div class="card report-card">
                            <div class="card-header">
                                <span class="report-title"><?= htmlspecialchars($page_title) ?> Report</span>
                            </div>
                            <div class="card-body">
                                <div class="filters-row" style="margin-bottom:18px;">
                                    <div class="filter-dropdown">
                                        <div class="filter-label">Redemption Type</div>
                                        <div class="dropdown-wrapper">
                                            <select class="dropdown" name="redemption_type">
                                                <option value="Early Bird">Early Bird</option>
                                                <option value="Flat Rate Friday">Flat Rate Friday</option>
                                                <option value="Spend & Redeem">Spend & Redeem</option>
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
                                                <th>Redemption Type</th>
                                                <th>eTicket/Season ID/Unit No</th>
                                                <th>Parking Fee (RM)</th>
                                                <th>Discounted Amount (RM)</th>
                                                <th>Paid Amount (RM)</th>
                                                <th>Entry Time</th>
                                                <th>Exit Time</th>
                                                <th>Duration</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Example data based on your screenshot
                                            $data = [
                                                ["10150", "Early Bird", "4101240139000019192934", 31.00, 26.00, "RM5.00", "2025-03-30 08:31:10", "2025-03-30 22:12:10", "8h 21min"],
                                                ["10149", "Early Bird", "4101240139000019192934", 29.00, 24.00, "RM5.00", "2025-03-30 08:31:10", "2025-03-30 22:12:10", "8h 21min"],
                                                ["10148", "Early Bird", "4101240139000019192934", 27.00, 22.00, "RM5.00", "2025-03-30 08:31:10", "2025-03-30 22:12:10", "8h 21min"],
                                                ["10147", "Early Bird", "4101240139000019192934", 29.00, 24.00, "RM5.00", "2025-03-30 08:31:10", "2025-03-30 22:12:10", "8h 21min"],
                                                ["10146", "Early Bird", "4101240139000019192934", 29.00, 24.00, "RM5.00", "2025-03-30 08:31:10", "2025-03-30 22:12:10", "8h 21min"],
                                                ["10145", "Early Bird", "4101240139000019192934", 29.00, 24.00, "RM5.00", "2025-03-30 08:31:10", "2025-03-30 22:12:10", "8h 21min"],
                                                ["10144", "Early Bird", "4101240139000019192934", 31.00, 26.00, "RM5.00", "2025-03-30 08:31:10", "2025-03-30 22:12:10", "8h 21min"],
                                                ["10143", "Early Bird", "4101240139000019192934", 31.00, 26.00, "RM5.00", "2025-03-30 08:31:10", "2025-03-30 22:12:10", "8h 21min"],
                                                ["10142", "Early Bird", "4101240139000019192934", 33.00, 28.00, "RM5.00", "2025-03-30 08:31:10", "2025-03-30 22:12:10", "8h 21min"],
                                                ["10141", "Early Bird", "4101240139000019192934", 31.00, 26.00, "RM5.00", "2025-03-30 08:31:10", "2025-03-30 22:12:10", "8h 21min"],
                                            ];
                                            foreach ($data as $i => $row) {
                                                echo "<tr>
                                                    <td>".($i+1)."</td>
                                                    <td>{$row[0]}</td>
                                                    <td>{$row[1]}</td>
                                                    <td>{$row[2]}</td>
                                                    <td>".number_format($row[3],2)."</td>
                                                    <td>".number_format($row[4],2)."</td>
                                                    <td>{$row[5]}</td>
                                                    <td>{$row[6]}</td>
                                                    <td>{$row[7]}</td>
                                                    <td>{$row[8]}</td>
                                                </tr>";
                                            }
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/charts.js"></script>
</body>
</html>
