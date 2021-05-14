<?php
session_start();
include "../app/init.php";
$path = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . $_SERVER["PHP_SELF"];
$path = str_replace("index.php", "", $path);

define();
show($path);
$app = new App();


