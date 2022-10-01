<?php

require "conn.php";
$con = GetConnection();
SessionActive();

$user_id = $_SESSION['user_id'];

$username = $_POST['username'];
$email = $_POST['email'];
$notelp = $_POST['no_telp'];

$sql = "UPDATE users SET username= ? ,email = ? , no_telp = ? WHERE id = ?;";


$hasil = $con->prepare($sql);
$hasil->execute([$username, $email, $notelp, $user_id]);
// alert($pesan_id);
header("Location: userpage.php");
