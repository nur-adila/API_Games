<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "video_games";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
