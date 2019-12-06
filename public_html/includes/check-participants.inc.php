<?php

require('db.inc.php');

$sql1 = "SELECT * FROM participant";
$stmt = mysqli_stmt_init($connection);
mysqli_stmt_prepare($stmt, $sql1);
mysqli_stmt_execute($stmt);

$judges = array();
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while ($row = mysqli_fetch_assoc($result)) {
//    array_push($judges, $row['judge_id']);
//    array_push($judges, $row['name']);
    $judges[$row['name']] = $row['judge_id'];
}
