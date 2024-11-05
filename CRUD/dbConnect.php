<?php
$serverName = "DESKTOP-1HF1HOA";
$database = "RestoranDatabase";
$uid = "";
$password = "";

$connect = array (
    "Database" => $database,
    "Uid" => $uid,
    "PWD" => $password
);

$conn = sqlsrv_connect($serverName, $connect);

if(!$conn) {
    die(print_r(sqlsrv_errors(), true));
} 
?>