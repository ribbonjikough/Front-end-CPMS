<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php
    // Set $sidebar_active = 'car', 'manual', 'history', or 'lpr' before including this file
    if (!isset($sidebar_active)) $sidebar_active = 'car';
    $current_file = basename($_SERVER['SCRIPT_NAME']);
    ?>
<div class="side-menu side-menu-mobile">
  <div class="frame frame-mobile">
        <a href="transactions.php" class="menu-item<?= $current_file === 'transactions.php' ? ' active' : '' ?>" title="Go to Transactions">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'transactions.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Transactions</div>
        </a>
        <a href="daily_sales.php" class="menu-item<?= $current_file === 'daily_sales.php' ? ' active' : '' ?>" title="Go to Daily Sales">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'daily_sales.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Daily Sales</div>
        </a>
        <a href="hourly_traffic.php" class="menu-item<?= $current_file === 'hourly_traffic.php' ? ' active' : '' ?>" title="Go to Hourly Traffic">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'hourly_traffic.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Hourly Traffic</div>
        </a>
        <a href="monthly_sales.php" class="menu-item<?= $current_file === 'monthly_sales.php' ? ' active' : '' ?>" title="Go to Monthly Sales">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'monthly_sales.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Monthly Sales</div>
        </a>
        <a href="length_of_stay.php" class="menu-item<?= $current_file === 'length_of_stay.php' ? ' active' : '' ?>" title="Go to Length of Stay">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'length_of_stay.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Length of Stay</div>
        </a>
        <a href="manual_open_barrier.php" class="menu-item<?= $current_file === 'manual_open_barrier.php' ? ' active' : '' ?>" title="Go to Manual Open Barrier">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'manual_open_barrier.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Manual Open Barrier</div>
        </a>
        <a href="redemption_transactions.php" class="menu-item<?= $current_file === 'redemption_transactions.php' ? ' active' : '' ?>" title="Go to Redemption Transactions">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'redemption_transactions.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Redemption Transactions</div>
        </a>
      </div>
    </div>
  </body>
</html>
