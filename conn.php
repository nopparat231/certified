<?php
session_start();



$hostname_db = "localhost";
$userid_db = "root";
$userpwd_db = "";
$db_name = "ethnics";

$conn = mysqli_connect($server, $username, $password, $db);
mysqli_set_charset($conn, 'utf8');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}