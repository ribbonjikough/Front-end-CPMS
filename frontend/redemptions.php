<?php
// Set your page variables
$topbar_title = 'Admin';
$page_title = 'Redemptions';
$page_subtext = 'This page manages and configures different types of parking fee redemptions available to customers.';
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
                    <div class="card">
                        <div class="card-header" style="display:flex;align-items:center;gap:12px;">
                            <h4 class="card-title" style="margin:0;">Add New Redemption Form</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="config-section-title" style="margin-bottom:18px;">Redemption Configuration</div>
                                <div class="config-row">
                                    <label>Redemption Name</label>
                                    <input type="text" value="Early Bird" readonly>
                                </div>
                                <div class="config-row">
                                    <label>Description</label>
                                    <input type="text" value="RM5 flat rate for early entries for the whole day" readonly>
                                </div>
                                <div class="config-row">
                                    <label>Redemption Type</label>
                                    <input type="text" value="Flat Rate" readonly>
                                </div>
                                <div class="config-row">
                                    <label>Value/Discount</label>
                                    <input type="text" value="Input (RM)" readonly>
                                </div>
                                <div class="config-row">
                                    <label>Eligibility Rules</label>
                                    <input type="text" value="None" readonly>
                                </div>
                                <div class="config-row">
                                    <label>Time Conditions</label>
                                    <input type="text" value="Before 9.00 a.m." readonly>
                                </div>
                                <div class="config-row">
                                    <label>Date Range</label>
                                    <input type="text" value="Please insert duration" readonly>
                                </div>
                                <div class="config-row">
                                    <label>Available at Bay</label>
                                    <input type="text" value="Bay 1" readonly>
                                </div>
                                <div class="config-row">
                                    <label>Status</label>
                                    <button type="button" class="status-toggle-btn status-enabled" id="redemptionStatusBtn">
                                        <span class="status-enable">Enable</span>/<span class="status-disable">Disable</span>
                                    </button>
                                </div>
                                <div class="config-row" style="justify-content: flex-end;">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card" style="margin-bottom:32px;">
                        <div class="card-header">
                            <h4 class="card-title" style="margin:0;">Redemption List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Value</th>
                                            <th>Status</th>
                                            <th>Valid Time</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Early Bird</td>
                                            <td>Flat Rate</td>
                                            <td>RM5.00</td>
                                            <td><span class="status-active">Active</span></td>
                                            <td>Before 9.00 a.m.</td>
                                            <td>
                                                <div class="action-btn-group">
                                                    <a href="edit_redemption.php?id=1" class="table-action-btn">Edit</a>
                                                    <a href="delete_redemption.php?id=1" class="table-action-btn">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flat Rate Friday</td>
                                            <td>Flat Rate</td>
                                            <td>RM15.00</td>
                                            <td><span class="status-inactive">Inactive</span></td>
                                            <td>Every Friday</td>
                                            <td>
                                                <div class="action-btn-group">
                                                    <a href="edit_redemption.php?id=2" class="table-action-btn">Edit</a>
                                                    <a href="delete_redemption.php?id=2" class="table-action-btn">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Spend & Redeem</td>
                                            <td>Percentage Discount</td>
                                            <td>50%</td>
                                            <td><span class="status-active">Active</span></td>
                                            <td>Any time</td>
                                            <td>
                                                <div class="action-btn-group">
                                                    <a href="edit_redemption.php?id=3" class="table-action-btn">Edit</a>
                                                    <a href="delete_redemption.php?id=3" class="table-action-btn">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
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
                                        <span id="table-info" style="margin-left:16px;">Showing 1 to 6 of 6 entries</span>
                                    </div>
                                    <div class="table-footer-right" id="pagination-controls">
                                        <button class="pagination-btn" disabled>&laquo;</button>
                                        <button class="pagination-btn active">1</button>
                                        <button class="pagination-btn" disabled>&raquo;</button>
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