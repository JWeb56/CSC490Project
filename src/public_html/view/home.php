<?php require_once("header.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
      <!-- CSS Files -->
      <link href="../view/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link href="../view/css/demo.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <style>
          .jumbotron{
              margin-top: 15%;
          }
      </style>
    <title>Judge Me App Home Page</title>
  </head>
  <body>
  <div class="wrapper">
      <div class="sidebar" data-color="purple" data-background-color="grey" data-image="../assets/img/sidebar-1.jpg">
          <div class="logo">
              <a href="home.php" class="simple-text logo-normal">
                  Easy
                  Adjucate
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="../view/js/jquery.min.js"></script>
  <script src="../view/js/popper.min.js"></script>
  <script src="../view/js/bootstrap-material-design.min.js"></script>
  <script src="../view/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../view/js/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../view/js/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../view/js/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../view/js/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../view/js/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../view/js/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../view/js/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../view/js/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../view/js/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../view/js/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../view/js/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../view/js/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../view/js/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../view/js/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../view/js/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../view/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../view/js/demo.js"></script>

  <script>
      $(document).ready(function() {
          $().ready(function() {
              $sidebar = $('.sidebar');

              $sidebar_img_container = $sidebar.find('.sidebar-background');

              $full_page = $('.full-page');

              $sidebar_responsive = $('body > .navbar-collapse');

              window_width = $(window).width();

              fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

              if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                  if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                      $('.fixed-plugin .dropdown').addClass('open');
                  }

              }

              $('.fixed-plugin a').click(function(event) {
                  // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                  if ($(this).hasClass('switch-trigger')) {
                      if (event.stopPropagation) {
                          event.stopPropagation();
                      } else if (window.event) {
                          window.event.cancelBubble = true;
                      }
                  }
              });

              $('.fixed-plugin .active-color span').click(function() {
                  $full_page_background = $('.full-page-background');

                  $(this).siblings().removeClass('active');
                  $(this).addClass('active');

                  var new_color = $(this).data('color');

                  if ($sidebar.length != 0) {
                      $sidebar.attr('data-color', new_color);
                  }

                  if ($full_page.length != 0) {
                      $full_page.attr('filter-color', new_color);
                  }

                  if ($sidebar_responsive.length != 0) {
                      $sidebar_responsive.attr('data-color', new_color);
                  }
              });

              $('.fixed-plugin .background-color .badge').click(function() {
                  $(this).siblings().removeClass('active');
                  $(this).addClass('active');

                  var new_color = $(this).data('background-color');

                  if ($sidebar.length != 0) {
                      $sidebar.attr('data-background-color', new_color);
                  }
              });

              $('.fixed-plugin .img-holder').click(function() {
                  $full_page_background = $('.full-page-background');

                  $(this).parent('li').siblings().removeClass('active');
                  $(this).parent('li').addClass('active');


                  var new_image = $(this).find("img").attr('src');

                  if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                      $sidebar_img_container.fadeOut('fast', function() {
                          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                          $sidebar_img_container.fadeIn('fast');
                      });
                  }

                  if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                      var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                      $full_page_background.fadeOut('fast', function() {
                          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                          $full_page_background.fadeIn('fast');
                      });
                  }

                  if ($('.switch-sidebar-image input:checked').length == 0) {
                      var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                      var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                      $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                      $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                  }

                  if ($sidebar_responsive.length != 0) {
                      $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                  }
              });

              $('.switch-sidebar-image input').change(function() {
                  $full_page_background = $('.full-page-background');

                  $input = $(this);

                  if ($input.is(':checked')) {
                      if ($sidebar_img_container.length != 0) {
                          $sidebar_img_container.fadeIn('fast');
                          $sidebar.attr('data-image', '#');
                      }

                      if ($full_page_background.length != 0) {
                          $full_page_background.fadeIn('fast');
                          $full_page.attr('data-image', '#');
                      }

                      background_image = true;
                  } else {
                      if ($sidebar_img_container.length != 0) {
                          $sidebar.removeAttr('data-image');
                          $sidebar_img_container.fadeOut('fast');
                      }

                      if ($full_page_background.length != 0) {
                          $full_page.removeAttr('data-image', '#');
                          $full_page_background.fadeOut('fast');
                      }

                      background_image = false;
                  }
              });

              $('.switch-sidebar-mini input').change(function() {
                  $body = $('body');

                  $input = $(this);

                  if (md.misc.sidebar_mini_active == true) {
                      $('body').removeClass('sidebar-mini');
                      md.misc.sidebar_mini_active = false;

                      $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                  } else {

                      $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                      setTimeout(function() {
                          $('body').addClass('sidebar-mini');

                          md.misc.sidebar_mini_active = true;
                      }, 300);
                  }

                  // we simulate the window Resize so the charts will get updated in realtime.
                  var simulateWindowResize = setInterval(function() {
                      window.dispatchEvent(new Event('resize'));
                  }, 180);

                  // we stop the simulation of Window Resize after the animations are completed
                  setTimeout(function() {
                      clearInterval(simulateWindowResize);
                  }, 1000);

              });
          });
      });
  </script>
  <script>
      $(document).ready(function() {
          // Javascript method's body can be found in assets/js/demos.js
          md.initDashboardPageCharts();

      });
  </script>


  </body>
</html>

<?php require_once("footer.php"); ?>