<?php
$topbar_title = 'Season Parking';
$page_title = 'Season Parking List';
$page_subtext = 'This page shows current list of individual and corporate that applied for season parking ';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($topbar_title) ?></title>
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
                    <div class="filters-row">
                        <div class="filter-dropdown">
                            <div class="filter-label">Insert Branch</div>
                            <div class="dropdown-wrapper">
                                <select class="dropdown" name="branch">
                                    <option value="">PLAZA SENTRAL</option>
                                    <option value="">KL SENTRAL</option>
                                    <option value="">BANDAR SENTRAL</option>
                                </select>
                                <span class="dropdown-polygon"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Account Type Toggle -->
                    <div class="account-type-toggle-group">
                        <button type="button" class="account-type-toggle active" data-type="individual">Individual</button>
                        <button type="button" class="account-type-toggle" data-type="corporate">Corporate</button>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="account-table-title">Current Individual List</h4>
                            <div class="card-subtext" id="account-table-subtext">All current individual records</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- Individual Table -->
                                <table class="table" id="individual-table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Date Added</th>
                                            <th>Full Name</th>
                                            <th>Company</th>
                                            <th>Email</th>
                                            <th>Commencement Date</th>
                                            <th>Phone</th>
                                            <th>Company Phone</th>
                                            <th>IC No</th>
                                            <th>Taxpayer ID</th>
                                            <th>Vehicle 1</th>
                                            <th>Vehicle 2</th>
                                            <th>Parking Type</th>
                                            <th>Tenant Type</th>
                                            <th>Vehicle Type</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2024-07-01</td>
                                            <td>John Doe</td>
                                            <td>ABC Sdn Bhd</td>
                                            <td>john@example.com</td>
                                            <td>2024-07-10</td>
                                            <td>012-3456789</td>
                                            <td>03-12345678</td>
                                            <td>900101-01-1234</td>
                                            <td>TXP123456</td>
                                            <td>ABC1234</td>
                                            <td>XYZ5678</td>
                                            <td>Season</td>
                                            <td>Tenant</td>
                                            <td>Car</td>
                                            <td>123, Jalan Sentral</td>
                                            <td><span class="status-active">Approved</span></td>
                                            <td>
                                                <a href="#" style="color:#1976d2;">View</a>
                                                <button class="btn" style="background:#4cff4c;color:#222;margin-left:4px;">Approve</button>
                                                <button class="btn" style="background:#f76c6c;color:#fff;margin-left:4px;">Reject</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>2024-07-02</td>
                                            <td>Jane Smith</td>
                                            <td>XYZ Sdn Bhd</td>
                                            <td>jane@example.com</td>
                                            <td>2024-07-11</td>
                                            <td>013-9876543</td>
                                            <td>03-87654321</td>
                                            <td>880202-02-5678</td>
                                            <td>TXP654321</td>
                                            <td>DEF5678</td>
                                            <td>LMN4321</td>
                                            <td>Visitor</td>
                                            <td>Subtenant</td>
                                            <td>Van</td>
                                            <td>456, Jalan XYZ</td>
                                            <td><span class="status-inactive">Rejected</span></td>
                                            <td>
                                                <a href="#" style="color:#1976d2;">View</a>
                                                <button class="btn" style="background:#4cff4c;color:#222;margin-left:4px;">Approve</button>
                                                <button class="btn" style="background:#f76c6c;color:#fff;margin-left:4px;">Reject</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- Corporate Table -->
                                <table class="table" id="corporate-table" style="display:none;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Company Name</th>
                                            <th>Name PIC of the Company</th>
                                            <th>Email PIC</th>
                                            <th>PIC Phone No</th>
                                            <th>Company Address</th>
                                            <th>Company SSM File</th>
                                            <th>Tenancy Agreement Cover Page</th>
                                            <th>Tenancy Agreement Square Feet</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Simple Sdn Bhd</td>
                                            <td>Kamarul Baman</td>
                                            <td>kamarul@gmail.com</td>
                                            <td>012-343282</td>
                                            <td>Level 2, Tower 3, Plaza Sentral</td>
                                            <td><a href="Simple-SSM.pdf" style="color:#1976d2;" target="_blank">Simple-SSM.pdf</a></td>
                                            <td><a href="TACP-Simple.pdf" style="color:#1976d2;" target="_blank">TACP-Simple.pdf</a></td>
                                            <td><a href="TASF-Simple.pdf" style="color:#1976d2;" target="_blank">TASF-Simple.pdf</a></td>
                                            <td><span class="status-active">Approved</span></td>
                                            <td>
                                                <a href="#" style="color:#1976d2;">View</a>
                                                <button class="btn" style="background:#4cff4c;color:#222;margin-left:4px;">Approve</button>
                                                <button class="btn" style="background:#f76c6c;color:#fff;margin-left:4px;">Reject</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Alpha Corp</td>
                                            <td>Nurul Aini</td>
                                            <td>nurul@alpha.com</td>
                                            <td>013-8888888</td>
                                            <td>Suite 8, Level 5, KL Sentral</td>
                                            <td><a href="Alpha-SSM.pdf" style="color:#1976d2;" target="_blank">Alpha-SSM.pdf</a></td>
                                            <td><a href="TACP-Alpha.pdf" style="color:#1976d2;" target="_blank">TACP-Alpha.pdf</a></td>
                                            <td><a href="TASF-Alpha.pdf" style="color:#1976d2;" target="_blank">TASF-Alpha.pdf</a></td>
                                            <td><span class="status-inactive">Rejected</span></td>
                                            <td>
                                                <a href="#" style="color:#1976d2;">View</a>
                                                <button class="btn" style="background:#4cff4c;color:#222;margin-left:4px;">Approve</button>
                                                <button class="btn" style="background:#f76c6c;color:#fff;margin-left:4px;">Reject</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Beta Holdings</td>
                                            <td>Lim Wei</td>
                                            <td>lim.wei@beta.com</td>
                                            <td>017-2223344</td>
                                            <td>Block B, Bandar Sentral</td>
                                            <td><a href="Beta-SSM.pdf" style="color:#1976d2;" target="_blank">Beta-SSM.pdf</a></td>
                                            <td><a href="TACP-Beta.pdf" style="color:#1976d2;" target="_blank">TACP-Beta.pdf</a></td>
                                            <td><a href="TASF-Beta.pdf" style="color:#1976d2;" target="_blank">TASF-Beta.pdf</a></td>
                                            <td><span class="status-active">Approved</span></td>
                                            <td>
                                                <a href="#" style="color:#1976d2;">View</a>
                                                <button class="btn" style="background:#4cff4c;color:#222;margin-left:4px;">Approve</button>
                                                <button class="btn" style="background:#f76c6c;color:#fff;margin-left:4px;">Reject</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Delta Ventures</td>
                                            <td>Azman Rahim</td>
                                            <td>azman@delta.com</td>
                                            <td>019-5556677</td>
                                            <td>Lot 10, Bandar Sentral</td>
                                            <td><a href="Delta-SSM.pdf" style="color:#1976d2;" target="_blank">Delta-SSM.pdf</a></td>
                                            <td><a href="TACP-Delta.pdf" style="color:#1976d2;" target="_blank">TACP-Delta.pdf</a></td>
                                            <td><a href="TASF-Delta.pdf" style="color:#1976d2;" target="_blank">TASF-Delta.pdf</a></td>
                                            <td><span class="status-active">Approved</span></td>
                                            <td>
                                                <a href="#" style="color:#1976d2;">View</a>
                                                <button class="btn" style="background:#4cff4c;color:#222;margin-left:4px;">Approve</button>
                                                <button class="btn" style="background:#f76c6c;color:#fff;margin-left:4px;">Reject</button>
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
<div id="mobile-side-drawer" class="mobile-side-drawer"></div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/charts.js"></script>
</body>
</html>