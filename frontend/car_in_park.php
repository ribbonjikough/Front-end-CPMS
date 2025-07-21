<?php
$topbar_title = 'Parking'; 
$page_title = 'Car in Park';
$page_subtext = 'This page logs all vehicles that is currently in the bay'; 
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
                    <div class="filters-row">
                        <div class="filter-search" style="flex:1;max-width:320px;">
                            <input type="text" id="tableLiveSearch" class="search" placeholder="Search any value..." style="width:100%;padding:8px 12px;border-radius:6px;border:1px solid #ccc;" />
                        </div>
                        <div class="filter-btns">
                            <button id="filterToggleBtn" class="btn filter-square-btn" type="button" title="Show Filters">
                                <span class="filter-icon">&#9881;</span>
                            </button>
                            <button class="btn btn-export" type="button">Export</button>
                        </div>
                    </div>
                    <div class="filter-segment" id="filterSegment">
                        <div class="filter-search">
                            <div class="filter-label">Current Bay</div>
                            <select class="search" name="current_bay">
                                <option value="">All Bays</option>
                                <option value="A">Bay A</option>
                                <option value="B">Bay B</option>
                                <option value="C">Bay C</option>
                            </select>
                        </div>
                        <div class="filter-search">
                            <div class="filter-label">Parking Type</div>
                            <select class="search" name="parking_type">
                                <option value="">All Types</option>
                                <option value="Season">Season</option>
                                <option value="Visitor">Visitor</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="filter-search">
                            <div class="filter-label">Season ID</div>
                            <input type="text" class="search" placeholder="Season ID" name="season_id" />
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Car In Park</h4>
                            <div class="card-subtext">All vehicles currently in the bay</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Ticket ID</th>
                                            <th>Plate No1</th>
                                            <th>eTicket/Season ID/Unit No</th>
                                            <th>Parking Type</th>
                                            <th>Entry Time</th>
                                            <th>Entry Lane</th>
                                            <th>Tariff</th>
                                            <th>Grace Period (min)</th>
                                            <th>Vehicle Type</th>
                                            <th>Discount Plan</th>
                                            <th>Card Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TK12345</td>
                                            <td>WXY1234</td>
                                            <td>ETK-001 / S-1001 / U-12</td>
                                            <td>Season</td>
                                            <td>2024-07-01 09:15</td>
                                            <td>Lane 2</td>
                                            <td>RM2.00/hr</td>
                                            <td>15</td>
                                            <td>Car</td>
                                            <td>None</td>
                                            <td>RFID</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12345" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12345" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12345" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12346</td>
                                            <td>BKL5678</td>
                                            <td>ETK-002 / S-1002 / U-15</td>
                                            <td>Visitor</td>
                                            <td>2024-07-01 10:05</td>
                                            <td>Lane 1</td>
                                            <td>RM3.00/hr</td>
                                            <td>10</td>
                                            <td>Van</td>
                                            <td>Promo10</td>
                                            <td>Ticket</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12346" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12346" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12346" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12347</td>
                                            <td>JHN4321</td>
                                            <td>ETK-003 / S-1003 / U-18</td>
                                            <td>Season</td>
                                            <td>2024-07-01 10:30</td>
                                            <td>Lane 3</td>
                                            <td>RM2.50/hr</td>
                                            <td>20</td>
                                            <td>Motorcycle</td>
                                            <td>None</td>
                                            <td>RFID</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12347" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12347" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12347" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12348</td>
                                            <td>ABC1234</td>
                                            <td>ETK-004 / S-1004 / U-20</td>
                                            <td>Visitor</td>
                                            <td>2024-07-01 11:00</td>
                                            <td>Lane 2</td>
                                            <td>RM2.00/hr</td>
                                            <td>15</td>
                                            <td>Car</td>
                                            <td>Promo5</td>
                                            <td>Ticket</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12348" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12348" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12348" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12349</td>
                                            <td>DEF5678</td>
                                            <td>ETK-005 / S-1005 / U-22</td>
                                            <td>Season</td>
                                            <td>2024-07-01 11:15</td>
                                            <td>Lane 1</td>
                                            <td>RM2.50/hr</td>
                                            <td>20</td>
                                            <td>Car</td>
                                            <td>None</td>
                                            <td>RFID</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12349" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12349" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12349" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12350</td>
                                            <td>GHI9012</td>
                                            <td>ETK-006 / S-1006 / U-25</td>
                                            <td>Visitor</td>
                                            <td>2024-07-01 11:30</td>
                                            <td>Lane 3</td>
                                            <td>RM3.00/hr</td>
                                            <td>10</td>
                                            <td>Van</td>
                                            <td>Promo10</td>
                                            <td>Ticket</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12350" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12350" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12350" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12351</td>
                                            <td>JKL3456</td>
                                            <td>ETK-007 / S-1007 / U-28</td>
                                            <td>Season</td>
                                            <td>2024-07-01 12:00</td>
                                            <td>Lane 2</td>
                                            <td>RM2.00/hr</td>
                                            <td>15</td>
                                            <td>Car</td>
                                            <td>None</td>
                                            <td>RFID</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12351" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12351" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12351" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12352</td>
                                            <td>MNO7890</td>
                                            <td>ETK-008 / S-1008 / U-30</td>
                                            <td>Visitor</td>
                                            <td>2024-07-01 12:15</td>
                                            <td>Lane 1</td>
                                            <td>RM3.00/hr</td>
                                            <td>10</td>
                                            <td>Van</td>
                                            <td>Promo10</td>
                                            <td>Ticket</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12352" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12352" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12352" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12353</td>
                                            <td>PQR1234</td>
                                            <td>ETK-009 / S-1009 / U-32</td>
                                            <td>Season</td>
                                            <td>2024-07-01 12:30</td>
                                            <td>Lane 3</td>
                                            <td>RM2.50/hr</td>
                                            <td>20</td>
                                            <td>Car</td>
                                            <td>None</td>
                                            <td>RFID</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12353" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12353" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12353" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12354</td>
                                            <td>STU5678</td>
                                            <td>ETK-010 / S-1010 / U-35</td>
                                            <td>Visitor</td>
                                            <td>2024-07-01 13:00</td>
                                            <td>Lane 2</td>
                                            <td>RM2.00/hr</td>
                                            <td>15</td>
                                            <td>Car</td>
                                            <td>Promo5</td>
                                            <td>Ticket</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12354" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12354" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12354" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12355</td>
                                            <td>VWX9012</td>
                                            <td>ETK-011 / S-1011 / U-38</td>
                                            <td>Season</td>
                                            <td>2024-07-01 13:15</td>
                                            <td>Lane 1</td>
                                            <td>RM2.50/hr</td>
                                            <td>20</td>
                                            <td>Car</td>
                                            <td>None</td>
                                            <td>RFID</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12355" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12355" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12355" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12356</td>
                                            <td>YZA3456</td>
                                            <td>ETK-012 / S-1012 / U-40</td>
                                            <td>Visitor</td>
                                            <td>2024-07-01 13:30</td>
                                            <td>Lane 3</td>
                                            <td>RM3.00/hr</td>
                                            <td>10</td>
                                            <td>Van</td>
                                            <td>Promo10</td>
                                            <td>Ticket</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12356" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12356" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12356" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12357</td>
                                            <td>BCD7890</td>
                                            <td>ETK-013 / S-1013 / U-42</td>
                                            <td>Season</td>
                                            <td>2024-07-01 14:00</td>
                                            <td>Lane 2</td>
                                            <td>RM2.00/hr</td>
                                            <td>15</td>
                                            <td>Car</td>
                                            <td>None</td>
                                            <td>RFID</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12357" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12357" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12357" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12358</td>
                                            <td>CDE1234</td>
                                            <td>ETK-014 / S-1014 / U-44</td>
                                            <td>Visitor</td>
                                            <td>2024-07-01 14:15</td>
                                            <td>Lane 1</td>
                                            <td>RM3.00/hr</td>
                                            <td>10</td>
                                            <td>Van</td>
                                            <td>Promo10</td>
                                            <td>Ticket</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12358" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12358" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12358" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12359</td>
                                            <td>DEF5678</td>
                                            <td>ETK-015 / S-1015 / U-46</td>
                                            <td>Season</td>
                                            <td>2024-07-01 14:30</td>
                                            <td>Lane 3</td>
                                            <td>RM2.50/hr</td>
                                            <td>20</td>
                                            <td>Car</td>
                                            <td>None</td>
                                            <td>RFID</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12359" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12359" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12359" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12360</td>
                                            <td>EFG9012</td>
                                            <td>ETK-016 / S-1016 / U-48</td>
                                            <td>Visitor</td>
                                            <td>2024-07-01 15:00</td>
                                            <td>Lane 2</td>
                                            <td>RM2.00/hr</td>
                                            <td>15</td>
                                            <td>Car</td>
                                            <td>Promo5</td>
                                            <td>Ticket</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12360" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12360" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12360" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12361</td>
                                            <td>FGH3456</td>
                                            <td>ETK-017 / S-1017 / U-50</td>
                                            <td>Season</td>
                                            <td>2024-07-01 15:15</td>
                                            <td>Lane 1</td>
                                            <td>RM2.50/hr</td>
                                            <td>20</td>
                                            <td>Car</td>
                                            <td>None</td>
                                            <td>RFID</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12361" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12361" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12361" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12362</td>
                                            <td>GHI7890</td>
                                            <td>ETK-018 / S-1018 / U-52</td>
                                            <td>Visitor</td>
                                            <td>2024-07-01 15:30</td>
                                            <td>Lane 3</td>
                                            <td>RM3.00/hr</td>
                                            <td>10</td>
                                            <td>Van</td>
                                            <td>Promo10</td>
                                            <td>Ticket</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12362" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12362" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12362" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12363</td>
                                            <td>HIJ1234</td>
                                            <td>ETK-019 / S-1019 / U-54</td>
                                            <td>Season</td>
                                            <td>2024-07-01 16:00</td>
                                            <td>Lane 2</td>
                                            <td>RM2.00/hr</td>
                                            <td>15</td>
                                            <td>Car</td>
                                            <td>None</td>
                                            <td>RFID</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12363" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12363" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12363" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12364</td>
                                            <td>IJK5678</td>
                                            <td>ETK-020 / S-1020 / U-56</td>
                                            <td>Visitor</td>
                                            <td>2024-07-01 16:15</td>
                                            <td>Lane 1</td>
                                            <td>RM3.00/hr</td>
                                            <td>10</td>
                                            <td>Van</td>
                                            <td>Promo10</td>
                                            <td>Ticket</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12364" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12364" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12364" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12365</td>
                                            <td>JKL9012</td>
                                            <td>ETK-021 / S-1021 / U-58</td>
                                            <td>Season</td>
                                            <td>2024-07-01 16:30</td>
                                            <td>Lane 3</td>
                                            <td>RM2.50/hr</td>
                                            <td>20</td>
                                            <td>Car</td>
                                            <td>None</td>
                                            <td>RFID</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12365" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12365" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12365" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12366</td>
                                            <td>KLM3456</td>
                                            <td>ETK-022 / S-1022 / U-60</td>
                                            <td>Visitor</td>
                                            <td>2024-07-01 17:00</td>
                                            <td>Lane 2</td>
                                            <td>RM2.00/hr</td>
                                            <td>15</td>
                                            <td>Car</td>
                                            <td>Promo5</td>
                                            <td>Ticket</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12366" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12366" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12366" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12367</td>
                                            <td>LMN7890</td>
                                            <td>ETK-023 / S-1023 / U-62</td>
                                            <td>Season</td>
                                            <td>2024-07-01 17:15</td>
                                            <td>Lane 1</td>
                                            <td>RM2.50/hr</td>
                                            <td>20</td>
                                            <td>Car</td>
                                            <td>None</td>
                                            <td>RFID</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12367" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12367" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12367" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12368</td>
                                            <td>MNO1234</td>
                                            <td>ETK-024 / S-1024 / U-64</td>
                                            <td>Visitor</td>
                                            <td>2024-07-01 17:30</td>
                                            <td>Lane 3</td>
                                            <td>RM3.00/hr</td>
                                            <td>10</td>
                                            <td>Van</td>
                                            <td>Promo10</td>
                                            <td>Ticket</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12368" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12368" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12368" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12369</td>
                                            <td>NOP5678</td>
                                            <td>ETK-025 / S-1025 / U-66</td>
                                            <td>Season</td>
                                            <td>2024-07-01 18:00</td>
                                            <td>Lane 2</td>
                                            <td>RM2.00/hr</td>
                                            <td>15</td>
                                            <td>Car</td>
                                            <td>None</td>
                                            <td>RFID</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12369" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12369" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12369" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TK12370</td>
                                            <td>OPQ9012</td>
                                            <td>ETK-026 / S-1026 / U-68</td>
                                            <td>Visitor</td>
                                            <td>2024-07-01 18:15</td>
                                            <td>Lane 1</td>
                                            <td>RM3.00/hr</td>
                                            <td>10</td>
                                            <td>Van</td>
                                            <td>Promo10</td>
                                            <td>Ticket</td>
                                            <td>
                                              <div class="action-btn-group">
                                                <a href="void.php?id=TK12370" class="table-action-btn">Void <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="pay.php?id=TK12370" class="table-action-btn">Pay <span class="table-action-arrow">&#8594;</span></a>
                                                <a href="switch_tariff.php?id=TK12370" class="table-action-btn">Switch Tariff <span class="table-action-arrow">&#8594;</span></a>
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
<div id="mobile-side-drawer" class="mobile-side-drawer"></div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/charts.js"></script>
</body>
</html>
