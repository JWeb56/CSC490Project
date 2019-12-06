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
$count = 0;
while ($row = mysqli_fetch_assoc($result)) {
    array_push($results, $row);
    $count++;
}
$_SESSION['adminCount'] = $count;

mysqli_close($connection);

require '../includes/db.inc.php';
$sql = "SELECT * FROM session";
$stmt = mysqli_stmt_init($connection);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$results = array();
$count = 0;
while ($row = mysqli_fetch_assoc($result)) {
    array_push($results, $row);
    $count++;
}
$_SESSION['sessionCount'] = $count;
?>


<!-- Main Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Admin Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <h4>Total Admin: <?php echo $_SESSION['adminCount']; ?></h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Current Number of Sessions</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php if(isset($_SESSION['sessionCount'])) echo $_SESSION['sessionCount']; else echo 0;?></div>
            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Default Number of Grading Fields:</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>









  <?php
include('includes/footer.php');
?>