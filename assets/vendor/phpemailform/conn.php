<?php

function GetConnection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "ngombe";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}


function SessionActive()
{
    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: login.html');
    }
}

// function sessionAdmin()
// {

//     session_start();
//     if (!isset($_SESSION['role']) & $_SESSION['role'] == 'user') {

//         header('Location: userpage.php');
//     } else {
//         header('Location: adminpage.php');
//     }
// }


function alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg')
    window.location.href='../../../regist.php';</script>";
}

function alertlogin($msg)
{
    echo "<script type='text/javascript'>window.alert('$msg')
    window.location.href='../../../login.php';</script>";
}

function alert2($msg)
{
    echo "<script type='text/javascript'>alert('$msg')
    window.location.href='formchangepw.php';</script>";
}

function alertforgot($msg)
{
    echo "<script type='text/javascript'>alert('$msg')
    window.location.href='forget_pass.php';</script>";
}
