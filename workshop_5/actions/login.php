<?php
require_once('../utils/functions.php');
session_start();

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = authenticate($username, $password);
    if ($user) {
        $_SESSION['user'] = $user;
        header('Location: /workshop_5/users.php');
        exit();
    } else {
        header('Location: /workshop_5/index.php?error=Invalid credentials');
        exit();
    }
}


