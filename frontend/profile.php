<?php
$topbar_title = 'Admin';
$page_title = 'Profile';
$page_subtext = 'This page allows you to view and edit your profile information.';
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
                    <div class="profile-edit-card">
                        <div class="profile-edit-header">
                            <div class="profile-edit-gradient"></div>
                            <div class="profile-edit-avatar-wrapper">
                                <img src="assets/img/pfp.png" alt="Profile" class="profile-edit-avatar">
                                <button class="profile-edit-avatar-btn" title="Edit Photo">
                                    <svg width="24" height="24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10" fill="#ff9800"/>
                                        <path d="M12 15.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        <path d="M15.5 8.5l-7 7"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="profile-edit-title">
                                <span class="profile-edit-name" style="color: beige;">William Castillo</span>
                                <span class="profile-edit-desc">Updates Your Photo and Personal Details.</span>
                            </div>
                            <div class="profile-edit-actions">
                                <button class="btn btn-orange">Save</button>
                                <button class="btn btn-grey">Cancel</button>
                            </div>
                        </div>
                        <form class="profile-edit-form">
                            <div class="profile-edit-row">
                                <div class="profile-edit-col">
                                    <label for="first_name">First Name</label>
                                    <input type="text" id="first_name" name="first_name" placeholder="William" autocomplete="off">
                                </div>
                                <div class="profile-edit-col">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" placeholder="Castillo" autocomplete="off">
                                </div>
                            </div>
                            <div class="profile-edit-row">
                                <div class="profile-edit-col">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" placeholder="william@example.com" autocomplete="off">
                                </div>
                                <div class="profile-edit-col">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" name="phone" placeholder="+1452 876 5432" autocomplete="off">
                                </div>
                            </div>
                            <div class="profile-edit-row">
                                <div class="profile-edit-col">
                                    <label for="username">User Name</label>
                                    <input type="text" id="username" name="username" placeholder="+1452 876 5432" autocomplete="off">
                                </div>
                                <div class="profile-edit-col">
                                    <label for="password">Password</label>
                                    <div class="profile-edit-password-wrapper">
                                        <input type="password" id="password" name="password" placeholder="" autocomplete="off">
                                        <button type="button" class="profile-edit-password-toggle" tabindex="-1">
                                            <svg width="20" height="20" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="10" cy="10" r="8"/>
                                                <path d="M4 10s2-4 6-4 6 4 6 4-2 4-6 4-6-4-6-4z"/>
                                                <line x1="2" y1="2" x2="18" y2="18"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-edit-actions-bottom">
                                <button class="btn btn-orange" type="submit">Submit</button>
                                <button class="btn btn-grey" type="button">Cancel</button>
                            </div>
                        </form>
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