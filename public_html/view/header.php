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
    }
    html {
        height: 100%;
    }

    body {
        height: 100%;
        margin: 0;
        overflow: hidden;
        background: linear-gradient(to bottom, grey, black);
    }

    .rain {
        position: absolute;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -2;
    }

    .rain.back-row {
        display: none;
        z-index: -1;
        bottom: 60px;
        opacity: 0.5;
    }

    body.back-row-toggle .rain.back-row {
        display: block;
    }

    .drop {
        position: absolute;
        bottom: 100%;
        width: 15px;
        height: 120px;
        pointer-events: none;
        animation: drop 0.5s linear infinite;
    }

    @keyframes drop {
        0% {
            transform: translateY(0vh);
        }
        75% {
            transform: translateY(90vh);
        }
        100% {
            transform: translateY(90vh);
        }
    }

    .stem {
        width: 1px;
        height: 60%;
        margin-left: 7px;
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.25));
        animation: stem 0.5s linear infinite;
    }

    @keyframes stem {
        0% {
            opacity: 1;
        }
        65% {
            opacity: 1;
        }
        75% {
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }

    .splat {
        width: 15px;
        height: 10px;
        border-top: 2px dotted rgba(255, 255, 255, 0.5);
        border-radius: 50%;
        opacity: 1;
        transform: scale(0);
        animation: splat 0.5s linear infinite;
        display: none;
    }

    body.splat-toggle .splat {
        display: block;
    }

    @keyframes splat {
        0% {
            opacity: 1;
            transform: scale(0);
        }
        80% {
            opacity: 1;
            transform: scale(0);
        }
        90% {
            opacity: 0.5;
            transform: scale(1);
        }
        100% {
            opacity: 0;
            transform: scale(1.5);
        }
    }

    .toggles {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 3;
    }

    .toggle {
        position: absolute;
        left: 20px;
        width: 50px;
        height: 50px;
        line-height: 51px;
        box-sizing: border-box;
        text-align: center;
        font-family: sans-serif;
        font-size: 10px;
        font-weight: bold;
        background-color: rgba(255, 255, 255, 0.2);
        color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .toggle:hover {
        background-color: rgba(255, 255, 255, 0.25);
    }

    .toggle:active {
        background-color: rgba(255, 255, 255, 0.3);
    }

    .toggle.active {
        background-color: rgba(255, 255, 255, 0.4);
    }

    .splat-toggle {
        top: 20px;
    }

    .back-row-toggle {
        top: 90px;
        line-height: 12px;
        padding-top: 14px;
    }

    .single-toggle {
        top: 160px;
    }

    body.single-toggle .drop {
        display: none;
    }

    body.single-toggle .drop:nth-child(10) {
        display: block;
    }
</style>
<script>
    function startColor() {

        const standard_color = window.localStorage.getItem("s_color")
        const font_color = window.localStorage.getItem("f_color")

        const paragraph_color = window.localStorage.getItem("p_color")
        const icon_color = window.localStorage.getItem("i_color")
        const nav_color = window.localStorage.getItem("nav_color")
        const nav_back = window.localStorage.getItem("nav_back")
        const side_color = window.localStorage.getItem("side_color")
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

        nav.style.color = nav_color;
        nav.style.backgroundColor = nav_back;
        sidebar.style.backgroundColor = side_color;
        sidebar.style.boxShadow = side_bs;
        icon.style.color = icon_color;
        icon2.style.color = icon_color;
        icon3.style.color = icon_color;
        icon4.style.color = icon_color;
        p.style.color = paragraph_color;
        p2.style.color = paragraph_color;
        p3.style.color = paragraph_color;
        p4.style.color = paragraph_color;
        jumbo.style.boxShadow = jumbo_bs;

        adder();
    }

</script>
