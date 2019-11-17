<?php

// Generate random UUID with prefix "CSC490"
function generateNewUuid()
{
    return uniqid("CSC490");
}

// User clicked the "create account" button
if (isset($_POST['session-create-submit'])) {

    require('db.inc.php');

    // Create the 'session' table if it doesn't already exist
    mysqli_query($connection, "
            CREATE TABLE IF NOT EXISTS session (
                id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                uuid VARCHAR(32), 
                name VARCHAR(32), 
                category_name VARCHAR(128), 
                judge VARCHAR(32)
            );
        ");

    // Get the values entered by the user
    $name = $_POST['event_name'];
    $category = $_POST['event_category'];
    $judge = $_POST['event_judge'];

    // Empty input provided
    if (empty($name) || empty($category) || empty($judge)) {
        header("location: ../admin/session-create.php?error=emptyfields");
        exit();
    } // Invalid email entered for judge
    else if (!filter_var($judge, FILTER_VALIDATE_EMAIL)) {
        header("location: ../admin/session-create.php?error=invalidjudgeemail");
        exit();
    } // Proper values entered
    else {
        $sql = "INSERT INTO session (uuid, name, category_name, judge) values(?, ?, ?, ?)";
        $query = mysqli_stmt_init($connection);
        // Error with preparing the statement
        if (!mysqli_stmt_prepare($query, $sql)) {
            header("location: ../admin/session-create.php?error=sqlerror");
            exit();
        } // Everything is good to go - insert into db and redirect to home page
        else {
            mysqli_stmt_bind_param($query, "ssss", $u = generateNewUuid(), $n = $name, $c = $category, $j = $judge);
            mysqli_stmt_execute($query);
            header("location: ../admin/index.php?sessionCreate=success");
            exit();
        }
    }
    mysqli_stmt_close($query);
    mysqli_close($connection);

} else {
    header("location: ../admin/index.php");
    exit();
}
