<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="assets/css/globals.css" />
    <link rel="stylesheet" href="assets/css/styleguide.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
  <div id="mobile-side-drawer" class="mobile-side-drawer"></div>
  
    <div class="top-menu">
      <div class="logo-walkin-search">
        <img class="image" src="assets/img/company-logo2.png" />
        <img class="divider" src="data:image/svg+xml;utf8,<svg width='2' height='44' xmlns='http://www.w3.org/2000/svg'><rect width='2' height='44' fill='%23E4E4E4'/></svg>" />
        <div class="walkin">
          <div class="walk-in">
            <?php echo isset($topbar_title) ? htmlspecialchars($topbar_title) : 'Error 404 Page Not Found'; ?>
          </div>
        </div>
      </div>
      <div class="frame">
        <div class="image-wrapper"><img class="img" src="assets/img/pfp.png" /></div>
        <div class="div">
          <div class="text-wrapper">John Doe</div>
          <div class="text-wrapper-2">Global Admin</div>
        </div>
        <img class="polygon" src="data:image/svg+xml;utf8,<svg width='12' height='8' viewBox='0 0 12 8  ' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M1 1L6 7L11 1' stroke='%23333' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/></svg>" />
      </div>
    </div>
    <!-- Add this button for mobile sidebar toggle -->
    <button class="sidebar-toggle" aria-label="Open sidebar" style="background:none;border:none;font-size:28px;cursor:pointer;display:none;">
      &#9776;
    </button>
    <!-- Add this overlay for mobile sidebar -->
    <div class="sidebar-overlay"></div>
        <nav class="mobile-bottom-nav">
      <a href="index.php" class="nav-icon" data-section="home">
        <img src="assets/img/home_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="Home">
        <span>Home</span>
      </a>
      <a href="car_in_park.php" class="nav-icon" data-section="parking">
        <img src="assets/img/directions_car_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="Parking">
        <span>Parking</span>
      </a>
      <a href="transactions.php" class="nav-icon" data-section="report">
        <img src="assets/img/monitoring_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="Report">
        <span>Report</span>
      </a>
      <a href="season_parking_list.php" class="nav-icon" data-section="season">
        <img src="assets/img/featured_seasonal_and_gifts_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24 (1).svg" alt="Season">
        <span>Season</span>
      </a>
      <a href="settings.php" class="nav-icon" data-section="settings">
        <img src="assets/img/settings_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="Settings">
        <span>Settings</span>
      </a>
    </nav>
  </body>
</html>
