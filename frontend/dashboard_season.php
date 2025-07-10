<?php
$topbar_title = 'Dashboard';
$page_title = 'Season Parking Dashboard';
$page_subtext = 'This page shows summary overview of applications, invoices, terminations about season parking.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Season Parking Dashboard</title>
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
                    <div class="row row-greeting-filters">
                        <div class="col-greeting">
                            <span class="greeting-text">Welcome, John Doe!</span>
                        </div>
                        <div class="col-filters">
                            <div class="filter-frame">
                                <select class="filter-select">
                                    <option>Location A</option>
                                    <option>Location B</option>
                                    <option>Location C</option>
                                </select>
                                <span class="polygon">&#9662;</span>
                            </div>
                            <div class="filter-frame">
                                <select class="filter-select">
                                    <option>Bay 1</option>
                                    <option>Bay 2</option>
                                    <option>Bay 3</option>
                                </select>
                                <span class="polygon">&#9662;</span>
                            </div>
                            <div class="filter-frame">
                                <select class="filter-select">
                                    <option><?= date('d M Y') ?></option>
                                </select>
                                <span class="polygon">&#9662;</span>
                            </div>
                        </div>
                    </div>
                                        <div class="row">
                        <div class="col-12">
                            <div class="dash-widget">
                                <div class="dash-widgetimg">
                                    <span><img src="assets/img/credit_card_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="img"></span>
                                </div>
                                <div class="dash-widgetcontent">
                                    <h5>RM<span class="counters" data-count="307144.00">307,144.00</span></h5>
                                    <h6>Global Total Season Parking Sales</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="dash-widget dash1">
                                <div class="dash-widgetimg">
                                    <span><img src="assets/img/payments_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="img"></span>
                                </div>
                                <div class="dash-widgetcontent">
                                    <h5><span class="counters" data-count="4385.00">4,385.00</span></h5>
                                    <h6>Global Total Season Parking Transactions</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="dash-widget dash2">
                                <div class="dash-widgetimg">
                                    <span><img src="assets/img/credit_card_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="img"></span>
                                </div>
                                <div class="dash-widgetcontent">
                                    <h5><span class="counters" data-count="385656.50">385,656.50</span></h5>
                                    <h6>Total Cars Reserved</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
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
                        <div class="col-lg-6 col-12">
                            <div class="big-medium-card">
                                <div class="big-medium-card-header">
                                    <img src="assets/img/credit_card_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="Pending" class="big-medium-card-icon">
                                    <span class="big-medium-card-title">Pending</span>
                                </div>
                                <div class="big-medium-card-table">
                                    <div class="big-medium-card-col">
                                    <div class="big-medium-card-col-title"><b>Individual</b></div>
                                    <div class="big-medium-card-col-value">15</div>
                                    </div>
                                    <div class="big-medium-card-col-divider"></div>
                                    <div class="big-medium-card-col">
                                    <div class="big-medium-card-col-title"><b>Corporate</b></div>
                                    <div class="big-medium-card-col-value">27</div>
                                    </div>
                                </div>
                                <a href="#" class="big-medium-card-btn">
                                    View detail
                                    <span class="big-medium-card-arrow">&#8594;</span>
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

                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/script.js"></script>
</body>
</html>
