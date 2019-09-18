<?php


        $DB_HOST = "localhost";
        $DB_USER = "root";
        $DB_PASS = "root";
        $DB_NAME = "CSC490Project";

        $connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS,
            $DB_NAME) or die("Could not connect to database");

