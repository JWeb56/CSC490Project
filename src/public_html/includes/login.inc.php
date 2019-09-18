<?php

if (isset($_POST['login-submit'])) {
    require 'db.inc.php';

    $login = $_POST['login_input'];
    $password = $_POST['pwd'];

    if (empty($login) || empty($password)) {
        header("location: ../index.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * from user WHERE username=? OR email=?";
        $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $login, $login);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                error_log(password_hash($password, PASSWORD_DEFAULT));
               if (!password_verify($password, $row['password'])) {
                   header("location: ../index.php?error=wrongpassword");
                   exit();
               }
               else {
                   session_start();
                   $_SESSION['user'] = $row['username'];
                   $_SESSION['userUuid'] = $row['uuid'];
                   header("location: ../index.php?login=success");
                   exit();
               }
            }
            else {
                header("location: ../index.php?error=nouser");
                exit();
            }
        }
    }
}
else {
    header("location: ../index.php");
    exit();
}