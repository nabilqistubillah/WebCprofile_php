<?php
$host   ="localhost";
$user   ="root";
$pass   ="";
$db     ="profilecompany";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi){
    die("tidak terkoneksi");
}else{
    echo "";
}