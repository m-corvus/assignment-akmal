<?php

include('koneksi.php');

$name = $_POST['name'];
$role = $_POST['role'];
$availbility = $_POST['availbility'];
$age = $_POST['age'];
$location = $_POST['location'];
$exp = $_POST['exp'];
$email = $_POST['email'];

$sql = "update biodata set 
name='$name', 
role='$role', 
availbility='$availbility', 
age='$age', 
location='$location', 
exp='$exp', 
email='$email' 
where id=1";

$query = mysqli_query($koneksi, $sql);

if($query) {
    header('Location: portofolio.php');
} else {
    // kalau gagal tampilkan pesan
    die("Gagal menyimpan perubahan...");
}

?>