<?php
$host = "centerbeam.proxy.rlwy.net";
$user = "root";
$pass = "PTrPrukWUwbwdMzAgUmVhMscFUsUiNlb";
$db   = "railway";
$port = "52817";

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
