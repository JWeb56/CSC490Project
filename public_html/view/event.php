<?php require_once("header.php"); ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Judge Me App Judging Page</title>
</head>
<script>
    const name = window.localStorage.getItem("e_name");
    const categories = window.localStorage.getItem("c_names");
    const judges = window.localStorage.getItem("j_names");
    const date = window.localStorage.getItem("d");
    const time = window.localStorage.getItem("t");

    let btn, temp, i, c, z, form, personArr,  paragraph, divider, divider2, input, input2, input3, input4, input5, input6, label, label2, label3, label4, label5, label6, submit;
    let person, total, selected, j, f_total, static_cat, k;
    static_cat = "Creativity, Time, Delivery, Organization, Effectiveness";
    function adder() {

        splitter();
    }
    function splitter(){
         temp = static_cat.trim().split(',');

        personArr = document.createElement("INPUT");
        personArr.type = 'text';
        personArr.placeholder = 'Name / Group name...';
        personArr.id = 'person';
        document.getElementById('sheet').appendChild(personArr);

        c = temp.length;
        k = 0;

        for(i = 0; i < temp.length; i++){
            paragraph = document.createElement("P");
            paragraph.innerHTML = temp[i] + ":";
            paragraph.style.fontSize = 'xx-large';
            document.getElementById('sheet').appendChild(paragraph);

            divider = document.createElement("DIV");
            divider.id = i;
            document.getElementById('sheet').appendChild(divider);

            label = document.createElement("LABEL");
            label.for = c;
            label.innerHTML = "0";
            label.style.fontSize = 'x-large';
            document.getElementById(i).appendChild(label);

            input = document.createElement("INPUT");
            input.type = 'radio';
            input.value = 0;
            input.id = c;
            input.name = k;
            input.style.marginRight = '3%';
            input.className += 'check';
            document.getElementById(i).appendChild(input);

            c++;

            label2 = document.createElement("LABEL");
            label2.for = c;
            label2.innerHTML = "1";
            label2.style.fontSize = 'x-large';
            document.getElementById(i).appendChild(label2);

            input2 = document.createElement("INPUT");
            input2.type = 'radio';
            input2.value = 1;
            input2.id = c;
            input2.name = k;
            input2.style.marginRight = '3%';
            input2.className += 'check';
            document.getElementById(i).appendChild(input2);

            c++;

            label3 = document.createElement("LABEL");
            label3.for = c;
            label3.innerHTML = "2";
            label3.style.fontSize = 'x-large';
            document.getElementById(i).appendChild(label3);

            input3 = document.createElement("INPUT");
            input3.type = 'radio';
            input3.value = 2;
            input3.id = c;
            input3.name = k;
            input3.style.marginRight = '3%';
            input3.className += 'check';
            document.getElementById(i).appendChild(input3);

            c++;

            label4 = document.createElement("LABEL");
            label4.for = c;
            label4.innerHTML = "3";
            label4.style.fontSize = 'x-large';
            document.getElementById(i).appendChild(label4);

            input4 = document.createElement("INPUT");
            input4.type = 'radio';
            input4.value = 3;
            input4.id = c;
            input4.name = k;
            input4.style.marginRight = '3%';
            input4.className += 'check';
            document.getElementById(i).appendChild(input4);

            c++;

            label5 = document.createElement("LABEL");
            label5.for = c;
            label5.innerHTML = "4";
            label5.style.fontSize = 'x-large';
            document.getElementById(i).appendChild(label5);

            input5 = document.createElement("INPUT");
            input5.type = 'radio';
            input5.value = 4;
            input5.id = c;
            input5.name = k;
            input5.style.marginRight = '3%';
            input5.className += 'check';
            document.getElementById(i).appendChild(input5);

            c++;

            label6 = document.createElement("LABEL");
            label6.for = c;
            label6.innerHTML = "5";
            label6.style.fontSize = 'x-large';
            document.getElementById(i).appendChild(label6);

            input6 = document.createElement("INPUT");
            input6.type = 'radio';
            input6.value = 5;
            input6.id = c;
            input6.name = k;
            input6.className += 'check';
            document.getElementById(i).appendChild(input6);

            c++;
            k++;
        }
        divider2 = document.createElement("DIV");
        divider2.id = 'end';
        document.getElementById('jumbotron').appendChild(divider2);

        submit = document.createElement("BUTTON");
        submit.type = 'submit';
        submit.className = 'btn btn-success';
        submit.innerHTML = "Submit";
        submit.id = 'submit';
        submit.name = 'judgeParticipants-submit';
        submit.addEventListener("click", start);
        document.getElementById('sheet').appendChild(submit);

        function start(){
                var check = true;
                $("input:radio").each(function(){
                    var name = $(this).attr("name");
                    if($("input:radio[name="+name+"]:checked").length == 0){
                        check = false;
                    }
                });

                if(check){
                    stats();
                }else{
                    alert('Please select one option in each question.');
                    window.location.href = "event.php";
                }
        }

        function stats(){
            person = document.getElementById('person').value;
            handleClick();
            function handleClick(){
                total = 0;
               for(z = temp.length; z <= c - 1; z++){
                   selected = document.getElementById(z);
                   if(selected.checked === true){
                       total += parseInt(selected.value);
                   }
               }
                f_total= total / (c - (temp.length * 2));
               f_total = Math.ceil(f_total * 100);
            }
            <?php ?>
            window.localStorage.setItem('per', person);
            window.localStorage.setItem('tot', f_total);
            document.getElementById("name").value = person;
            document.getElementById("total").value = f_total;
            <?php //require ('../includes/judge-participant.inc.php'); ?>
        }
    }
</script>
<body onload="startColor()">
<div class="wrapper">
    <div id="sidebar" class="sidebar" data-color="purple" data-background-color="grey">
        <div class="sidebar-wrapper" style="margin-top: 25%">
            <ul class="nav">
                <li class="nav-item ">
                    <a id="l1" class="nav-link" href="home.php">
                        <i id="icon1" class="material-icons">home</i>
                        <p id="p1">Home</p>
                    </a>
                </li>
                <li class="nav-item active ">
                    <a id="l2" class="nav-link" href="Profile.php">
                        <i id="icon2" class="material-icons">person</i>
                        <p id="p2">Profile</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a id="l3" class="nav-link" href="evaluation.php">
                        <i id="icon3" class="material-icons">grade</i>
                        <p id="p3">Evaluations</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a id="l4" class="nav-link" href="settings.php">
                        <i id="icon4" class="material-icons">settings</i>
                        <p id="p4">Settings</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav id="navbar" class="navbar navbar-expand-lg navbar-absolute fixed-top">
            <div class="container-fluid">
                <div class="logo" style="margin-right: 7%; margin-left: 2%;">
                    <a href="home.php" class="simple-text logo-normal" style="color: black">
                        Easy
                        Adjudicate
                    </a>
                </div>
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
                                <p class="h6" style="text-transform: capitalize; display: inline-block"><?php echo $_SESSION['user'] ?></p>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="Profile.php">Profile</a>
                                <a class="dropdown-item" href="settings.php">Settings</a>
                                <div class="dropdown-divider"></div>
                                <form action="../includes/logout.inc.php" method="post">
                                    <button class="dropdown-item" type="submit" name="logout-submit">Logout</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div id="jumbotron" class="jumbotron text-center" style="background-color:grey; box-shadow: 10px 10px 5px black;">
                <h1><?php echo $_SESSION['session_login'];?></h1>
                <form id="sheet" method="post" action="../includes/judge-participant.inc.php">
                    <input id="name" type="hidden" class="form-control mt-1" name="name" >
                    <input id="total" type="hidden" class="form-control mt-1" name="total" >
                </form>
            </div>
        </div>
</body>
<script>
    (function($) {
        $.fn.uncheckableRadio = function() {
            var $root = this;
            $root.each(function() {
                var $radio = $(this);
                if ($radio.prop('checked')) {
                    $radio.data('checked', true);
                } else {
                    $radio.data('checked', false);
                }

                $radio.click(function() {
                    var $this = $(this);
                    if ($this.data('checked')) {
                        $this.prop('checked', false);
                        $this.data('checked', false);
                        $this.trigger('change');
                    } else {
                        $this.data('checked', true);
                        $this.closest('form').find('[name="' + $this.prop('name') + '"]').not($this).data('checked', false);
                    }
                });
            });
            return $root;
        };
    }(jQuery));

    $('[type=radio]').uncheckableRadio();
    $('button').click(function() {
        $('[value=V2]').prop('checked', true).trigger('change').trigger('click');
    });
</script>
</html>

<?php require_once("footer.php"); ?>
