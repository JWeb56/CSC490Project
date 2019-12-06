<?php

if (isset($_POST['sessionId-submit'])) {
    require('db.inc.php');

    $sessionCode = $_POST['code'];

// Create the 'session' table if it doesn't already exist
//mysqli_query($connection, "
//            CREATE TABLE IF NOT EXISTS session (
//                id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                uuid VARCHAR(32),
//                event_name VARCHAR(32),
//                num_participants INT(11)
//            );
//        ");

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
        // Array to store query results
        $results = array();
        $i = 0;
        // There is at least one result from the query
        while ($row = mysqli_fetch_assoc($result)) {
            $results[$i]['uuid'] = $row['uuid'];
            $results[$i]['event_name'] = $row['event_name'];
            $results[$i]['num_participants'] = $row['num_participants'];
            $i++;
        }
        $_SESSION['current_sessions'] = $results;
    }
}

// Someone tried to access this page without submitting the appropriate form
else {
    header("location: ../index.php");
    exit();
}


