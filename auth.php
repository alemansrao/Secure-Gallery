<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location:" . "./login.php", true, 301);
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location:" . "./login.php", true, 301);
}
?>