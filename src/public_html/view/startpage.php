<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="CSC490 Project Grading Application">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>CSC490 Project Grading Application</title>
</head>
<body>
<main>
    <?php if (isset($_GET['error'])) {
        if ($_GET['error'] = "emptyfields") {
            echo '<p class="signuperror">You Must Fill In All Fields </p>';
        } else if (strpos($_GET['error'], "invalid") !== false) {
            echo '<p class="signuperror">Invalid Field Entry</p>';
        }
    } ?>
</main>
<header>
    <nav class="nav-header-main">
        <a href="#">
            <img src="link/to/logo.jpg" alt="logo">
        </a>
        <ul>
            <li><a href="#">Home</a> </li>
            <li><a href="view/signup.php">Create Account</a> </li>
            <li><a href="#">Info</a> </li>
        </ul>
        <div>
            <?php if (isset($_SESSION['user'])) { echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>';
            } else { echo '<form action="includes/login.inc.php" method="post">
                <input type="text" name="login_input" placeholder="Username/Email">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login-submit">Login</button>
            </form>';
             } ?>
        </div>
    </nav>
</header>
</body>

</html>
