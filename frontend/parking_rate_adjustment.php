<?php
// Set your page variables
$topbar_title = 'Admin';
$page_title = 'Parking Rate Adjustment';
$page_subtext = 'This page allows top administrators to configure and update parking fees, including base rates, and special rates for weekends and public holidays';
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
<body>

<div id="loading-spinner" style="display:none;">
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

                <!-- Big Centered Title -->
                <div class="big-center-title">
                    ONLY GLOBAL ADMIN CAN UPDATE PARKING RATES
                </div>
                <!-- Live Parking Rate Summary Card -->
                <div class="card" style="margin-top:32px;">
                    <div class="card-header">
                        <h4 class="card-title">Live Parking Rate Summary</h4>
                        <div class="card-subtext">can adjust below</div>
                    </div>
                    <div class="card-body">
                        <!-- Weekday Table -->
                        <div style="margin-bottom:24px;">
                            <div class="table-responsive">
                                <table class="table" style="background:#bdb7f6;">
                                    <thead>
                                        <tr>
                                            <th style="text-align:left;">Weekday</th>
                                            <th>Cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>1st hour or part thereof</td><td>RM3.00</td></tr>
                                        <tr><td>Every subsequent hour or part thereof</td><td>RM5.00</td></tr>
                                        <tr><td>Flat rate (after 5pm until 1am)</td><td>RM10.00/entry</td></tr>
                                        <tr><td>Overnight (1am to 7am)</td><td>RM15.00/entry</td></tr>
                                        <tr><td>Maximum parking fee per day</td><td>RM15.00</td></tr>
                                        <tr><td>Grace Period</td><td>30 minutes</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Saturday & Sunday Table -->
                        <div style="margin-bottom:24px;">
                                <div class="table-responsive">
                            <table class="table" style="background:#f9f7b4;">
                                <thead>
                                    <tr>
                                        <th style="text-align:left;">Saturday & Sunday</th>
                                        <th>Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>1st hour or part thereof</td><td>RM5.00</td></tr>
                                    <tr><td>Every subsequent hour or part thereof</td><td>RM3.00</td></tr>
                                    <tr><td>Flat rate (after 5pm until 1am)</td><td>RM10.00/entry</td></tr>
                                    <tr><td>Overnight (1am to 7am)</td><td>RM15.00/entry</td></tr>
                                    <tr><td>Maximum parking fee per day</td><td>RM15.00</td></tr>
                                    <tr><td>Grace Period</td><td>30 minutes</td></tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <!-- Public Holiday Table -->
                        <div>
                                <div class="table-responsive">
                            <table class="table" style="background:#f7b4b4;">
                                <thead>
                                    <tr>
                                        <th style="text-align:left;">Public Holiday</th>
                                        <th>Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>1st hour or part thereof</td><td>RM5.00</td></tr>
                                    <tr><td>Every subsequent hour or part thereof</td><td>RM3.00</td></tr>
                                    <tr><td>Flat rate (after 5pm until 1am)</td><td>RM10.00/entry</td></tr>
                                    <tr><td>Overnight (1am to 7am)</td><td>RM15.00/entry</td></tr>
                                    <tr><td>Maximum parking fee per day</td><td>RM15.00</td></tr>
                                    <tr><td>Grace Period</td><td>30 minutes</td></tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Divider between summary and configuration -->
                <div class="report-divider"></div>

                <!-- Configuration Card -->
                <div class="card" style="margin-top:32px;">
                    <div class="card-header">
                        <h4 class="card-title">Edit Rate Configuration</h4>
                        <div class="card-subtext">Configure each rate type below</div>
                    </div>
                    <div class="card-body config-card-body">
                        <!-- Weekday Rate Configuration -->
                        <div class="config-section-card">
                            <div class="config-section-title">Weekday Rate Configuration</div>
                            <form>
                                <div class="config-row">
                                    <label>First 1 Hour Fee</label>
                                    <input type="text" placeholder="Input (RM)">
                                </div>
                                <div class="config-row">
                                    <label>Subsequent Hour Fee</label>
                                    <input type="text" placeholder="Input (RM)/hr">
                                </div>
                                <div class="config-row">
                                    <label>Max Rate</label>
                                    <input type="text" placeholder="Input (RM)">
                                </div>
                                <div class="config-row">
                                    <label>Remarks</label>
                                    <input type="text" placeholder="Enter remarks (optional)">
                                </div>
                                <div class="config-row" style="justify-content: flex-end;">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- Saturday & Sunday Rate Configuration -->
                        <div class="config-section-card">
                            <div class="config-section-title">Saturday & Sunday Rate Configuration</div>
                            <form>
                                <div class="config-row">
                                    <label>Enable Weekend Rate</label>
                                    <button type="button" class="status-toggle-btn status-enabled" id="weekendRateStatusBtn">
                                        <span class="status-enable">Enable</span>/<span class="status-disable">Disable</span>
                                    </button>
                                </div>
                                <div class="config-row">
                                    <label>First 1 Hour Fee</label>
                                    <input type="text" placeholder="Input (RM)">
                                </div>
                                <div class="config-row">
                                    <label>Subsequent Hour Fee</label>
                                    <input type="text" placeholder="Input (RM)/hr">
                                </div>
                                <div class="config-row">
                                    <label>Max Rate</label>
                                    <input type="text" placeholder="Input (RM)">
                                </div>
                                <div class="config-row">
                                    <label>Remarks</label>
                                    <input type="text" placeholder="Enter remarks (optional)">
                                </div>
                                <div class="config-row" style="justify-content: flex-end;">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- Public Holiday Rate Configuration -->
                        <div class="config-section-card">
                            <div class="config-section-title">Public Holiday Rate Configuration</div>
                            <form>
                                <div class="config-row">
                                    <label>First 1 Hour Fee</label>
                                    <input type="text" placeholder="Input (RM)">
                                </div>
                                <div class="config-row">
                                    <label>Subsequent Hour Fee</label>
                                    <input type="text" placeholder="Input (RM)/hr">
                                </div>
                                <div class="config-row">
                                    <label>Max Rate</label>
                                    <input type="text" placeholder="Input (RM)">
                                </div>
                                <div class="config-row">
                                    <label>Remarks</label>
                                    <input type="text" placeholder="Enter remarks (optional)">
                                </div>
                                <div class="config-row">
                                    <label>Set Date</label>
                                    <button type="button" class="btn btn-primary" id="openHolidayDateConfigBtn">Press to configure Date</button>
                                </div>
                                <div class="config-row" style="justify-content: flex-end;">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- Flat Rate Configuration -->
                        <div class="config-section-card">
                            <div class="config-section-title">Flat Rate Configuration <span style="font-size: small;">(applied for all day type)</span></div>
                            <!-- Evening Flat Rate -->
                            <div class="config-section-subcard">
                                <div class="config-section-subtitle">Evening Flat Rate Configuration</div>
                                <form>
                                    <div class="config-row">
                                        <label>Flat Rate Fee</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row">
                                        <label>Time window (start)</label>
                                        <input type="text" placeholder="6.00pm">
                                    </div>
                                    <div class="config-row">
                                        <label>Time window (end)</label>
                                        <input type="text" placeholder="1.00am">
                                    </div>
                                    <div class="config-row">
                                        <label>Remarks</label>
                                        <input type="text" placeholder="Enter remarks (optional)">
                                    </div>
                                    <div class="config-row" style="justify-content: flex-end;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Overnight Flat Rate -->
                            <div class="config-section-subcard">
                                <div class="config-section-subtitle">Overnight Configuration</div>
                                <form>
                                    <div class="config-row">
                                        <label>Flat Rate Overnight Fee</label>
                                        <input type="text" placeholder="Input (RM)">
                                    </div>
                                    <div class="config-row">
                                        <label>Time window (start)</label>
                                        <input type="text" placeholder="1.00am">
                                    </div>
                                    <div class="config-row">
                                        <label>Time window (end)</label>
                                        <input type="text" placeholder="7.00am">
                                    </div>
                                    <div class="config-row">
                                        <label>Remarks</label>
                                        <input type="text" placeholder="Enter remarks (optional)">
                                    </div>
                                    <div class="config-row" style="justify-content: flex-end;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Grace Period Configuration -->
                        <div class="config-section-card">
                            <div class="config-section-title">
                                Grace Period Configuration
                            </div>
                            <form>
                                <div class="config-row">
                                    <label>Enable Grace Period</label>
                                    <button type="button" class="status-toggle-btn status-enabled" id="gracePeriodStatusBtn">
                                        <span class="status-enable">Enable</span>/<span class="status-disable">Disable</span>
                                    </button>
                                </div>
                                <div class="config-row">
                                    <label>Set Grace Period</label>
                                    <input type="text" value="30 minutes (default)" readonly>
                                </div>
                                <div class="config-row" style="align-items: flex-start;">
                                    <label style="margin-top:6px;">Applies on:</label>
                                    <div class="grace-applies-on-group">
                                        <label class="grace-applies-checkbox-label">
                                            <input type="checkbox" class="grace-applies-checkbox" checked>
                                            Weekday
                                        </label>
                                        <label class="grace-applies-checkbox-label">
                                            <input type="checkbox" class="grace-applies-checkbox" checked>
                                            Saturday & Sunday
                                        </label>
                                        <label class="grace-applies-checkbox-label">
                                            <input type="checkbox" class="grace-applies-checkbox" checked>
                                            Public Holiday
                                        </label>
                                    </div>
                                </div>
                                <div class="config-row" style="justify-content: flex-end;">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="report-divider"></div>

                <!-- Parking Rate Audit Log Card -->
                <div class="card" style="margin-top:32px;">
                    <div class="card-header">
                        <h4 class="card-title">Parking Rate Audit Log Tab</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table live-update-table">
                                <thead>
                                    <tr>
                                        <th>Date Updated</th>
                                        <th>Performed By</th>
                                        <th>Rate Type</th>
                                        <th>Old Value</th>
                                        <th>New Value</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10:42:18 2025-21-01</td>
                                        <td>Aidan Chow</td>
                                        <td>Base Rate (First 2 Hours)</td>
                                        <td>RM1.50</td>
                                        <td>RM2.00</td>
                                        <td>Adjusted for inflation</td>
                                    </tr>
                                    <tr>
                                        <td>09:12:02 2025-21-01</td>
                                        <td>Farah Zainal</td>
                                        <td>Weekend Rate</td>
                                        <td>RM2.00/hr</td>
                                        <td>RM3.00/hr</td>
                                        <td>Weekend peak hours</td>
                                    </tr>
                                    <tr>
                                        <td>17:48:23 2025-21-01</td>
                                        <td>Aidan Chow</td>
                                        <td>Grace Period</td>
                                        <td>15 minutes</td>
                                        <td>30 minutes</td>
                                        <td>Customer Complaint</td>
                                    </tr>
                                    <tr>
                                        <td>18:32:23 2025-21-01</td>
                                        <td>Kevin Lim</td>
                                        <td>Public Holiday Rate</td>
                                        <td>RM4.00/hr</td>
                                        <td>RM5.00/hr</td>
                                        <td>New pricing policy</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Holiday Date Overlay -->
<div id="holidayDateOverlay" class="holiday-date-overlay">
    <div class="holiday-date-modal">
        <div class="holiday-date-modal-header">
            <span class="holiday-date-modal-title">Configure Public Holiday Dates</span>
            <button class="holiday-date-modal-close" id="closeHolidayDateOverlayBtn">&times;</button>
        </div>
        <div class="holiday-date-modal-body">
            <div class="holiday-date-options">
                <label>
                    <input type="checkbox" disabled>
                    Auto Import Holidays (not available)
                </label>
                <div style="margin: 8px 0 4px 0;">Or</div>
                <div>Manually Set Date:</div>
            </div>
            <div class="holiday-date-calendar-grid">
                <!-- Example: Repeat this block for each month -->
                <?php
                $months = [
                    'January', 'February', 'March', 'April',
                    'May', 'June', 'July', 'August',
                    'September', 'October', 'November', 'December'
                ];
                foreach ($months as $month) {
                    echo '
                    <div class="holiday-date-calendar-card">
                        <div class="holiday-date-calendar-title">' . $month . '</div>
                        <div class="holiday-date-calendar-content">
                            <!-- Replace this with your calendar widget or static calendar as needed -->
                            <div class="holiday-date-calendar-placeholder">
                                <div style="font-size:13px;color:#888;margin-bottom:8px;">[Calendar Here]</div>
                                <button class="btn btn-calendar-save">Save</button>
                            </div>
                        </div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
        <div class="holiday-date-modal-footer">
            <button class="btn btn-primary" id="holidayDateAgreeBtn">Agree</button>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/charts.js"></script>
</body>
</html>