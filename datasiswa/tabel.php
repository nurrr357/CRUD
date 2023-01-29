<!Doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <title>Data Siswa</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="../login/logout.php">Log Out</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">        
          <li class="nav-item">
            <a class="nav-link" href="../perpustakaan/tabel.php">Perpustakaan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" style="margin-top: 140px; margin: bottom 60px;">

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center">
            DATA SISWA
          </div>
          <div class="card-body">
            <a href="tambah_siswa.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
            <table class="table table-striped" id="myTable">
              <thead>
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">NISN</th>
                  <th scope="col">NAMA LENGKAP</th>
                  <th scope="col">ALAMAT</th>
                  <th scope="col">AKSI</th>
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
                  <td class="text-center">
                    <a href="edit_siswa.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a> <a href="hapus_siswa.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                  </td>
                </tr>
              <?php } ?>
              
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <div class="container" style="margin-top: 80px; margin: bottom 60px;">

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center">
            Saran
          </div>
          <div class="card-body text-center">
            
              <tbody>
                <p hidden><?php
                          session_start();
                          include('/opt/lampp/htdocs/form/crud/conection/koneksi1.php');
                          $no = 1;
                          $query = mysqli_query($connection, "SELECT pesan FROM `saran` WHERE no = 1 LIMIT 1;");
                          while ($row = mysqli_fetch_array($query)) {
                          ?></p>
                <tr>
                  
                  <td><?php echo $row['pesan'] ?></td>
                  </tr>
              <?php } ?>
              
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
    </div>
  </div>
                          
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
  <p></p>
</body>

</html>