<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: view/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="home-container">
        <div class="home-content">
            <img src="assets/images/cantik-dan-lucu.png" alt="Home">
        </div>
    </div>
</body>
</html>
