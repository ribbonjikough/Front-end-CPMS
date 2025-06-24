<?php
// filepath: c:\Users\User\OneDrive - Universiti Malaya\Documents\GitHub\Front-end-CPMS\frontend\assets\partials\topbar.php
?>
<link rel="stylesheet" href="assets/css/style.css">

<div class="topbar">
  <div class="topbar-left">
    <img src="assets/img/company-logo.png" alt="Company Logo" class="topbar-logo">
    <span class="topbar-divider"></span>
    <span class="topbar-title">
      <?php echo isset($topbar_title) ? htmlspecialchars($topbar_title) : 'Feedbacks'; ?>
    </span>
  </div>
  <div class="topbar-right">
    <img src="assets/img/pfp.png" alt="Profile Picture" class="topbar-pfp">
    <div class="topbar-user">
      <div class="topbar-username">John Doe</div>
      <div class="topbar-role">Global Admin</div>
    </div>
    <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg" class="topbar-caret">
      <path d="M1 1L6 7L11 1" stroke="#333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </div>
</div>
<script src="../../assets/js/script.js"></script>
