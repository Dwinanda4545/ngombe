<?php

require "conn.php";
$con = GetConnection();

// $idpesanan = $_POST['pesan_id'];
$pickup = $_POST['update_pickup'];
$pemb = $_POST['update_pemb'];

$sql = "UPDATE tbl_pesan SET pemb_status= ? ,pickup_status = ? WHERE pesan_id = ?;";


$hasil = $con->prepare($sql);
$hasil->execute([$pemb, $pickup,  $_POST['idpesanan']]);
// alert($pesan_id);
header("Location: adminpage.php");
