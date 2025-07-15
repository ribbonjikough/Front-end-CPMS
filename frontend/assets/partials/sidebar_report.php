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
    if (!isset($sidebar_active)) $sidebar_active = 'report';
    // Use ?current=... param for AJAX/mobile sidebar loading
    $current_file = isset($_GET['current']) ? $_GET['current'] : basename($_SERVER['SCRIPT_NAME']);

    function is_active($file) {
        global $current_file;
        return $current_file === $file ? ' active' : '';
    }
    ?>
<div class="side-menu side-menu-mobile">
  <div class="frame frame-mobile">
    <a href="transactions.php" class="menu-item<?= is_active('transactions.php') ?>" title="Go to Transactions">
      <div class="radio-btn">
        <div class="radio-circle<?= is_active('transactions.php') ?>"></div>
      </div>
      <div class="transactions">Transactions</div>
    </a>
    <a href="daily_sales.php" class="menu-item<?= is_active('daily_sales.php') ?>" title="Go to Daily Sales">
      <div class="radio-btn">
        <div class="radio-circle<?= is_active('daily_sales.php') ?>"></div>
      </div>
      <div class="transactions">Daily Sales</div>
    </a>
    <a href="hourly_traffic.php" class="menu-item<?= is_active('hourly_traffic.php') ?>" title="Go to Hourly Traffic">
      <div class="radio-btn">
        <div class="radio-circle<?= is_active('hourly_traffic.php') ?>"></div>
      </div>
      <div class="transactions">Hourly Traffic</div>
    </a>
    <a href="monthly_sales.php" class="menu-item<?= is_active('monthly_sales.php') ?>" title="Go to Monthly Sales">
      <div class="radio-btn">
        <div class="radio-circle<?= is_active('monthly_sales.php') ?>"></div>
      </div>
      <div class="transactions">Monthly Sales</div>
    </a>
    <a href="length_of_stay.php" class="menu-item<?= is_active('length_of_stay.php') ?>" title="Go to Length of Stay">
      <div class="radio-btn">
        <div class="radio-circle<?= is_active('length_of_stay.php') ?>"></div>
      </div>
      <div class="transactions">Length of Stay</div>
    </a>
    <a href="manual_open_barrier.php" class="menu-item<?= is_active('manual_open_barrier.php') ?>" title="Go to Manual Open Barrier">
      <div class="radio-btn">
        <div class="radio-circle<?= is_active('manual_open_barrier.php') ?>"></div>
      </div>
      <div class="transactions">Manual Open Barrier</div>
    </a>
    <a href="redemption_transactions.php" class="menu-item<?= is_active('redemption_transactions.php') ?>" title="Go to Redemption Transactions">
      <div class="radio-btn">
        <div class="radio-circle<?= is_active('redemption_transactions.php') ?>"></div>
      </div>
      <div class="transactions">Redemption Transactions</div>
    </a>
  </div>
</div>
  </body>
</html>
