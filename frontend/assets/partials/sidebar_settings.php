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
        <a href="parking_rate_adjustment.php" class="menu-item<?= $current_file === 'parking_rate_adjustment.php' ? ' active' : '' ?>" title="Go to Parking Rate Adjustment">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'parking_rate_adjustment.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Parking Rate Adjustment</div>
        </a>
        <a href="season_parking_adjustment.php" class="menu-item<?= $current_file === 'season_parking_adjustment.php' ? ' active' : '' ?>" title="Go to Season Parking Adjustment">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'season_parking_adjustment.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Season Parking Adjustment</div>
        </a>
        <a href="privileges.php" class="menu-item<?= $current_file === 'privileges.php' ? ' active' : '' ?>" title="Go to Privileges">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'privileges.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Privileges</div>
        </a>
        <a href="redemptions.php" class="menu-item<?= $current_file === 'redemptions.php' ? ' active' : '' ?>" title="Go to Redemptions">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'redemptions.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Redemptions</div>
        </a>
        <a href="settings.php" class="menu-item<?= $current_file === 'settings.php' ? ' active' : '' ?>" title="Go to Settings">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'settings.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Settings</div>
        </a>
      </div>
    </div>
  </body>
</html>
