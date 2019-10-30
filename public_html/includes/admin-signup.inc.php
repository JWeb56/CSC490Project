<?php

// Generate random UUID with prefix "CSC490"
function generateNewUuid() {
    return uniqid("CSC490");
}

// Hash password with the default algorithm
function hashPassword($password) {
    $temp = $password;
    return password_hash($temp, PASSWORD_DEFAULT);
}

function getAuthLevel() {
    return 1;
}

// User clicked the "create account" button
if (isset($_POST['signup-submit'])) {

    require 'db.inc.php';

    // Create the 'users' table if it doesn't already exist
    mysqli_query($connection, "
            CREATE TABLE IF NOT EXISTS users (
                id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                uuid VARCHAR(32), 
                username VARCHAR(32), 
                password VARCHAR(128), 
                email VARCHAR(32), 
                auth_level INT(11)
            );
        ");

    // Get the values entered by the user
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
        exit();
    }
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
    // Proper values entered
    else {
        $sql = "SELECT * from users WHERE username=?";
        $query = mysqli_stmt_init($connection);
        // Error creating prepared statement for query
        if (!mysqli_stmt_prepare($query, $sql)) {
            header("location: ../view/signup.php?error=sqlerror&username=" . $username . "&mail=" . $email);
            exit();
        }
        // No issues with query syntax
        else {
            // Bind the username parameter and query to see if that username already exists
            mysqli_stmt_bind_param($query, "s", $username);
            mysqli_stmt_execute($query);
            mysqli_stmt_store_result($query);
            $resultCheck = mysqli_stmt_num_rows($query);
            // There is already an entry with the provided username
            if ($resultCheck > 0) {
                header("location: ../view/signup.php?error=usertaken&mail=" . $email);
                exit();
            }
            // New user - try to create entry in the database
            else {
                $sql = "INSERT INTO users (uuid, username, password, email, auth_level) values(?, ?, ?, ?, ?)";
                $query = mysqli_stmt_init($connection);
                // Error with preparing the statement
                if (!mysqli_stmt_prepare($query, $sql)) {
                    header("location: ../view/signup.php?error=sqlerror&username" . $username . "&mail=" . $email);
                    exit();
                }
                // Everything is good to go - insert into db and redirect to home page
                else {
                    mysqli_stmt_bind_param($query, "ssssi", $u = generateNewUuid(), $b = $username, $h = hashPassword($password), $e = $email, $g = getAuthLevel());
                    mysqli_stmt_execute($query);
                    header("location: ../admin/index.php?admincreate=success");
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