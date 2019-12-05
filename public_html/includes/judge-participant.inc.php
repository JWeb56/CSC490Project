<?php

// Make connection to database
require('db.inc.php');

// Generate random UUID with prefix "CSC490"
function generateNewUuid() {
    return uniqid("CSC490");
}



// Create the 'participant' table if it doesn't already exist
mysqli_query($connection, "
            CREATE TABLE IF NOT EXISTS participant (
                id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                uuid VARCHAR(32), 
                session_id VARCHAR(32), 
                judge_id VARCHAR(128), 
                total_score INT(11)
            );
        ");

// Micah you will pass your total score here, and I guess we'll talk Thursday about how to set session_id for each judge
$session_id = NULL; // Placeholder -- we need to determine how we're gonna bind session ids to judges tomorrow I guess
$judge_id = $_SESSION['user_uuid']; // This is already set as a session variable
$score = NULL; // Placeholder -- Micah you need to fill this in


$sql = "INSERT INTO participant (uuid, session_id, judge_id, total_score) values(?, ?, ?, ?)";
$query = mysqli_stmt_init($connection);
// Error with preparing the statement
if (!mysqli_stmt_prepare($query, $sql)) {
    header("location: ../admin/session-create.php?error=sqlerror");
    exit();
} // Everything is good to go - insert into db and redirect to home page
else {
    mysqli_stmt_bind_param($query, "sssi", $u = generateNewUuid(), $s = $session_id, $j = $judge_id, $s = $score);
    mysqli_stmt_execute($query);
    header("location: ../admin/index.php?sessionCreate=success");
    exit();
}