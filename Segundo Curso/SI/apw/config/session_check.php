<?php
session_start();

$session_duration = 10;

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.html");
    exit();
}

if (isset($_SESSION['login_time'])) {
    if (time() - $_SESSION['login_time'] > $session_duration) {
        session_destroy();
        header("Location: index.html?error=session_expired");
        exit();
    }
} else {
    header("Location: index.html");
    exit();
}

$_SESSION['login_time'] = time();
?>