<?php

// User clicked the 'login' button
if (isset($_POST['endSession-submit'])) {
    session_start();
    require 'db.inc.php';

    // Get the Session UUID to be ended
    $sessionId = $_POST['delete-id'];
    //$sessionName = $_POST['delete-name'];
    // Nothing was entered into login form
    if (empty($sessionId)) {
        header("location: ../admin/session.php?error=noSessionSelected");
        exit();
    }
    // There was no problem getting the session ID we want to end and evaluate
    else {
        $sql = "UPDATE session set active = 0 WHERE uuid=?";

        $stmt = mysqli_stmt_init($connection);
        // Prepare the sql query
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../admin/session.php?error=sqlerror");
            exit();
        }
        // No syntactical or other problems with query
        else {
            // Bind the query parameters and execute
            mysqli_stmt_bind_param($stmt, "s", $s = $sessionId);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $_SESSION['ended_session'] = $sessionId;
            //$_SESSION['ended_session_hame'] = $sessionName;
            header("location: ../admin/results.php?endSession=success");
            exit();
        }
    }
}
// Someone tried to access this page without submitting the login form
else {
    header("location: ../admin/session.php?error=mustClickButton");
    exit();
}