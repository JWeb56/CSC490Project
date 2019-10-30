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
    const name = window.localStorage.getItem("e_name")
    const num = window.localStorage.getItem("num_c")
    const categories = window.localStorage.getItem("c_names")
    const judges = window.localStorage.getItem("j_names")
    const date = window.localStorage.getItem("d")
    const time = window.localStorage.getItem("t")

    let btn, temp, i, form, personArr,  paragraph, divider, divider2, input, input2, input3, input4, input5, input6, label, label2, label3, label4, label5, label6, submit;
    let person, total, selected, j;
    function adder() {

        splitter();
    }
    function splitter(){
         temp = categories.trim().split(',');

        form = document.createElement("FORM");
        form.id = 'sheet';
        document.getElementById('jumbotron').appendChild(form);

        personArr = document.createElement("INPUT");
        personArr.type = 'text';
        personArr.placeholder = 'Name / Group name...';
        personArr.id = 'person';
        document.getElementById('sheet').appendChild(personArr);

        for(i = 0; i < temp.length; i++){
            paragraph = document.createElement("P");
            paragraph.innerHTML = temp[i] + ":";
            paragraph.style.fontSize = 'xx-large';
            document.getElementById('sheet').appendChild(paragraph);

            divider = document.createElement("DIV");
            divider.id = i;
            document.getElementById('sheet').appendChild(divider);

            label = document.createElement("LABEL");
            label.for = 'zero';
            label.innerHTML = "0";
            label.style.fontSize = 'x-large';
            document.getElementById(i).appendChild(label);

            input = document.createElement("INPUT");
            input.type = 'radio';
            input.value = 0;
            input.id = 'zero';
            input.style.marginRight = '3%';
            input.className += 'check';
            document.getElementById(i).appendChild(input);

            label2 = document.createElement("LABEL");
            label2.for = 'one';
            label2.innerHTML = "1";
            label2.style.fontSize = 'x-large';
            document.getElementById(i).appendChild(label2);

            input2 = document.createElement("INPUT");
            input2.type = 'radio';
            input2.value = 1;
            input2.id = 'one';
            input2.style.marginRight = '3%';
            input2.className += 'check';
            document.getElementById(i).appendChild(input2);

            label3 = document.createElement("LABEL");
            label3.for = 'two';
            label3.innerHTML = "2";
            label3.style.fontSize = 'x-large';
            document.getElementById(i).appendChild(label3);

            input3 = document.createElement("INPUT");
            input3.type = 'radio';
            input3.value = 2;
            input3.id = 'two';
            input3.style.marginRight = '3%';
            input3.className += 'check';
            document.getElementById(i).appendChild(input3);

            label4 = document.createElement("LABEL");
            label4.for = 'three';
            label4.innerHTML = "3";
            label4.style.fontSize = 'x-large';
            document.getElementById(i).appendChild(label4);

            input4 = document.createElement("INPUT");
            input4.type = 'radio';
            input4.value = 3;
            input4.id = 'three';
            input4.style.marginRight = '3%';
            input4.className += 'check';
            document.getElementById(i).appendChild(input4);

            label5 = document.createElement("LABEL");
            label5.for = 'four';
            label5.innerHTML = "4";
            label5.style.fontSize = 'x-large';
            document.getElementById(i).appendChild(label5);

            input5 = document.createElement("INPUT");
            input5.type = 'radio';
            input5.value = 4;
            input5.id = 'four';
            input5.style.marginRight = '3%';
            input5.className += 'check';
            document.getElementById(i).appendChild(input5);

            label6 = document.createElement("LABEL");
            label6.for = 'five';
            label6.innerHTML = "5";
            label6.style.fontSize = 'x-large';
            document.getElementById(i).appendChild(label6);

            input6 = document.createElement("INPUT");
            input6.type = 'radio';
            input6.value = 5;
            input6.id = 'five';
            input6.className += 'check';
            document.getElementById(i).appendChild(input6);
        }
        divider2 = document.createElement("DIV");
        divider2.id = 'end';
        document.getElementById('jumbotron').appendChild(divider2);

        submit = document.createElement("BUTTON");
        submit.type = 'submit';
        submit.className = 'btn btn-success';
        submit.innerHTML = "Submit";
        submit.id = 'submit';
        submit.addEventListener("click", stats);
        document.getElementById('end').appendChild(submit);

        function stats(){
            person = document.getElementById('person').value;
            handleClick();
            function handleClick(){
                total = 10;
                if(input.checked === true){
                    total += input.value;
                }
                if(input2.checked === true){
                    total += input2.value;
                }
                if(input3.checked === true){
                    total += input3.value;
                }
                if(input4.checked === true){
                    total += input4.value;
                }
                if(input5.checked === true){
                    total += input5.value;
                }
                if(input6.checked === true){
                    total += input6.value;
                }
                total = total / 2;
            }
            window.localStorage.setItem('per', person);
            window.localStorage.setItem('tot', total);

            document.location.href = 'evaluation.php';
        }
    }
</script>
<body onload="startColor()">
<div class="wrapper">
    <div id="sidebar" class="sidebar" data-color="purple" data-background-color="grey">
        <div class="logo">
            <a href="home.php" class="simple-text logo-normal">
                Easy
                Adjudicate
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="home.php">
                        <i id="icon1" class="material-icons">home</i>
                        <p id="p1">Home</p>
                    </a>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link" href="judge.php">
                        <i id="icon2" class="material-icons">assignment</i>
                        <p id="p2">Judge Events</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="evaluation.php">
                        <i id="icon3" class="material-icons">grade</i>
                        <p id="p3">Evaluations</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="settings.php">
                        <i id="icon4" class="material-icons">settings</i>
                        <p id="p4">Settings</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav id="navbar" class="navbar navbar-expand-lg navbar-absolute fixed-top" style="width: 98%;margin-left: 2%;">
            <div class="container-fluid">
                <p class="h6"> Welcome
                    <?php
                    echo $_SESSION['user']
                    ?>
                </p>
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
                <h1><script>document.write(name)</script></h1>
            </div>
        </div>
</body>
</html>

<?php require_once("footer.php"); ?>
