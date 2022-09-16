<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="stylerst.css">

  <title>RESET PASSWORD</title>
</head>

<body>
  <div class="container">
    <div class="card login-form">
      <div class="card-body">
        <h1 class="card-title text-center">Reset</h1>

        <form>
          <div class="form-group mt-4">
            <label for="name">Username</label>
            <input type="text" class="form-control" id="name" placeholder="Masukkan Nama">
          </div>
          <div class="form-group mt-4">
            <label for="name">Email</label>
            <input type="text" class="form-control" id="name" placeholder="Masukkan Email">
          </div>
          <div class="form-group mt-4">
            <label for="name">New Password</label>
            <input type="text" class="form-control" id="name" placeholder="Masukkan Password Baru">
          </div>
          <div class="d-grid mt-5">
            <button name="submit" type="submit" class="btn btn-primary btn-login">LOGIN</button>
          </div>

          <div class="mt-3 text-center" style="font-size: 15px;">
            <label> Have Account ? <a href="login.php" class="link" style="color: red;">Login</a></label>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>