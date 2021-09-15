<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_sesi10';

$koneksi = mysqli_connect($host, $username, $password, $database);

if( !$koneksi ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>