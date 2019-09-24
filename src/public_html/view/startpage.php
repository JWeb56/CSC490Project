<?php require_once("header.php"); ?>

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
    <title>Sign In Page</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light center" style="background-color:darkgrey;">
    <a1 class="navbar-brand h2 text-white">JMapp</a1>
</nav>
<main>
    <div class="container mt-1">
        <div class="jumbotron text-center" style="background-color:skyblue">
            <h1 class="display-4">Sign-in</h1>
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
                <a type="btn" class="btn btn-secondary mr-2" href="view/signup.php" name="create">Create Account</a>
                <button class="btn btn-success" type="submit" name="login-submit">Login</button>
            </div>   
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
<?php require_once("footer.php"); ?>