<?php
//start session
session_start();
include "/opt/lampp/htdocs/form/crud/conection/koneksi.php";
//set variabel
$username = $_POST["username"];
$p = md5($_POST["password"]);
//sql query
$sql = "SELECT * fROM user WHERE username='".$username."' and
password='".$p."' lIMIT 1";
//execute query
$hasil = mysqli_query ($conn,$sql);
$jumlah = mysqli_num_rows($hasil);
//logika login
if ($jumlah>0) {
    $row = mysqli_fetch_assoc($hasil);
    $_SESSION["id_user"]=$row["id_user"];
    $_SESSION["username"]=$row["username"];
    $_SESSION["password"]=$row["admin"];
    $_SESSION["nama"]=$row["nama"];
    $_SESSION["email"]=$row["email"];
    header("Location:../datasiswa/tabel.php");
    }else {
    echo "Username atau password salah <br><a
    href='index.php'>Kembali</a>";
    }
 ?>