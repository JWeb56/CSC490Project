<?php require_once("header.php"); ?>

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
    <title>Sign Up Page</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top">
        <div class="container-fluid">
            <p class="h6"> Easy Adjudicate</p>
        </div>
    </nav>

    <div class="container mt-1">
        <div class="jumbotron text-center" style="background-color:grey">
            <a class="btn btn-secondary previous round float-sm-right" onclick="history.back(-1)">&#8249;
                <?php
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                echo "<a href='$url'></a>";
                ?>
            </a>
            <h1 class="display-4">Add new Admin</h1>
            <form action="../includes/admin-signup.inc.php" method="post">
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
    </div>
    </div>
    </body>
<?php require_once("footer.php"); ?>