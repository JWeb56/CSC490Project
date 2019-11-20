<?php


        $DB_HOST = "localhost";
        $DB_USER = "username";
        $DB_PASS = "password";
        $DB_NAME = "csc490project";

        $connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS) or die("Could not connect to MySQL");

        mysqli_query($connection, "CREATE DATABASE IF NOT EXISTS ${DB_NAME};");

        mysqli_change_user($connection, $DB_USER, $DB_PASS, $DB_NAME);

