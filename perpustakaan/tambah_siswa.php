<?php session_start();?>
<!doctype html> <html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <title>Tambah Siswa</title>
</head>
<body>
<div class="container" style="margin-top: 80px">
<div class="row">
<div class="col-md-8 offset-md-2">
<div class="card">
<div class="card-header">
TAMBAH DATA
</div>
<div class="card-body"> <form action="simpan_siswa.php" method="POST">
<div class="form-group"> <label>Judul</label>
<input type="text" name="nisn" placeholder="Masukkan Judul Buku" class = "form-control">
</div>
<div class="form-group">
<label>judul Buku</label>
<input type="text" name="nama_lengkap" placeholder="Masukkan Nama
Penerbit" class="form-control">
</div>
<div class="form-group">
<label>Nama Penerbit</label>
<input type="text" name="alamat" placeholder="Masukkan Isbm" class="form-control">
</div>
<button type="submit" class="btn btn-success">SIMPAN</button> <button type="reset" class="btn btn-warning">RESET</button>
</form>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
></script>
</body>
</html>