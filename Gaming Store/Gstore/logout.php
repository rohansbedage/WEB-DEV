<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
session_unset();
session_destroy();
header('location: G-Store.php');
?>