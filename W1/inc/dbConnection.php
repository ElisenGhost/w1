<?php

require "config.php";

$infoConnect = $config["db"];
$baseURL = $config["baseURL"];

$connection = new PDO('mysql:host=' . $infoConnect["host"] . ';dbname=' . $infoConnect['dbname'] . ';charset=utf8mb4' , $infoConnect['dbusername'] , $infoConnect['dbpassword']);

$link = mysqli_connect("localhost", "root", "", "");
$link->set_charset("utf8mb4");

if (!$connection) {
    die('Error connect to DataBase');
}