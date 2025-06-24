<?php
// filepath: c:\Users\User\OneDrive - Universiti Malaya\Documents\GitHub\Front-end-CPMS\frontend\login.php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fake login, always succeed
    $_SESSION['logged_in'] = true;
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Login</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="login-container">
        <form class="login-form" method="post" onsubmit="return validateLogin();">
            <h2>Login</h2>
            <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" required>
            <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
            <button type="submit">Login</button>
        </form>
    </div>
    <script src="../assets/js/script.js"></script>
</body>
</html>