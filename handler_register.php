<?php
include('koneksi.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

echo $username."<br>".$email."<br>".$password;
$simpanData = $koneksi->query("INSERT INTO users(email, username, password) values ('$email', '$username', '$password')");

if ($simpanData) {
    header("Location: login.php");
}else {
    echo "Gagal simpan Data";
}

?>