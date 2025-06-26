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
    <link rel="stylesheet" href="assets/css/style.css">
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
<script src="assets/js/script.js"></script>
</body>
</html>
