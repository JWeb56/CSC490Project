<?php require_once("header.php");
if (!isset($_SESSION['user'])) {
    header("location: ../index.php");
    exit();
}?>
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
        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #ccc;
            margin: 1em 0;
            padding: 0;
        }
    </style>
    <title>Judge Me App Winners Page</title>
</head>
<script>
    const person = window.localStorage.getItem("per");
    const total = window.localStorage.getItem("tot");
    const event = window.localStorage.getItem("e_name");
    const code = window.localStorage.getItem("code");
</script>
<body onload="startColor()">
<div class="wrapper">
    <div id="sidebar" class="sidebar" data-color="purple" data-background-color="grey">
        <div class="logo">
            <a href="home.php" class="simple-text logo-normal">
                Easy
                Adjudicate
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="home.php">
                        <i id="icon1" class="material-icons">home</i>
                        <p id="p1">Home</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="judge.php">
                        <i id="icon2" class="material-icons">assignment</i>
                        <p id="p2">Judge Events</p>
                    </a>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link" href="evaluation.php">
                        <i id="icon3" class="material-icons">grade</i>
                        <p id="p3">Evaluations</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="settings.php">
                        <i id="icon4" class="material-icons">settings</i>
                        <p id="p4">Settings</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav id="navbar" class="navbar navbar-expand-lg navbar-absolute fixed-top" style="width: 98%;margin-left: 2%;">
            <div class="container-fluid">
                <p class="h6"> Welcome
                    <?php
                    echo $_SESSION['user']
                    ?>
                </p>
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
                                    Profile
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="#">Profile</a>
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
                <h1><script>document.write(event)</script></h1>
                <hr>
                <div class="list-group mt-5">
                    <h1>Code: <script>document.write(code)</script></h1>
                </div>
            </div>
        </div>
</body>
</html>

<?php require_once("footer.php"); ?>