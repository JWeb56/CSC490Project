<?php require_once("header.php");
if (!isset($_SESSION['user'])) {
    header("location: ../index.php");
    exit();
}?>

    <script>
        const name = window.localStorage.getItem("e_name")
        const num = window.localStorage.getItem("num_c")
        const categories = window.localStorage.getItem("c_names")
        const judges = window.localStorage.getItem("j_names")
        const date = window.localStorage.getItem("d")
        const time = window.localStorage.getItem("t")
        const userCode = window.localStorage.getItem("u_code");
        const code = window.localStorage.getItem("code");

        let btn;
        function adder() {
            btn = document.createElement("A");
            btn.innerHTML = name;
            btn.className += 'list-group-item';
            btn.href = "event.php";
            document.getElementById('dynamic-div2').appendChild(btn);

            if(userCode === code && name !== null) {
                document.getElementById('dynamic-div2').style.display = 'block';
            }
        }
    </script>
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
                    <h1>Events to Judge:</h1>
                    <div id="dynamic-div2" class="list-group" style="display: none">
                    </div>
                    <a type="button" class="btn btn-warning" href="createEvent.php">Create Event</a>
                    <a type="button" class="btn btn-success" href="createdEvents.php">Created Events</a>
                    <a type="button" class="btn btn-success" href="joinEvent.php">Join Events</a>
                </div>
            </div>
    </body>
    </html>

<?php require_once("footer.php"); ?>