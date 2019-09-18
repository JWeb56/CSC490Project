<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="CSC490 Project Grading Application">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>CSC490 Project Grading Application</title>
</head>
<body>
<header>
    <nav class="nav-header-main">
        <a href="#">
            <img src="link/to/logo.jpg" alt="logo">
        </a>
        <ul>
            <li><a href="#">Home</a> </li>
            <li><a href="signup.php">Create Account</a> </li>
            <li><a href="#">Info</a> </li>
        </ul>
        <div>
            <form action="includes/login.php" method="post">
                <input type="text" name="login_input" placeholder="Username/Email">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Sign Up</a>
            <form action="includes/logout.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>
        </div>
    </nav>
</header>
</body>
</html>
