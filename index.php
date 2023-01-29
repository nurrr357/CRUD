<!Doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Data Siswa</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="./login/index.php">Sign In</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <div class="container" style="margin-top: 140px; margin: bottom 60px;">

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-left">
            DATA SISWA
          </div>
          <div class="card-body">
            <a hidden href="tambah_siswa.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
            <table class="table table-striped" id="myTable">
              <thead>
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">NISN</th>
                  <th scope="col">NAMA LENGKAP</th>
                  <th scope="col">ALAMAT</th>
                  <!-- <th scope="col">AKSI</th> -->
                </tr>
              </thead>
              <tbody>
                <p hidden><?php
                          session_start();
                          include('/opt/lampp/htdocs/form/crud/conection/koneksi1.php');
                          $no = 1;
                          $query = mysqli_query($connection, "SELECT * FROM siswa");
                          while ($row = mysqli_fetch_array($query)) {
                          ?></p>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row['nis'] ?></td>
                  <td><?php echo $row['nama'] ?></td>
                  <td><?php echo $row['alamat'] ?></td>
                  <!-- <td class="text-center">
                    <a hidden href="edit_siswa.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a> <a hidden href="hapus_siswa.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                  </td> -->
                </tr>
              <?php } ?>
              <a hidden href="logout.php" class="btn btn-md btn-danger" style="margin-bottom: 10px">LOG OUT</a>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script> -->
  </div>
  <div class="container" style="margin-top: 60px; margin: bottom 60px;">

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-left">
            DATA perpustakaan
          </div>
          <div class="card-body">
            <a hidden href="tambah_siswa.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
            <table class="table table-striped" id="myTable">
              <thead>
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">JUDUL</th>
                  <th scope="col">PENERBIT</th>
                  <th scope="col">ISBM</th>
                  <!-- <th scope="col">AKSI</th> -->
                </tr>
              </thead>
              <tbody>
                <p hidden><?php
                          session_start();
                          include('/opt/lampp/htdocs/form/crud/conection/koneksi1.php');
                          $no = 1;
                          $query = mysqli_query($connection, "SELECT * FROM perpustakaan");
                          while ($row = mysqli_fetch_array($query)) {
                          ?></p>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row['judul'] ?></td>
                  <td><?php echo $row['penerbit'] ?></td>
                  <td><?php echo $row['isbm'] ?></td>
                  <!-- <td class="text-center">
                    <a hidden href="edit_siswa.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a> <a hidden href="hapus_siswa.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                  </td> -->
                </tr>
              <?php } ?>
              <a hidden href="logout.php" class="btn btn-md btn-danger" style="margin-bottom: 10px">LOG OUT</a>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top: 60px; margin: bottom 60px;">

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center">
            Register
          </div>
          <div class="card-body text-left">
          

        <form method="post" action="saran.php">
        <div class="card-body text-center">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" id="nama" name="nama" required></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" id="email" name="email" required></td>
          </tr>
          <tr>
            <td>No. HP</td>
            <td>:</td>
            <td><input type="tel" id="nohp" name="nohp" required><br></td>
          </tr>
          <tr>
        </div>  
        <div class="card-body text-center ">
        <tr >
            <td>Pesan</td>
            <td>:</td>
            <td><textarea id="pesan" name="pesan" required></textarea></td><br>
            <input type="submit" name="submit" value="Kirim">
          </tr>
        
        </div>
            
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p></p>
</body>

</html>