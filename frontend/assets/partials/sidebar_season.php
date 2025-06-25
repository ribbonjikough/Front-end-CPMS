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
        <a href="season_parking_list.php" class="menu-item<?= $current_file === 'season_parking_list.php' ? ' active' : '' ?>" title="Go to Season Parking List">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'season_parking_list.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Season Parking List</div>
        </a>
        <a href="season_applications.php" class="menu-item<?= $current_file === 'season_applications.php' ? ' active' : '' ?>" title="Go to Season Applications">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'season_applications.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Applications</div>
        </a>
        <a href="season_refunds.php" class="menu-item<?= $current_file === 'season_refunds.php' ? ' active' : '' ?>" title="Go to Season Refunds">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'season_refunds.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Refunds</div>
        </a>
        <a href="season_einvoice.php" class="menu-item<?= $current_file === 'season_einvoice.php' ? ' active' : '' ?>" title="Go to E-Invoice">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'season_einvoice.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">E-Invoice</div>
        </a>
        <a href="season_reporting.php" class="menu-item<?= $current_file === 'season_reporting.php' ? ' active' : '' ?>" title="Go to Reporting">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'season_reporting.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Reporting</div>
        </a>
        <a href="season_access_cards.php" class="menu-item<?= $current_file === 'season_access_cards.php' ? ' active' : '' ?>" title="Go to Access Cards">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'season_access_cards.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Access Cards</div>
        </a>
      </div>
    </div>
  </body>
</html>
