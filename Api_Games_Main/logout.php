<?php
session_start();
$_SESSION['username'] = '';

session_unset();
session_destroy();
header("Location: login.php");