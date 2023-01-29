<?php
session_start();
//include koneksi database 
include('/opt/lampp/htdocs/form/crud/conection/koneksi1.php');
//get data dari form
$nisn = $_POST['nisn']; 
$nama_lengkap = $_POST['nama_lengkap']; 
$alamat = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO siswa (nis, nama, alamat) VALUES ('$nisn', '$nama_lengkap', '$alamat')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak 
if ($connection->query($query)) {
//redirect ke halaman index.php 
header("location: tabel.php");
} else {
//pesan error gagal insert data 
echo "Data Gagal Disimpan!";
}
?>