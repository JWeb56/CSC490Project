<?php require_once("header.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Judge Me App Home Page</title>
  </head>
  <body onload="startColor()">
  <div class="wrapper">
      <div class="sidebar" data-color="purple" data-background-color="grey" data-image="../assets/img/sidebar-1.jpg">
          <div class="logo">
              <a href="home.php" class="simple-text logo-normal">
                  Easy
                  Adjudicate
              </a>
          </div>
          <div class="sidebar-wrapper">
              <ul class="nav">
                  <li class="nav-item active  ">
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
                  <li class="nav-item ">
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
  <div class="container display-block">
		<div class="jumbotron text-center" style="background-color:grey">
		  <h1>About the App:</h1>
		  <article>
			This App will allow you to judge things...
		  </article>
		</div>
  </div>
      </div>
  </div>
  </body>
</html>

<?php require_once("footer.php"); ?>