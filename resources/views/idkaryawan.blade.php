<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <title>isi form Karyawan</title>
  </head>
<body>
<!--  -->
<div class="container">
<form action="lobby.php" method="POST">
<div class="row justify-content-md-center">
  <div class="col col-lg-4">
  <h2>Input Data Karyawan</h2>
    <input type="text" name="nama" class="form-control" placeholder="Nama Depan" aria-label="" data-bs-toggle="popover" title="Masukkan Nama Depan Anda" required="">
    <br>
    <input type="text" name="namabelakang" class="form-control" placeholder="Nama Belakang" aria-label="" data-bs-toggle="popover" title="Masukkan Nama Belakang Anda" required="">
    <br>
    <input type="text" name="alamat" class="form-control" placeholder="Alamat" data-bs-toggle="popover" title="Masukkan Alamat Anda" required="">
    <br>
    <input type="email" name="email" class="form-control" placeholder="Email" data-bs-toggle="popover" title="Masukkan Email Anda" required="">
    <br>
    <input type="numeric" name="hp" class="form-control" placeholder="No.Hp" data-bs-toggle="popover" title="Masukkan No. Hp Anda" required=""> 
    <br>
    <input type="Submit" name="Daftar" value="Daftar" class="btn btn-primary" data-bs-toggle="popover" title="Masukkan Data">
    <input type="Reset" name="Clear" class="btn btn-danger" data-bs-toggle="popover" title="Hapus Data">
  </div>
</div>
</form>

<!--  -->
</div>
</body>
</html>