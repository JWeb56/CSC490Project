<?php require_once("header.php");
if (!isset($_SESSION['user'])) {
    header("location: ../index.php");
    exit();
}

require '../includes/db.inc.php';
$sql = "select name, session_id, total_score from participant where judge_id = ?";
$stmt = mysqli_stmt_init($connection);
mysqli_stmt_prepare($stmt, $sql);
error_log("Session UUID: " . $_SESSION['userUuid']);
mysqli_stmt_bind_param($stmt, "s", $j=$_SESSION['userUuid']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$results = array();
$session_ids = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($results, $row);
}
foreach ($results as $result) {
    array_push($session_ids, result['session_id']);
}
?>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <style>
            .jumbotron{
                margin-top: 15%;
            }
        </style>
        <title>Easy Adjudicate Winners Page</title>
    </head>
    <script>
        const person = window.localStorage.getItem("per")
        const total = window.localStorage.getItem("tot")

        function adder() {
            btn = document.createElement("A");
            btn.innerHTML = person;
            btn.className += 'list-group-item';
            btn.href = "score.php";
            document.getElementById('dynamic-div').appendChild(btn);

            if(person !== null) {
                document.getElementById('dynamic-div').style.display = 'block';
            }
        }
    </script>
    <body onload="startColor()">
    <div class="wrapper">
        <div id="sidebar" class="sidebar" data-color="purple" data-background-color="grey">
            <div class="sidebar-wrapper" style="margin-top: 25%">
                <ul class="nav">
                    <li class="nav-item ">
                        <a id="l1" class="nav-link" href="home.php">
                            <i id="icon1" class="material-icons">home</i>
                            <p id="p1">Home</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a id="l2" class="nav-link" href="judge.php">
                            <i id="icon2" class="material-icons">assignment</i>
                            <p id="p2">Judge Events</p>
                        </a>
                    </li>
                    <li class="nav-item active ">
                        <a id="l3" class="nav-link" href="evaluation.php">
                            <i id="icon3" class="material-icons">grade</i>
                            <p id="p3">Evaluations</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a id="l4" class="nav-link" href="settings.php">
                            <i id="icon4" class="material-icons">settings</i>
                            <p id="p4">Settings</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav id="navbar" class="navbar navbar-expand-lg navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="logo" style="margin-right: 7%; margin-left: 2%;">
                        <a href="home.php" class="simple-text logo-normal" style="color: black">
                            Easy
                            Adjudicate
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search Events, Users, ect ...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                    <p class="h6" style="text-transform: capitalize; display: inline-block"><?php echo $_SESSION['user']?></p>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="Profile.php">Profile</a>
                                    <a class="dropdown-item" href="settings.php">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <form action="../includes/logout.inc.php" method="post">
                                        <button class="dropdown-item" type="submit" name="logout-submit">Logout</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">
                <div id="jumbotron" class="jumbotron text-center" style="background-color:grey; box-shadow: 10px 10px 5px black;">
                    <h1>Evaluations: </h1>
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

                <div id="dynamic-div" class="list-group" style="display: none">


                    <div class="container-fluid">





                    </div>
                </div>
            </div>
    </body>
    </html>

<?php require_once("footer.php"); ?>