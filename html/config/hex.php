<?php
$password = "Vvss0823";
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
echo $hashedPassword;
?>