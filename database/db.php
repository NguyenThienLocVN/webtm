<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'webtm';

$connect = mysqli_connect($server, $username, $password, $dbname);

if(!$connect){
    die("Lỗi kết nối!".mysqli_connect_error());
} else {
    echo "Kết nối thành công!";
}