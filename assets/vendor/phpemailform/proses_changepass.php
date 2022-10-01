<?php
require "conn.php";
SessionActive();
$con = GetConnection();

$currentpass = $_POST['currentpass'];
$newpass = password_hash($_POST['newpass'], PASSWORD_BCRYPT);
$confirmpass = $_POST['confirmnewpass'];

$sql2 = "SELECT * FROM users WHERE id = ?";
$hasil2 = $con->prepare($sql2);
$hasil2->execute([$_SESSION['user_id']]);

$sql = "UPDATE users SET pass = ? WHERE id = ?";

try{
    if ($row = $hasil2-> fetch()){
        if (password_verify($currentpass, $row['pass'])){
            if (password_verify($confirmpass, $newpass)){
                $hasil = $con->prepare($sql);
                $hasil->execute([$newpass, $_SESSION['user_id']]);
                header('Location: userpage.php');
            } else {
                return alert2("Password baru tidak cocok");
            }
        } else {
            return alert2(" Password lama salah");
        }
    }

} catch (Exception $e) {
    return "error";
}










