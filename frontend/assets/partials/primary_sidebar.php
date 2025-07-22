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
$current = isset($_SESSION['current_page']) ? $_SESSION['current_page'] : 'home';

// Define sidebar items: key, icon, alt, and target PHP file
$sidebar_items = [
    [
        'key'  => 'home',
        'icon' => 'assets/img/home_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg',
        'alt'  => 'home',
        'href' => 'index.php',
        'pages' => ['index.php', 'dashboard_season.php'],
    ],
    [
        'key'  => 'parking',
        'icon' => 'assets/img/directions_car_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg',
        'alt'  => 'parking',
        'href' => 'car_in_park.php',
        'pages' => ['car_in_park.php', 'parking_manual.php', 'parking_history.php', 'parking_lpr.php'],
    ],
    [
        'key'  => 'report',
        'icon' => 'assets/img/monitoring_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg',
        'alt'  => 'report',
        'href' => 'transactions.php',
        'pages' => ['transactions.php', 'daily_sales.php', 'hourly_traffic.php', 'monthly_sales.php', 'length_of_stay.php', 'manual_open_barrier.php', 'redemption_transactions.php'],
    ],
    [
        'key'  => 'season',
        'icon' => 'assets/img/featured_seasonal_and_gifts_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24 (1).svg',
        'alt'  => 'season parking',
        'href' => 'season_parking_list.php',
        'pages' => ['season_parking_list.php', 'season_applications.php', 'season_refunds.php', 'season_einvoice.php', 'season_reporting.php', 'season_access_cards.php'],
    ],
    [
        'key'  => 'settings',
        'icon' => 'assets/img/settings_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg',
        'alt'  => 'settings',
        'href' => 'settings.php',
        'pages' => ['settings.php', 'parking_rate_adjustment.php', 'season_parking_adjustment.php', 'privileges.php', 'redemptions.php','profile.php'],
    ],
];

// Detect current PHP file
$current_file = basename($_SERVER['SCRIPT_NAME']);
?>
    <div class="primary-side-menu">
      <div class="frame">
        <?php foreach ($sidebar_items as $item): 
          // Active if current session page or current file matches any in 'pages'
          $is_active = in_array($current, $item['pages']) || in_array($current_file, $item['pages']) ? ' active' : '';
        ?>
          <a href="<?= $item['href'] ?>">
            <div class="sidebar-icon-wrapper<?= $is_active ?>">
              <img class="sidebar-icon" src="<?= $item['icon'] ?>" alt="<?= $item['alt'] ?>" />
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </body>
</html>
