<?php require_once("header.php"); ?>

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
    <title>Sign Up Page</title>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light center" style="background-color:darkgrey;">
        <a1 class="navbar-brand h2 text-white">JMapp</a1>

    </nav>

    <div class="container mt-1">
        <div class="jumbotron text-center" style="background-color:skyblue">
            <a class="btn btn-secondary previous round float-sm-right" onclick="history.back(-1)">&#8249;
                <?php
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                echo "<a href='$url'></a>";
                ?>
            </a>
            <h1 class="display-4">Sign-up</h1>
                <form action="../includes/signup.inc.php" method="post">
                    <div class="row justify-content-center mt-1">
                         <input type="text" name="user_name" placeholder="Username">
                    </div>
                    <div class="row justify-content-center mt-1">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="row justify-content-center mt-1">
                        <input type="password" name="pwd" placeholder="Password">
                    </div>
                    <div class="row justify-content-center mt-1">
                        <input type="password" name="pwd-repeat" placeholder="Re-type password">
                    </div>
                    <div class="row justify-content-center mt-1">
                        <button class="btn btn-success" type="submit" name="signup-submit">Create Account</button>
                    </div>
                </form>
        </div>
    </div>

<?php require_once("footer.php"); ?>