<?php
$topbar_title = 'Report';
$page_title = 'Transactions';
$page_subtext = 'This page shows all transactions made for all vehicles';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
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
        <?php include 'assets/partials/sidebar_report.php'; ?>

        <div class="page-wrapper">
            <div class="main-content">
                <div class="page-header">
                    <div class="page-title"><?= htmlspecialchars($page_title) ?></div>
                    <div class="page-subtext"><?= htmlspecialchars($page_subtext) ?></div>
                </div>
                <div class="content">
                    <canvas id="myChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="assets/js/script.js"></script>
<script>
  // Initialize the chart when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function () {
  var txCanvas = document.getElementById('myChart');
  if (txCanvas) {
    var txChart = new Chart(txCanvas.getContext('2d'), {
      type: 'bar',
      data: { /* ... */ },
      options: { /* ... */ }
    });
  }

  // Chart for another page
  var salesCanvas = document.getElementById('salesChart');
  if (salesCanvas) {
    var salesChart = new Chart(salesCanvas.getContext('2d'), {
      type: 'line',
      data: { /* ... */ },
      options: { /* ... */ }
    });
  }

  // Add more charts as needed...
});
</script>
</body>
</html>