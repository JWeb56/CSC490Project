<?php
include('includes/header.php');
include('includes/navbar.php');
require '../includes/db.inc.php';
$sql = "SELECT * FROM session WHERE active = 1";
$stmt = mysqli_stmt_init($connection);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$results = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($results, $row);
}
?>


    <!-- Main Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Current Sessions in Progess</h1>
        </div>

    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">


            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th> ID</th>
                            <th> Event Name</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($results as $entry) { ?> <tr>
                            <td> <?php echo $entry['id'] ?> </td>
                            <td> <?php echo $entry['event_name'] ?> </td>
                            <td> <form action="../includes/end-session.inc.php" method="post">
                                    <input type="hidden" name="delete-id" value="<?php echo $entry['uuid']; ?>"/>
                                    <input type="hidden" name="delete-name" value="<?php echo $entry['event_name']; ?>"/>
                                    <button class="btn btn-success" type="submit" name="endSession-submit">End Session and Evaluate</button>
                                </form></td>

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