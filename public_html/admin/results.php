<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
require '../includes/db.inc.php';
$session_to_view = $_SESSION['ended_session'];
error_log("Testing session variable is set: " . $session_to_view);
$sql = "select name, session_id, total_score from participant where session_id=?";
$stmt = mysqli_stmt_init($connection);
mysqli_stmt_prepare($stmt, $sql);
// Bind the query parameters, execute, and fetch result
mysqli_stmt_bind_param($stmt, "i", $s = $session_to_view);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$results = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($results, $row);
}
?>







    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">


            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Participant</th>
                            <th>Session</th>
                            <th>Total</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($results as $entry) { ?> <tr>
                            <td> <?php echo $entry['name'] ?> </td>
                            <td> <?php echo $entry['session_id'] ?> </td>
                            <td> <?php echo $entry['total_score'] ?> </td>

                        </tr> <?php } ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

<?php
include('includes/footer.php');
?>