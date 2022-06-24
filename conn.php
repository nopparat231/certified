<?php
session_start();

$url = parse_url("mysql://ba98fb408a6675:c06ed440@us-cdbr-east-05.cleardb.net/heroku_4553c8b8795a2be?reconnect=true");
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

// $hostname_db = "localhost";
// $userid_db = "root";
// $userpwd_db = "2411";
// $db_name = "ethnics";

$conn = mysqli_connect($server, $username, $password, $db);
mysqli_set_charset($conn, 'utf8');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}