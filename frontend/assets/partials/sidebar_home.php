<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="assets/css/globals.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/styleguide.css"/>
  </head>
  <body>
    <?php
    $current_file = basename($_SERVER['SCRIPT_NAME']);
    ?>
    <div class="side-menu">
      <div class="frame">
        <a href="index.php" class="menu-item<?= $current_file === 'index.php' ? ' active' : '' ?>" title="Go to Global Overview">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'index.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Global Overview</div>
        </a>
        <a href="dashboard_season.php" class="menu-item<?= $current_file === 'dashboard_season.php' ? ' active' : '' ?>" title="Go to Season Parking">
          <div class="radio-btn">
            <div class="radio-circle<?= $current_file === 'dashboard_season.php' ? ' active' : '' ?>"></div>
          </div>
          <div class="transactions">Season Parking</div>
        </a>
        <!-- Add more menu items as needed, following the same pattern -->
      </div>
    </div>
  </body>

  <script>
  window.addEventListener('DOMContentLoaded', () => {
    const frame = document.querySelector('.frame');
    if (!frame || frame.offsetWidth === 0) {
      console.warn('Frame is invisible or width is 0 on this screen size');
    } else {
      console.log('Frame is visible with width:', frame.offsetWidth);
    }
  });
</script>

</html>
