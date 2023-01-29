<?php
        include('/opt/lampp/htdocs/form/crud/conection/koneksi1.php');
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $nohp = $_POST['nohp'];
            $pesan = $_POST['pesan'];

            $query = "INSERT INTO saran (nama, email, nohp, pesan) VALUES ('$nama', '$email', '$nohp', '$pesan')";

            if ($connection->query($query)) {
              //redirect ke halaman index.php 
              header("location: index.php");
              } else {
              //pesan error gagal insert data 
              echo "Data Gagal Disimpan!";
              }
        }else{
          echo "gagal";
        }

        ?>