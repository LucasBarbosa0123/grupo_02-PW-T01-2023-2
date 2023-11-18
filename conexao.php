<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "questoes";
$port = 3306;

$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
$mysqli = mysqli_connect($host, $user, $pass, $dbname);