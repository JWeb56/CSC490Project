<?php
include('includes/header.php');
include('includes/navbar.php');
require '../includes/db.inc.php';
$sql = "SELECT * FROM users WHERE auth_level = 1";
$stmt = mysqli_stmt_init($connection);
mysqli_stmt_prepare($stmt, $sql);
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
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Admin Profile</h6>
                <a href="../view/admin-signup.php" class="btn btn-primary">
                    Add Admin User
                </a>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th> ID</th>
                            <th> Username</th>
                            <th>Email</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($results as $entry) { ?> <tr>
                            <td> <?php echo $entry['id'] ?> </td>
                            <td> <?php echo $entry['username'] ?> </td>
                            <td> <?php echo $entry['email'] ?> </td>

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