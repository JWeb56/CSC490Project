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
                event_name VARCHAR(32),  
                num_participants INT(11)
            );
        ");

    // Get the values entered by the user
    $event_name = $_POST['event_name'];
    $num_participants = $_POST['num_participants'];

    // Empty input provided
    if (empty($event_name) || empty($num_participants)) {
        header("location: ../admin/session-create.php?error=emptyfields");
        exit();
    } // Invalid email entered for judge
     // Proper values entered
    else {
        $sql = "INSERT INTO session (uuid, event_name, num_participants) values(?, ?, ?)";
        $query = mysqli_stmt_init($connection);
        // Error with preparing the statement
        if (!mysqli_stmt_prepare($query, $sql)) {
            header("location: ../admin/session-create.php?error=sqlerror");
            exit();
        } // Everything is good to go - insert into db and redirect to home page
        else {
            mysqli_stmt_bind_param($query, "sss", $u = generateNewUuid(), $n = $event_name, $p = $num_participants);
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
