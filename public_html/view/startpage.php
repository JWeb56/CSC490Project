<?php require_once("header.php"); ?>


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
    <meta charset="UTF-8">
    <meta name="description" content="CSC490 Project Grading Application">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Sign In Page</title>
</head>
<body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top">
            <div class="container-fluid">
                <p class="h6"> Easy Adjudicate</p>
            </div>
        </nav>
<main>
    <div class="container">
        <div class="jumbotron text-center" style="background-color:grey">
            <h1>Sign-in</h1>
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
</div>
</body>
</html>
<?php require_once("footer.php"); ?>