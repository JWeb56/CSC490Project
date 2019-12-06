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
                name VARCHAR(32),
                session_id VARCHAR(32), 
                judge_id VARCHAR(128), 
                total_score INT(11)
            );
        ");
$total = intval("<script> window.localStorage.getItem('tot');</script>");
$person = "<script>window.localStorage.getItem('per');";
// Micah you will pass your total score here, and I guess we'll talk Thursday about how to set session_id for each judge
$name = $person;
$session_id = $_SESSION['session_uuid'];
$judge_id = $_SESSION['userUuid']; // This is already set as a session variable
$score = $total; // Placeholder -- Micah you need to fill this in


$sql = "INSERT INTO participant (uuid, name, session_id, judge_id, total_score) values(?, ?, ?, ?, ?)";
$query = mysqli_stmt_init($connection);
// Error with preparing the statement
if (!mysqli_stmt_prepare($query, $sql)) {
    header("location: ../view/event.php?error=sqlerror");
    exit();
} // Everything is good to go - insert into db and redirect to home page
else {
    mysqli_stmt_bind_param($query, "ssssi", $u = generateNewUuid(), $n = $name, $s = $session_id, $j = $judge_id, $s = $score);
    mysqli_stmt_execute($query);
    exit();
}