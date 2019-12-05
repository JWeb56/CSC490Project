<?php session_start();
?>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<!-- CSS Files -->
<link href="../view/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<style>
    .jumbotron {
        margin-top: 15%;
        box-shadow: 10px 10px 5px black;
        width: 60%;
        margin-left: 20%;
    }

    body {
        height: 100%;
        margin: 0;
        background: linear-gradient(to bottom, grey, black);
    }

</style>
<script>
    function startColor() {

        const standard_color = window.localStorage.getItem("s_color")
        const font_color = window.localStorage.getItem("f_color")

        const side_bs = window.localStorage.getItem("side_bs")
        const jumbo_bs = window.localStorage.getItem("jumbo_bs")

        document.body.style.background = standard_color;
        document.body.style.color = font_color;

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
        link1 = document.getElementById('l1');
        link2 = document.getElementById('l2');
        link3 = document.getElementById('l3');
        link4 = document.getElementById('l4');

        link1.style.boxShadow = side_bs;
        link2.style.boxShadow = side_bs;
        link3.style.boxShadow = side_bs;
        link4.style.boxShadow = side_bs;
        jumbo.style.boxShadow = jumbo_bs;

        adder();
    }

</script>

