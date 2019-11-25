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
        <div class="sidebar-wrapper" style="margin-top: 25%">
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
                            <input type="text" value="" class="form-control" placeholder="Search Events, Users, etc ...">
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
                                <p class="h6" style="text-transform: capitalize; display: inline-block"><?php echo $_SESSION['user'] ?></p>
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
                <h1>Create Event:</h1>
                <form>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="eventName" type="text" class="form-control mt-1" name="categories" placeholder="The name of the event ..."</input>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                        <textarea id="categoryNames" type="text" class="form-control mt-1" name="categories" style="flex-wrap: wrap;" placeholder="Category Names (ex: Presentation, Time, ... ect) ..."></textarea>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <textarea id="judgeNames" type="text" class="form-control mt-1" name="categories" placeholder="Judge's for the event (ex: JohnD@uncg.edu, JaneD@uncg.edu, ... ect) ..."></textarea>
                    </div>
                    <div class="text-left mt-1">
                        <label for="example-date-input" style="color: black">Date</label>
                        <input class="form-control" type="date" value="--" id="example-date-input">
                    </div>
                    <div class="text-left mt-1">
                        <label for="example-time-input" style="color: black">Time:</label>
                        <input class="form-control" type="time" value="::" id="example-time-input">
                    </div>
                    <a type="submit" class="btn btn-success" onclick="data()">Submit</a>
                </form>

            </div>
        </div>
</body>
</html>

<script>
    let eventName, numCols, categoryNames, judgesNames, date, time, result, characters, charactersLength, z;
    const creator = "<?php echo $_SESSION['user'];?>";
    function data(){
        eventName = document.getElementById('eventName').value;
        categoryNames = document.getElementById('categoryNames').value;
        judgesNames = document.getElementById('judgeNames').value;
        date = document.getElementById('example-date-input').value;
        time = document.getElementById('example-time-input').value;

        window.localStorage.setItem('c_names', categoryNames);
        window.localStorage.setItem('j_names', judgesNames);
        window.localStorage.setItem('d', date);
        window.localStorage.setItem('t', time);
        window.localStorage.setItem('e_name', eventName);
        window.localStorage.setItem('creator', creator);
        makeCode(7);
        document.location.href = 'displayCode.php';
    }
    function makeCode(length) {
        result           = '';
        characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        charactersLength = characters.length;
        for ( z = 0; z < length; z++ ) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        window.localStorage.setItem('code', result);
    }

</script>
<?php require_once("footer.php"); ?>
