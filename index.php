<?php
error_reporting(0);
session_start();

// Unset existing session and start fresh every time this page is visited
if (isset($_SESSION['user_session'])) {
    session_unset();
    session_destroy();
    session_start();
}

// Generate a new session ID
$_SESSION['user_session'] = bin2hex(random_bytes(16));
$userSession = $_SESSION['user_session'];


include 'include/session.php';

?>
<script>window.location.href = './main.php';</script>