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
       <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
-->
        <div class="collapse navbar-collapse justify-content-between align-items-center w-100" id="navbarSupportedContent">

            <ul class="nav navbar-nav mx-auto text-center">
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="jumbotron text-center">
            <h1 class="display-4">Create Account</h1>
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