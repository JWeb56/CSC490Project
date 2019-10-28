<?php require_once("header.php"); ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Judge Me App Judging Page</title>
</head>
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
                <li class="nav-item active ">
                    <a class="nav-link" href="judge.php">
                        <i id="icon2" class="material-icons">assignment</i>
                        <p id="p2">Judge Events</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="winners.php">
                        <i id="icon3" class="material-icons">grade</i>
                        <p id="p3">Event Winners</p>
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
                    session_start();
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
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div id="jumbotron" class="jumbotron text-center" style="background-color:grey; box-shadow: 10px 10px 5px black;">
                <h1>Create Event:</h1>
                <form>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                        <input id="#cols" type="number" class="form-control mt-1" name="colNum" min="0" placeholder="number of judging categories...">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                        <textarea id="categoryNames" type="text" class="form-control mt-1" name="categories" style="flex-wrap: wrap;" placeholder="Category Names (ex: Presentation, Time, ... ect) ..."></textarea>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <textarea id="categoryNames" type="text" class="form-control mt-1" name="categories" placeholder="Judge's for the event (ex: JohnD@uncg.edu, JaneD@uncg.edu, ... ect) ..."></textarea>
                    </div>
                    <div class="text-left mt-1">
                        <label for="example-date-input" style="color: black">Date</label>
                        <input class="form-control" type="date" value="--" id="example-date-input">
                    </div>
                    <div class="text-left mt-1">
                        <label for="example-time-input" style="color: black">Time:</label>
                        <input class="form-control" type="time" value="::" id="example-time-input">
                    </div>
                    <a type="button" class="btn btn-success">Submit</a>
                </form>

            </div>
        </div>
</body>
</html>

<?php require_once("footer.php"); ?>
