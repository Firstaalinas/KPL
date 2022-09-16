<?php
session_start();

?>
<?php
include "koneksi.php";
date_default_timezone_set("Asia/Jakarta");
$err = array();
if (isset($_POST['submit'])) {
  $email_user = $_POST['email_user'];
  $password = md5($_POST["password_user"]);
  $joinlogin = $_POST['jam_login'];
  $cek_user = mysqli_query($conn, "SELECT * FROM user WHERE email_user='$email_user' and password_user='$password'");
  $query = mysqli_query($conn, "UPDATE user SET data_login ='$joinlogin' WHERE email_user='$email_user' and password_user='$password'");
  $row      = mysqli_num_rows($cek_user);

  if ($row == 1) {
    $fetch_pass = mysqli_fetch_assoc($cek_user);
    $cek_pass = $fetch_pass['password_user'];
    if ($cek_pass != $password) {
      echo "<script>alert('password salah');</script>";
    } else {
      $_SESSION['log'] =  $fetch_pass;
      $_SESSION['email_user'] = $email_user;
      if ($query) {
      }
      echo "<script>alert('login Berhasil');document.location.href='index.php';</script>";
    }
  } else {
    echo "<script>alert('Email belum terdaftar');</script>";
  }
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
  <link rel="stylesheet" href="login.css">

  <title>LOGIN</title>
</head>

<body>
  <div class="container">
    <div class="card login-form">
      <div class="card-body">
        <h1 class="card-title text-center">LOGIN</h1>

        <form method="post">
          <input type="hidden" name="jam_login" value="<?= date('Y-m-d H:i') ?>">
          <div class="form-group mt-4">
            <label for="name">Email</label>
            <input type="email" class="form-control" name="email_user" placeholder="Masukkan Email">
          </div>
          <div class="form-group mt-4">
            <label for="name">Password</label>
            <input type="password" class="form-control" name="password_user" placeholder="Masukkan Password">
          </div>

          <div class="d-grid mt-3">
            <button name="submit" type="submit" class="btn btn-primary btn-login">LOGIN</button>
          </div>

          <div class="mt-3 text-center" style="font-size: 15px;">
            <label>Don't have account ? <a href="register.php" class="link" style="color: red;">Register Now</a></label>
          </div>
          <div class="mt-1 text-center" style="font-size: 15px;">
            <label>Forgot Password ? <a href="reset.php" class="link" style="color: red;">Reset Password</a></label>
          </div>

        </form>
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>