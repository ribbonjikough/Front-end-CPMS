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

// Define which pages make each icon active
$active_map = [
    'home'     => ['home', 'dashboard', 'global'],
    'parking'  => ['parking', 'car', 'vehicle'],
    'report'   => ['report', 'analytics'],
    'season'   => ['season', 'seasonal'],
    'settings' => ['settings', 'preferences']
];

function is_active($key, $current, $active_map) {
    return in_array($current, $active_map[$key]);
}
?>
    <div class="primary-side-menu">
      <div class="frame">
        <div class="sidebar-icon-wrapper<?php if(is_active('home', $current, $active_map)) echo ' active'; ?>">
          <img class="sidebar-icon" src="assets/img/home_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="home" />
        </div>
        <div class="sidebar-icon-wrapper<?php if(is_active('parking', $current, $active_map)) echo ' active'; ?>">
          <img class="sidebar-icon" src="assets/img/directions_car_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="parking" />
        </div>
        <div class="sidebar-icon-wrapper<?php if(is_active('report', $current, $active_map)) echo ' active'; ?>">
          <img class="sidebar-icon" src="assets/img/monitoring_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="report" />
        </div>
        <div class="sidebar-icon-wrapper<?php if(is_active('season', $current, $active_map)) echo ' active'; ?>">
          <img class="sidebar-icon" src="assets/img/featured_seasonal_and_gifts_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24 (1).svg" alt="season parking" />
        </div>
        <div class="sidebar-icon-wrapper<?php if(is_active('settings', $current, $active_map)) echo ' active'; ?>">
          <img class="sidebar-icon" src="assets/img/settings_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="settings" />
        </div>
      </div>
    </div>
  </body>
</html>
