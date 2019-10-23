<?php

// User clicked the 'login' button
if (isset($_POST['login-submit'])) {
    require 'db.inc.php';

    // Get login info. from user
    $login = $_POST['login_input'];
    $password = $_POST['pwd'];

    // Nothing was entered into login form
    if (empty($login) || empty($password)) {
        header("location: ../index.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE username=? OR email=?";

        $stmt = mysqli_stmt_init($connection);
        // Prepare the sql query
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=sqlerror");
            exit();
        }
        // No syntactical or other problems with query
        else {
            // Bind the query parameters, execute, and fetch result
            mysqli_stmt_bind_param($stmt, "ss", $login, $login);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            // There is at least one result from the query
            if ($row = mysqli_fetch_assoc($result)) {
                // Entered password does not match the one stored in db
               if (!password_verify($password, $row['password'])) {
                   header("location: ../index.php?error=wrongpassword");
                   exit();
               }
               // Successful Login - start session and store
               else {
                   session_start();
                   $_SESSION['user'] = $row['username'];
                   $_SESSION['userUuid'] = $row['uuid'];
                   header("location: ../index.php?login=success");
                   exit();
               }
            }
            // There is no user with the provided username
            else {
                header("location: ../index.php?error=nouser");
                exit();
            }
        }
    }
}
// Someone tried to access this page without submitting the login form
else {
    header("location: ../index.php");
    exit();
}