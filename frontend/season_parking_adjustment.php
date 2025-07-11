<?php
$topbar_title = 'Admin';
$page_title = 'Season Parking Rate Adjustments';
$page_subtext = 'This page allows administrators to review and manage adjustments to season parking rates, providing a summary of recent changes and tools for updating rate structures.';
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
        <?php include 'assets/partials/sidebar.php'; ?>

        <div class="page-wrapper">
            <div class="main-content">
                <div class="page-header">
                    <div class="page-title"><?= htmlspecialchars($page_title) ?></div>
                    <div class="page-subtext"><?= htmlspecialchars($page_subtext) ?></div>
                </div>
                <div class="content">

                    <!-- Only Global Admin Notice -->
                    <div class="big-center-title">
                        ONLY GLOBAL ADMIN CAN UPDATE PARKING RATES
                    </div>

                    <!-- Live Rate Summary Tables -->
                    <div class="config-section-card">
                        <div class="config-section-title">CAR - RESERVED</div>
                        <div class="table-responsive">
                            <table class="table rate-table">
                                <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th>Rates & Fees (RM)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>1 Month Rental</td><td>220.00</td></tr>
                                    <tr><td>1 Month Rental @ RM220 (Refundable)</td><td>220.00</td></tr>
                                    <tr><td>1 Season Card @RM50 (Refundable)</td><td>50.00</td></tr>
                                    <tr><td>Signage Fee (Reserved Only)</td><td>93.34</td></tr>
                                    <tr><td>Admin Fees</td><td>18.87</td></tr>
                                    <tr><td><b>Total All</b></td><td><b>603.21</b></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="config-section-card">
                        <div class="config-section-title">CAR - RANDOM</div>
                        <div class="table-responsive">
                            <table class="table rate-table">
                                <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th>Rates & Fees (RM)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>1 Month Rental</td><td>220.00</td></tr>
                                    <tr><td>1 Month Rental @ RM220 (Refundable)</td><td>220.00</td></tr>
                                    <tr><td>1 Season Card @RM50 (Refundable)</td><td>50.00</td></tr>
                                    <tr><td>Signage Fee (Reserved Only)</td><td>93.34</td></tr>
                                    <tr><td>Admin Fees</td><td>18.87</td></tr>
                                    <tr><td><b>Total All</b></td><td><b>603.21</b></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="config-section-card">
                        <div class="config-section-title">MOTOR</div>
                        <div class="table-responsive">
                            <table class="table rate-table">
                                <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th>Rates & Fees (RM)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>1 Month Rental</td><td>220.00</td></tr>
                                    <tr><td>1 Month Rental @ RM220 (Refundable)</td><td>220.00</td></tr>
                                    <tr><td>1 Season Card @RM50 (Refundable)</td><td>50.00</td></tr>
                                    <tr><td>Signage Fee (Reserved Only)</td><td>93.34</td></tr>
                                    <tr><td>Admin Fees</td><td>18.87</td></tr>
                                    <tr><td><b>Total All</b></td><td><b>603.21</b></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="report-divider"></div>

                    <!-- Edit Rate Configuration Card -->
                    <div class="card" style="margin-top:32px;">
                        <div class="card-header">
                            <h4 class="card-title">Edit Season Parking Rate Configuration</h4>
                            <div class="card-subtext">Configure each season parking rate type below</div>
                        </div>
                        <div class="card-body config-card-body">
                            <!-- CAR - RESERVED Config -->
                            <div class="config-section-card">
                                <div class="config-section-title">CAR - RESERVED Rate Configuration</div>
                                <form>
                                    <div class="config-row">
                                        <label>1 Month Rental</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row">
                                        <label>Refundable Rental</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row">
                                        <label>Season Card (Refundable)</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row">
                                        <label>Signage Fee</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row">
                                        <label>Admin Fees</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row" style="justify-content: flex-end;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- CAR - RANDOM Config -->
                            <div class="config-section-card">
                                <div class="config-section-title">CAR - RANDOM Rate Configuration</div>
                                <form>
                                    <div class="config-row">
                                        <label>1 Month Rental</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row">
                                        <label>Refundable Rental</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row">
                                        <label>Season Card (Refundable)</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row">
                                        <label>Signage Fee</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row">
                                        <label>Admin Fees</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row" style="justify-content: flex-end;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- MOTOR Config -->
                            <div class="config-section-card">
                                <div class="config-section-title">MOTOR Rate Configuration</div>
                                <form>
                                    <div class="config-row">
                                        <label>1 Month Rental</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row">
                                        <label>Refundable Rental</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row">
                                        <label>Season Card (Refundable)</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row">
                                        <label>Signage Fee</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row">
                                        <label>Admin Fees</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row" style="justify-content: flex-end;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
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