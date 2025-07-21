<?php
// Set your page variables
$topbar_title = 'Admin';
$page_title = 'Privileges';
$page_subtext = 'This page controls which admins can access specific features. Promote or demote admin levels and assign custom privileges.';
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
                    <div class="profile-card">
                        <div class="profile-card-header">
                            <span class="user-img">
                                <img src="assets/img/pfp.png" alt="Profile">
                                <span class="status online"></span>
                            </span>
                            <div class="profilesets">
                                <h2 class="profile-name">John Doe</h2>
                                <h4 class="profile-role">Global Admin</h4>
                            </div>
                        </div>
                        <hr class="profile-divider">
                        <div class="profile-card-links">
                            <a href="profile.php" class="profile-link">Edit Profile</a>
                            <a href="settings.php" class="profile-link">Settings</a>
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