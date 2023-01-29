<?php
session_start();
//include koneksi database 
include('/opt/lampp/htdocs/form/crud/conection/koneksi1.php');
// get data dari form
$id     = $_POST['id'];
$nis         = $_POST['nis'];
$nama = $_POST['nama']; 
$alamat       = $_POST['alamat']; 
//query update data ke dalam database berdasarkan ID 
$query = "UPDATE perpustakaan SET judul = '$nis', penerbit = '$nama', isbm = 
'$alamat' WHERE id = '$id '";
//kondisi pengecekan apakah data berhasil diupdate atau tidak 
if ($connection->query($query)) {
//redirect ke halaman index.php 
header ("location: tabel.php");
} else {
//pesan error gagal update data
echo "Data Gagal Diupate!". mysqli_connect_error();
}
?>