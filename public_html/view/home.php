<?php require_once("header.php");
// Prevent against back clicks after logout
if (!isset($_SESSION['user'])) {
    header("location: ../index.php");
    exit();
}
//$session_isset = isset($_SESSION['session_login']);
if (isset($_SESSION['session_login'])) {
    error_log("Session login variable is set");
}
$session_value = isset($_SESSION['session_login']) ? $_SESSION['session_login'] : "";
error_log("Session value is: " . $session_value);
?>

    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <title>Easy Adjudicate Home Page</title>
    </head>
    <script>
        const name = window.localStorage.getItem("e_name");
        const categories = window.localStorage.getItem("c_names");
        const judges = window.localStorage.getItem("j_names");
        const date = window.localStorage.getItem("d");
        const time = window.localStorage.getItem("t");
        const userCode = window.localStorage.getItem("u_code").trim();
        const code = window.localStorage.getItem("code");

        let btn, bool, bool2, g;
        temp2 = judges.trim().split(',');
        sName = "<?php echo $_SESSION['user'];?>";
        C2 = window.localStorage.getItem("creator");
        btn = document.createElement("A");
        btn.innerHTML = '<?php isset($_SESSION['session_login']) ? $_SESSION['session_login'] : "";?>';
        btn.className += 'list-group-item';
        btn.href = "event.php";
        document.getElementById('dynamic-div2').appendChild(btn);
        <?php if (isset($_SESSION['session_login'])) {
            echo "<script> document.getElementById('dynamic-div2').style.display = 'block'; </script>";
        } ?>
    </script>

    <body onload="startColor()">
    <div id="wrap" class="wrapper">
        <div id="sidebar" class="sidebar" data-color="grey" data-background-color="grey">
            <div class="sidebar-wrapper" style="margin-top: 25%">
                <ul class="nav">
                    <li class="nav-item active  ">
                        <a id="l1" class="nav-link" href="home.php">
                            <i id="icon1" class="material-icons">home</i>
                            <p id="p1">Home</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a id="l2" class="nav-link" href="Profile.php">
                            <i id="icon2" class="material-icons">person</i>
                            <p id="p2">Profile</p>
                        </a>
                    </li>
                    <li class="nav-item ">
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
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control"
                                       placeholder="Search Events, Users, ect ...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                    <p class="h6"
                                       style="text-transform: capitalize; display: inline-block"><?php echo $_SESSION['user']; ?></p>
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
            <div class="container display-block">
                <div id="jumbotron" class="jumbotron text-center" style="background-color:grey;">
                    <h1>Events to Judge:</h1>
                    <?php $displayString = isset($_SESSION['session_login']) ? "block" : "none"?>
                    <div id="dynamic-div2" class="list-group" style="display: <?php echo $displayString ?>">
                        <a class="list-group-item" href="event.php"><?php echo $_SESSION['session_login'];?></a>
                    </div>
                    <div>
                        <a type="button" class="btn btn-success" href="joinEvent.php">Join Events</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>

<?php require_once("footer.php"); ?>