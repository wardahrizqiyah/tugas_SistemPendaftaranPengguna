<?php
include_once 'koneksi.php';

$email = $_POST ['email'];
$password = $_POST ['password'];

echo $email;
echo "<br>";
echo $_password;

$login = $koneksi->query("SELECT * FROM users where email = '$email' && password = '$password'
");

if ($login) {
    session_start();
    $_SESSION['user'] = $login->fetch_assoc();

    header("Location: dashboard.php");
}
?>