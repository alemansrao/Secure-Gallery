<?php
if ($_SERVER['SERVER_SOFTWARE'] == "Apache/2.4.41 (Win64) OpenSSL/1.1.1c PHP/7.3.11") {
    //local machine
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'aleman');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'id11562170_attendance_database');
    /* Attempt to connect to MySQL database */
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
} else {
    //remote machine
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'id11562170_alemansrao');
    define('DB_PASSWORD', 's2~K<<>W5?Nr?Iqx');
    define('DB_NAME', 'id11562170_attendance_database');
    /* Attempt to connect to MySQL database */
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
}
