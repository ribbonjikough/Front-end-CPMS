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
    <div class="side-menu">
      <div class="frame">
        <a href="car_in_park.php" class="menu-item<?= $current_file === 'car_in_park.php' ? ' active' : '' ?>" title="Car in Park">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'car_in_park.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Car in Park</div>
        </a>
        <a href="parking_manual.php" class="menu-item<?= $current_file === 'parking_manual.php' ? ' active' : '' ?>" title="Manual Gate Opening Record">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'parking_manual.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Manual Gate Opening Record</div>
        </a>
        <a href="parking_history.php" class="menu-item<?= $current_file === 'parking_history.php' ? ' active' : '' ?>" title="Parking History">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'parking_history.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Parking History</div>
        </a>
        <a href="parking_lpr.php" class="menu-item<?= $current_file === 'parking_lpr.php' ? ' active' : '' ?>" title="LPR Logs">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'parking_lpr.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">LPR Logs</div>
        </a>
      </div>
    </div>
  </body>
</html>
