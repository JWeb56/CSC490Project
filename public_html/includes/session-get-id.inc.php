<?php

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

$sql = "SELECT * FROM session";

$stmt = mysqli_stmt_init($connection);
// Prepare the sql query
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=sqlerror");
    exit();
} // No syntactical or other problems with query
else {
    // Bind the query parameters, execute, and fetch result
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $results = array();
    // There is at least one result from the query
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($results, $row['uuid']);
        // Normal user, direct to home page
        header("location: ../view/home.php?login=success");
        exit();

    } // There is no user with the provided username
    else {
        header("location: ../index.php?error=nouser");
        exit();
    }
}
