<?php require_once("header.php"); ?>

<nav class="nav-header-main">
    <a href="#">
        <img src="link/to/logo.jpg" alt="logo">
    </a>
    <ul>
        <li><a href="../index.php">Home</a> </li>
        <li><a href="#">Info</a> </li>
    </ul>

</nav>

<h1>Create Account</h1>
<form action="../includes/signup.inc.php" method="post">
    <input type="text" name="user_name" placeholder="Username">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwd-repeat" placeholder="Re-type password">
    <button type="submit" name="signup-submit">Create Account</button>
</form>


<?php require_once("footer.php"); ?>