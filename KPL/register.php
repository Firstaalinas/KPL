<?php
include "koneksi.php";
date_default_timezone_set("Asia/Jakarta");
$err = array();
if (isset($_POST['submit'])) {
  //md5 itu buat enkripsi passwordnya dimysl. ada beberapa caranya sebenernya ke misalnya password_hash, crypt(), dll
  array_push($err);
  $password = md5($_POST["password_user"]);
  $tanggal_login = $_POST['tgl_login'];
  mysqli_query($conn, "insert into user set nama_user= '$_POST[nama_user]',
    email_user= '$_POST[email_user]', password_user = '$password', join_login = '$tanggal_login'");
  echo "<script type='text/javascript'>alert('Register Berhasil');
        window.location='login.php';
      </script>";
}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="stylesrgt.css">

  <title>Sign Up</title>
</head>

<body>
  <div class="container">
    <div class="card login-form">
      <div class="card-body">
        <h1 class="card-title text-center">Register</h1>

        <form method="post">
          <input type="hidden" name="jam_login" value="<?= date('Y-m-d H:i') ?>">
          <div class="form-group mt-3">
            <label for="name">Username</label>
            <input type="email" class="form-control" id="name" name="nama_user" placeholder="Masukkan Username">
          </div>
          <div class="form-group mt-3">
            <label for="name">Email</label>
            <input type="email" class="form-control" id="name" name="email_user" placeholder="Masukkan Alamat Email">
          </div>
          <div class="form-group mt-3">
            <label for="name">Password</label>
            <input type="password" class="form-control" id="name" name="password_user" placeholder="Masukkan Password">
          </div>
          <div class="form-group mt-3">
            <label for="name">Re-Password</label>
            <input type="password" class="form-control" id="name" placeholder="Ulangi Password">
          </div>
          <div class="d-grid mt-4">
            <button name="submit" type="submit" class="btn btn-primary btn-login">SIGN UP</button>
          </div>

          <div class="mt-1 text-center" style="font-size: 15px;">
            <label>Already have an Account? <a href="login.php" class="link" style="color: red;">Login Now</a></label>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>