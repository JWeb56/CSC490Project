
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


  <script src="../view/js/bootstrap-material-design.min.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../view/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>

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
<script>
    function changeColor(color, font) {
        document.body.style.background= color;
        document.body.style.color= font;

    }
    let s_color, f_color, nav, sidebar, icon, icon2, icon3, icon4, p, p2, p3, p4, jumbo;

    function stupid() {
        nav = document.getElementById('navbar');
        sidebar = document.getElementById('sidebar');
        icon = document.getElementById('icon1');
        icon2 = document.getElementById('icon2');
        icon3 = document.getElementById('icon3');
        icon4 = document.getElementById('icon4');
        p = document.getElementById('p1');
        p2 = document.getElementById('p2');
        p3 = document.getElementById('p3');
        p4 = document.getElementById('p4');
        jumbo = document.getElementById('jumbotron');
        if(document.body.style.backgroundColor.valueOf() === 'black') {
            changeColor('linear-gradient(to bottom, grey, black)','white');
            nav.style.backgroundColor = "white";
            nav.style.color = "grey";
            sidebar.style.backgroundColor = "white";
            sidebar.style.boxShadow= '10px 10px 5px black';
            icon.style.color = "black";
            icon2.style.color = "black";
            icon3.style.color = "black";
            icon4.style.color = "black";
            p.style.color = 'black';
            p2.style.color = 'black';
            p3.style.color = 'black';
            p4.style.color = 'black';
            jumbo.style.boxShadow = '10px 10px 5px black';
            window.localStorage.setItem('s_color','linear-gradient(to bottom, grey, black)');
            window.localStorage.setItem('f_color','white');
            window.localStorage.setItem('p_color', 'black');
            window.localStorage.setItem('i_color', 'black');
            window.localStorage.setItem('side_color', 'white');
            window.localStorage.setItem('side_bs', '10px 10px 5px black');
            window.localStorage.setItem('jumbo_bs', '10px 10px 5px black');
            window.localStorage.setItem('nav_color', 'grey');
            window.localStorage.setItem('nav_back', 'white');
        } else {
            changeColor('black', 'darkorange');
            nav.style.backgroundColor = "grey";
            nav.style.color = "white";
            sidebar.style.backgroundColor = "grey";
            sidebar.style.boxShadow= '10px 10px 5px orange';
            icon.style.color = "white";
            icon2.style.color = "white";
            icon3.style.color = "white";
            icon4.style.color = "white";
            p.style.color = 'white';
            p2.style.color = 'white';
            p3.style.color = 'white';
            p4.style.color = 'white';
            jumbo.style.boxShadow= '10px 10px 5px orange';
            window.localStorage.setItem('s_color','black');
            window.localStorage.setItem('f_color','darkorange');
            window.localStorage.setItem('p_color', 'white');
            window.localStorage.setItem('i_color', 'white');
            window.localStorage.setItem('side_color', 'grey');
            window.localStorage.setItem('side_bs', '10px 10px 5px orange');
            window.localStorage.setItem('jumbo_bs', '10px 10px 5px orange');
            window.localStorage.setItem('nav_color', 'white');
            window.localStorage.setItem('nav_back', 'grey');

        }
    }
    $(function(){
        var test = localStorage.input === 'true'? true: false;
        $('input').prop('checked', test || false);
    });
    $('input').on('change', function() {
        localStorage.input = $(this).is(':checked');
        console.log($(this).is(':checked'));
    });

</script>