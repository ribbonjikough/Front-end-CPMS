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
    ?>
    <div class="side-menu-home">
      <div class="frame">
        <div class="select-box<?php if($sidebar_active === 'car') echo ' active'; ?>">
          <div class="radio-bubton">
            <div class="group<?php if($sidebar_active === 'car') echo ' active'; ?>">
              <div class="ellipse<?php if($sidebar_active === 'car') echo ' active'; ?>"></div>
            </div>
          </div>
          <div class="transactions">Car in Park</div>
        </div>
        <div class="div<?php if($sidebar_active === 'manual') echo ' active'; ?>">
          <div class="radio-bubton">
            <div class="ellipse-2<?php if($sidebar_active === 'manual') echo ' active'; ?>"></div>
          </div>
          <div class="transactions">Manual Gate Opening Record</div>
        </div>
        <div class="div<?php if($sidebar_active === 'history') echo ' active'; ?>">
          <div class="radio-bubton">
            <div class="ellipse-2<?php if($sidebar_active === 'history') echo ' active'; ?>"></div>
          </div>
          <div class="transactions">Parking History</div>
        </div>
        <div class="div<?php if($sidebar_active === 'lpr') echo ' active'; ?>">
          <div class="radio-bubton">
            <div class="ellipse-2<?php if($sidebar_active === 'lpr') echo ' active'; ?>"></div>
          </div>
          <div class="transactions">LPR Logs</div>
        </div>
      </div>
    </div>
  </body>
</html>
