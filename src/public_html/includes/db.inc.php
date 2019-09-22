<?php


        $DB_HOST = "localhost";
        $DB_USER = "root";
        $DB_PASS = "root";
        $DB_NAME = "csc490project";

        $connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS) or die("Could not connect to MySQL");

        mysqli_query($connection, "CREATE DATABASE IF NOT EXISTS ${DB_NAME};");

        mysqli_change_user($connection, $DB_USER, $DB_PASS, $DB_NAME);

        mysqli_query($connection, "
            CREATE TABLE IF NOT EXISTS users (
                id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                uuid VARCHAR(32), 
                username VARCHAR(32), 
                password VARCHAR(128), 
                email VARCHAR(32), 
                auth_level INT(11)
            );
        ");

