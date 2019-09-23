<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .navbar-nav > li{
            padding-left:70px;
            padding-right:70px;
        }
        label{
            margin-top: 5%;
            margin-left: 25%;
        }
        a:hover {
            background-color: yellow !important;
            color: white;
        }
        .navbar.center .navbar-inner {
            text-align: center;
        }

        .navbar.center .navbar-inner .nav {
            display:inline-block;
            float: none;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="description" content="CSC490 Project Grading Application">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>CSC490 Project Grading Application</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light center" style="background-color:darkgrey;">
    <a1 class="navbar-brand h2 text-white">JMapp</a1>
    <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
-->
    <div class="collapse navbar-collapse justify-content-between align-items-center w-100" id="navbarSupportedContent">

        <ul class="nav navbar-nav mx-auto text-center">
        </ul>
    </div>
</nav>
<main>
    <div class="container">
        <div class="jumbotron text-center">
            <h1 class="display-4">Sign-in/ Sign-up</h1>
            <?php if (isset($_SESSION['user'])) { echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>';
            } else { echo '<form action="includes/login.inc.php" method="post">
            <div class="row justify-content-center">
                <input type="text" name="login_input" placeholder="Username/Email">
            </div>
            <div class="row justify-content-center mt-1">
                <input class="row justify-content-center" type="password" name="pwd" placeholder="Password">
            </div>
            <div class="row justify-content-center mt-1">
                <a type="button" class="btn btn-outline-secondary mr-2" href="view/signup.php">Create Account</a>
                <button class="btn btn-success" type="submit" name="login-submit">Login</button>
            </div>   
               <!-- <a type="button" class="btn btn-light" href="view/home.php">Home</a>-->
            </form>';
            } ?>

        </div>
    </div>
    <?php if (isset($_GET['error'])) {
        if ($_GET['error'] = "emptyfields") {
            echo '<p class="signuperror">You Must Fill In All Fields </p>';
        } else if (strpos($_GET['error'], "invalid") !== false) {
            echo '<p class="signuperror">Invalid Field Entry</p>';
        }
    } ?>
</main>
<header>
</header>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
