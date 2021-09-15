<?php

// include('koneksi.php');

// $sql = "select * from biodata where id=1";
// $query = mysqli_query($koneksi, $sql);

// $data = mysqli_fetch_array($query);
include('indexcontroller.php');

$data = show_data();

update_data();

// var_dump($data);
// die();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Assignment1</title>

    <link rel="stylesheet" href="assignment.css">
</head>

<body>
    <div class="topnav">
        <div class="topnav-right">
            <a href="#">Home</a>
            <a href="#">Product</a>
            <a href="#">Gallery</a>
            <a href="#">Blog</a>
            <a href="#">Inventory</a>
        </div>
    </div>

    <div class="profile">
        <div class="profile-item-1">
            <div class="avatar">
                <img class="avatar-img" src="logo.jpeg" alt="">
            </div>
            <div class="user">
                <h2 id="user-name"><?= $data['name'] ?></h3>
                    <p id="user-role"><?= $data['role'] ?></p>
                    <div class="button">
                        <button class="btn-kontak">Kontak</button>
                        <button class="btn-resume">Resume</button>
                    </div>
            </div>
        </div>
        <div class="profile-item-2">
            <table class="table-profile">
                <thead>
                    <th>
                        <tr>
                            <td class="th">Availbility</td>
                            <td class="td" id="user-availbility"><?= $data['availbility'] ?></td>
                        </tr>
                        <tr>
                            <td class="th">Usia</td>
                            <td class="td" id="user-age"><?= $data['age'] ?></td>
                        </tr>
                        <tr>
                            <td class="th">Lokasi</td>
                            <td class="td" id="user-location"><?= $data['location'] ?></td>
                        </tr>
                        <tr>
                            <td class="th">Pengalaman</td>
                            <td class="td" id="user-exp"><?= $data['exp'] ?></td>
                        </tr>
                        <tr>
                            <td class="th">Email</td>
                            <td class="td" id="user-email"><?= $data['email'] ?></td>
                        </tr>
                    </th>
                </thead>
            </table>
        </div>
    </div>
    <div class="content">
        <form method="post" id="myForm" action="<?= $_SERVER['PHP_SELF']; ?>">
            <label class="label" for="fname">Name</label>
            <input type="text" id="name" value="<?= $data['name'] ?>" name="name">

            <label class="label" for="lname">Role</label>
            <input type="text" id="role" value="<?= $data['role'] ?>" name="role">

            <label class="label" for="lname">Availbility</label>
            <input type="text" id="availbility" value="<?= $data['availbility'] ?>" name="availbility">

            <label class="label" for="lname">Age</label>
            <input type="text" id="age" value="<?= $data['age'] ?>" name="age">

            <label class="label" for="lname">Lokasi</label>
            <input type="text" id="location" value="<?= $data['location'] ?>" name="location">

            <label class="label" for="lname">Years Experince</label>
            <input type="text" id="exp" value="<?= $data['exp'] ?>" name="exp">

            <label class="label" for="lname">Email</label>
            <input type="text" id="email" value="<?= $data['email'] ?>" name="email">

            <button type="submit" name="submit" class="btn-submit">Submit</button>
        </form>
    </div>


</body>

</html>