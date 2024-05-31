<?php
//connecting to db
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "autoperformance";

if(!$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
    die("failed to connect". mysqli_connect_error());
}
