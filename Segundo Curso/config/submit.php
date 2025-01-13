<?php
session_start();

$usersJson = file_get_contents('users.json');
$users = json_decode($usersJson, true);

$username = trim($_POST['username']);
$password = trim($_POST['password']);

$foundUser = false;

foreach ($users as $user) {
    if ($user['username'] === $username && password_verify($password, $user['password'])) {
        $foundUser = true;
        $_SESSION['loggedin'] = true;
        $_SESSION['login_time'] = time();
        break;
    }
}

if ($foundUser) {
    header('Location: /menu.html');
} else {
    header('Location: /index.html?error=1');
}
exit;
?>