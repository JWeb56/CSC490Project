<?php require_once("header.php"); ?>

<!doctype html>
<html lang="en">
<head>
    <script>
        window.localStorage.getItem("s_color");
        window.localStorage.getItem("f_color");
         function startColor() {
            document.body.style.background= s_color;
            document.body.style.color= f_color;
        }
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../view/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../view/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        .jumbotron{
            margin-top: 8%;
        }
    </style>
    <title>Judge Me App Settings Page</title>
</head>
<body onload="startColor()">

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-background-color="grey" data-image="../assets/img/sidebar-1.jpg">
        <div class="logo">
            <a href="home.php" class="simple-text logo-normal">
                Easy
                Adjucate
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="home.php">
                        <i class="material-icons">home</i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="judge.php">
                        <i class="material-icons">assignment</i>
                        <p>Judge Events</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="winners.php">
                        <i class="material-icons">grade</i>
                        <p>Event Winners</p>
                    </a>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link" href="settings.php">
                        <i class="material-icons">settings</i>
                        <p>Settings</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top">
            <div class="container-fluid">
                <p class="h6"> Welcome Username</p>
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
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">
                                <i class="material-icons">home</i>
                                <p class="d-lg-none d-md-block">
                                    Home
                                </p>
                            </a>
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


<div class="container center">
    <div class="jumbotron text-center" style="background-color:grey" style>
        <h1 class="display-1">User Settings</h1>
    </div>
</div>
<div class="custom-control custom-switch" style="margin-left:17%">
    <input type="checkbox" class=" submit custom-control-input h4" id="customSwitch1" onclick="stupid()">
    <label class="custom-control-label h4" for="customSwitch1">Dark Theme</label>
</div>

<div class="custom-control custom-switch" style="margin-left:17%">
    <input type="checkbox" class="custom-control-input h4" id="customSwitch2">
    <label class="custom-control-label h4" for="customSwitch2">Invert Screen</label>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<script>
     function changeColor(color, font) {
        document.body.style.background= color;
        document.body.style.color= font;
    }
     let s_color, f_color;
     function stupid() {
        if(document.body.style.backgroundColor.valueOf() === 'black') {
            changeColor('white','black');
            window.localStorage.setItem(s_color,'white');
            window.localStorage.setItem(f_color,'black');
        } else {
            changeColor('black', 'blue');
            window.localStorage.setItem(s_color,'black');
            window.localStorage.setItem(f_color,'blue');
        }
    }

</script>
</html>

<?php require_once("footer.php"); ?>