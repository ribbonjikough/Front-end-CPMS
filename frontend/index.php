<?php
$topbar_title = 'Dashboard';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div id="loading-spinner" style="display:none;">
  <div class="spinner"></div>
</div>

<div class="main-wrapper">
    <div class="top-menu-fixed">
        <?php include 'assets/partials/topbar.php'; ?>
    </div>

        <div class="primary-side-menu-fixed">
            <?php include 'assets/partials/primary_sidebar.php'; ?>
        </div>
        <div class="side-menu-fixed">
            <?php include 'assets/partials/sidebar_home.php'; ?>
        </div>
        <div class="page-wrapper">
            <div class="main-content">
                <div class="page-header">
                    <div class="page-title">Global Overview</div>
                    <div class="page-subtext">This is your dashboard overview. Here you can see a summary of your parking management system.</div>
                </div>
                <!-- Your main page content here -->
                <div style="padding: 32px;">
                    <?php for ($i = 1; $i <= 30; $i++): ?>
                        <div style="margin-bottom: 24px; font-size: 16px;">
                            Example content row <?= $i ?>. Scroll to test fixed sidebars and top menu.
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
</div>
<script src="assets/js/script.js"></script>
</body>
</html>
