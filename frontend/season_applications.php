<?php
$topbar_title = 'Season Parking';
$page_title = 'Applications';
$page_subtext = 'This page reviews, approves, and manages all season parking applications.';
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
            <h4 class="card-title" id="applications-table-title">Pending Individual Applications</h4>
            <div class="card-subtext" id="applications-table-subtext">Review and approve/reject individual applications</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- Individual Applications Table -->
                <table class="table" id="individual-applications-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Date Applied</th>
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
                            <td>101</td>
                            <td>2024-07-01</td>
                            <td>Ali Bin Abu</td>
                            <td>ABC Sdn Bhd</td>
                            <td>ali@abc.com</td>
                            <td>2024-07-10</td>
                            <td>012-1111222</td>
                            <td>03-12345678</td>
                            <td>900101-01-1234</td>
                            <td>TXP123456</td>
                            <td>ABC1234</td>
                            <td>XYZ5678</td>
                            <td>Season</td>
                            <td>Tenant</td>
                            <td>Car</td>
                            <td>123, Jalan Sentral</td>
                            <td><span class="status-pending">Pending</span></td>
                            <td>
                                <button class="table-action-view">View</button>
                                <button class="table-action-approve">Approve</button>
                                <button class="table-action-reject">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td>2024-07-02</td>
                            <td>Siti Aminah</td>
                            <td>XYZ Sdn Bhd</td>
                            <td>siti@xyz.com</td>
                            <td>2024-07-11</td>
                            <td>013-2222333</td>
                            <td>03-87654321</td>
                            <td>880202-02-5678</td>
                            <td>TXP654321</td>
                            <td>DEF5678</td>
                            <td>LMN4321</td>
                            <td>Visitor</td>
                            <td>Subtenant</td>
                            <td>Van</td>
                            <td>456, Jalan XYZ</td>
                            <td><span class="status-pending">Pending</span></td>
                            <td>
                                <button class="table-action-view">View</button>
                                <button class="table-action-approve">Approve</button>
                                <button class="table-action-reject">Reject</button>
                            </td>
                        </tr>
                        <!-- Added Example Row 1 -->
                        <tr>
                            <td>103</td>
                            <td>2024-07-03</td>
                            <td>Lim Wei</td>
                            <td>Beta Holdings</td>
                            <td>lim.wei@beta.com</td>
                            <td>2024-07-12</td>
                            <td>017-2223344</td>
                            <td>03-2223344</td>
                            <td>850303-03-3333</td>
                            <td>TXP789012</td>
                            <td>JKL3456</td>
                            <td>OPQ7890</td>
                            <td>Season</td>
                            <td>Tenant</td>
                            <td>Motorcycle</td>
                            <td>789, Jalan Beta</td>
                            <td><span class="status-pending">Pending</span></td>
                            <td>
                                <button class="table-action-view">View</button>
                                <button class="table-action-approve">Approve</button>
                                <button class="table-action-reject">Reject</button>
                            </td>
                        </tr>
                        <!-- Added Example Row 2 -->
                        <tr>
                            <td>104</td>
                            <td>2024-07-04</td>
                            <td>Azman Rahim</td>
                            <td>Delta Ventures</td>
                            <td>azman@delta.com</td>
                            <td>2024-07-13</td>
                            <td>019-5556677</td>
                            <td>03-5556677</td>
                            <td>820404-04-4444</td>
                            <td>TXP345678</td>
                            <td>RST9012</td>
                            <td>UVW3456</td>
                            <td>Visitor</td>
                            <td>Subtenant</td>
                            <td>Car</td>
                            <td>1010, Jalan Delta</td>
                            <td><span class="status-pending">Pending</span></td>
                            <td>
                                <button class="table-action-view">View</button>
                                <button class="table-action-approve">Approve</button>
                                <button class="table-action-reject">Reject</button>
                            </td>
                        </tr>
                        <!-- Added Example Row 3 -->
                        <tr>
                            <td>105</td>
                            <td>2024-07-05</td>
                            <td>Noraini Zainal</td>
                            <td>Gamma Sdn Bhd</td>
                            <td>noraini@gamma.com</td>
                            <td>2024-07-14</td>
                            <td>018-8889999</td>
                            <td>03-8889999</td>
                            <td>910505-05-5555</td>
                            <td>TXP567890</td>
                            <td>XYZ1234</td>
                            <td>ABC5678</td>
                            <td>Season</td>
                            <td>Tenant</td>
                            <td>Van</td>
                            <td>2020, Jalan Gamma</td>
                            <td><span class="status-pending">Pending</span></td>
                            <td>
                                <button class="table-action-view">View</button>
                                <button class="table-action-approve">Approve</button>
                                <button class="table-action-reject">Reject</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- Corporate Applications Table -->
                <table class="table" id="corporate-applications-table" style="display:none;">
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
                            <td>201</td>
                            <td>Simple Sdn Bhd</td>
                            <td>Kamarul Baman</td>
                            <td>kamarul@gmail.com</td>
                            <td>012-343282</td>
                            <td>Level 2, Tower 3, Plaza Sentral</td>
                            <td><a href="Simple-SSM.pdf" style="color:#1976d2;" target="_blank">Simple-SSM.pdf</a></td>
                            <td><a href="TACP-Simple.pdf" style="color:#1976d2;" target="_blank">TACP-Simple.pdf</a></td>
                            <td><a href="TASF-Simple.pdf" style="color:#1976d2;" target="_blank">TASF-Simple.pdf</a></td>
                            <td><span class="status-pending">Pending</span></td>
                            <td>
                                <button class="table-action-view">View</button>
                                <button class="table-action-approve">Approve</button>
                                <button class="table-action-reject">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>202</td>
                            <td>Alpha Corp</td>
                            <td>Nurul Aini</td>
                            <td>nurul@alpha.com</td>
                            <td>013-8888888</td>
                            <td>Suite 8, Level 5, KL Sentral</td>
                            <td><a href="Alpha-SSM.pdf" style="color:#1976d2;" target="_blank">Alpha-SSM.pdf</a></td>
                            <td><a href="TACP-Alpha.pdf" style="color:#1976d2;" target="_blank">TACP-Alpha.pdf</a></td>
                            <td><a href="TASF-Alpha.pdf" style="color:#1976d2;" target="_blank">TASF-Alpha.pdf</a></td>
                            <td><span class="status-pending">Pending</span></td>
                            <td>
                                <button class="table-action-view">View</button>
                                <button class="table-action-approve">Approve</button>
                                <button class="table-action-reject">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>203</td>
                            <td>Beta Holdings</td>
                            <td>Lim Wei</td>
                            <td>lim.wei@beta.com</td>
                            <td>017-2223344</td>
                            <td>Block B, Bandar Sentral</td>
                            <td><a href="Beta-SSM.pdf" style="color:#1976d2;" target="_blank">Beta-SSM.pdf</a></td>
                            <td><a href="TACP-Beta.pdf" style="color:#1976d2;" target="_blank">TACP-Beta.pdf</a></td>
                            <td><a href="TASF-Beta.pdf" style="color:#1976d2;" target="_blank">TASF-Beta.pdf</a></td>
                            <td><span class="status-pending">Pending</span></td>
                            <td>
                                <button class="table-action-view">View</button>
                                <button class="table-action-approve">Approve</button>
                                <button class="table-action-reject">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>204</td>
                            <td>Delta Ventures</td>
                            <td>Azman Rahim</td>
                            <td>azman@delta.com</td>
                            <td>019-5556677</td>
                            <td>Lot 10, Bandar Sentral</td>
                            <td><a href="Delta-SSM.pdf" style="color:#1976d2;" target="_blank">Delta-SSM.pdf</a></td>
                            <td><a href="TACP-Delta.pdf" style="color:#1976d2;" target="_blank">TACP-Delta.pdf</a></td>
                            <td><a href="TASF-Delta.pdf" style="color:#1976d2;" target="_blank">TASF-Delta.pdf</a></td>
                            <td><span class="status-pending">Pending</span></td>
                            <td>
                                <button class="table-action-view">View</button>
                                <button class="table-action-approve">Approve</button>
                                <button class="table-action-reject">Reject</button>
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
    
    <script>
    document.querySelectorAll('.account-type-toggle').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.account-type-toggle').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            if (btn.dataset.type === 'individual') {
                document.getElementById('individual-applications-table').style.display = '';
                document.getElementById('corporate-applications-table').style.display = 'none';
                document.getElementById('applications-table-title').textContent = 'Pending Individual Applications';
                document.getElementById('applications-table-subtext').textContent = 'Review and approve/reject individual applications';
            } else {
                document.getElementById('individual-applications-table').style.display = 'none';
                document.getElementById('corporate-applications-table').style.display = '';
                document.getElementById('applications-table-title').textContent = 'Pending Corporate Applications';
                document.getElementById('applications-table-subtext').textContent = 'Review and approve/reject corporate applications';
            }
        });
    });
    </script>

    <style>
    .account-type-toggle-group {
        margin-bottom: 18px;
        display: flex;
        gap: 8px;
    }
    .account-type-toggle {
        padding: 7px 18px;
        border-radius: 8px;
        border: 1.5px solid #1976d2;
        background: #fff;
        color: #1976d2;
        font-size: 15px;
        font-weight: 500;
        cursor: pointer;
        transition: background 0.18s, color 0.18s;
    }
    .account-type-toggle.active,
    .account-type-toggle:hover {
        background: #1976d2;
        color: #fff;
    }
    </style>
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