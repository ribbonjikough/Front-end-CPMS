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
    $current_file = basename($_SERVER['SCRIPT_NAME']);
    ?>
    <div class="side-menu">
      <div class="frame">
        <a href="index.php" class="menu-item<?= $current_file === 'index.php' ? ' active' : '' ?>">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'index.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Global Overview</div>
        </a>
        <a href="dashboard_season.php" class="menu-item<?= $current_file === 'dashboard_season.php' ? ' active' : '' ?>">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'dashboard_season.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Season Parking</div>
        </a>
        <!-- Add more menu items as needed, following the same pattern -->
      </div>
    </div>
  </body>
</html>
