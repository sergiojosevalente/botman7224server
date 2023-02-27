<?php

$host = "localhost";
$user = "odp";
$pass = "@odp#tcel123";
$db   = "odp";

$mysqli = new mysqli($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    error_log("Error: Could not connect to database.");
    exit;
}
