<?php

function generateNewUuid() {
    return uniqid("490");
}

function hashPassword($password) {
    $temp = $password;
    return password_hash($temp, PASSWORD_DEFAULT);
}

function getAuthLevel() {
    $val = 1;
    return val;
}

if (isset($_POST['signup-submit'])) {

    require 'db.inc.php';

    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $pass_repeat = $_POST['pwd-repeat'];

    // Empty input provided
    if(empty($username) || empty($email) || empty($password) || empty($pass_repeat)) {
        header("location: ../view/signup.php?error=emptyfields&username=" . $username . "&mail=" . $email);
        exit();
    }
    // Invalid username and email
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("location: ../view/signup.php?error=invaliduser&mail");
        exit();    }
    // Invalid email
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location: ../view/signup.php?error=invalidmail&username=" . $username);
        exit();
    }
    // Invalid username
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("location: ../view/signup.php?error=invaliduname&mail=" . $email);
        exit();
    }
    // Passwords don't match
    else if($password !== $pass_repeat) {
        header("location: ../view/signup.php?error=passcheck&uname=" . $username . "&mail=" . $email);
        exit();
    }
    else {
        error_log("We got here");
        $sql = "SELECT * from user WHERE username=?";
        $query = mysqli_stmt_init($connection);
        // Error creating prepared statement for query
        if (!mysqli_stmt_prepare($query, $sql)) {
            header("location: ../view/signup.php?error=sqlerror&username=" . $username . "&mail=" . $email);
            exit();
        }
        //
        else {
            mysqli_stmt_bind_param($query, "s", $username);
            mysqli_stmt_execute($query);
            mysqli_stmt_store_result($query);
            $resultCheck = mysqli_stmt_num_rows($query);
            if ($resultCheck > 0) {
                header("location: ../view/signup.php?error=usertaken&mail=" . $email);
                exit();
            }
            else {
                $sql = "INSERT INTO user (uuid, username, password, email, auth_level) values(?, ?, ?, ?, ?)";
                $query = mysqli_stmt_init($connection);
                if (!mysqli_stmt_prepare($query, $sql)) {
                    header("location: ../view/signup.php?error=sqlerror&username" . $username . "&mail=" . $email);
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($query, "ssssi", $u = generateNewUuid(), $b = $username, $h = hashPassword($password), $e = $email, $g = getAuthLevel());
                    mysqli_stmt_execute($query);
                    header("location: ../view/signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($query);
    mysqli_close($connection);

}

else {
    header("location: ../view/signup.php");
    exit();
}