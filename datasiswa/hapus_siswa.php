<?php
include('/opt/lampp/htdocs/form/crud/conection/koneksi1.php');
// get id
$id = $_GET['id'];
$query = "DELETE FROM siswa WHERE id = '$id'";
if ($connection->query($query)) { 
    header("location: tabel.php");
} else {
echo "DATA GAGAL DIHAPUS !";
}
?>