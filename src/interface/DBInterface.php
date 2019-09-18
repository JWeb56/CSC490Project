<?php

class DBInterface {

    /**
     * Connect to the CSC490Project database
     */
    public static function connect() {
        $DB_HOST = "localhost";
        $DB_USER = "username";
        $DB_PASS = "password";
        $DB_TABLE = "csc490project";

        $connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS,
            $DB_TABLE) or die("Could not connect to database");

        $query = "SELECT * FROM account";

        $result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr><td>".$row["Fname"]."</td><td>".$row["Mint"]."</td><td>"
                .$row["Lname"]."</td><td>".$row["dob"]."</td><td>"
                .$row["ssn"]."</td></tr>";
        }
    }

    public static function save($object) {

    }


}
