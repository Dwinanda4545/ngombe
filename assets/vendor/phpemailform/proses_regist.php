<?php


require "conn.php";

ValidateName($_POST['daftarname'], $_POST['daftaremail'], $_POST['daftarpass'], $_POST['daftarnotelp'], $_POST['daftarrole']);



function ValidateName($daftarname, $daftaremail,  $daftarpass, $daftarnotelp, $daftarrole)
{


    try {
        $con = GetConnection();

        $query = "SELECT * FROM  users WHERE email like ?";

        $result = $con->prepare($query);
        $result->execute([$daftaremail]);

        $row = $result->fetch();


        if ($row['email'] != null && $row['email'] == $daftaremail) {

            return alert("Email telah terpakai");
        } else {

            if (isset($daftarrole) && $daftarrole == 'SEMANGATKERJA_ADMIN') {
                $daftarrole = 'admin';
            } else {
                $daftarrole = 'user';
            }

            $daftarpass =  password_hash($_POST['daftarpass'], PASSWORD_BCRYPT);

            $conn = GetConnection();

            $sql =  "INSERT INTO users ( username , email, pass, no_telp, role) VALUES (?,?,?,?,?)";
            $result = $conn->prepare($sql);

            $result->execute([$daftarname, $daftaremail,  $daftarpass, $daftarnotelp, $daftarrole]);

            header('Location: ../../../login.php');
        }
    } catch (Exception $e) {
        return "error";
    }
}
