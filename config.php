<?php
$server = "localhost";
$user = "root";
$password = "";
$namadatabase = "data_guru01";

$db = mysqli_connect($server, $user, $password, $namadatabase);

if(!$db){
die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>