<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Signin Template · Bootstrap v4.6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <?php
    if(isset($_GET['pesan'])){
      if($_GET['pesan']=="gagal"){
        echo"<div class='alert'></div>";
      }
    }
    ?>
<form class="form-signin" method="post" action="aksi_login.php">
  <img class="mb-4" src="assets/img/logo1.png" alt="" width="72" height="72">
  <h2 class="h3 mb-3 font-weight-normal">Silahkan Log-in</h2>
  <label for="inputEmail" class="sr-only">Username</label>
  <input type="text" id="text" name="username" class="form-control" placeholder="Isi Username...." required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Isi Pasword...." required>
  
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <p><button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Masuk</button></p>
  <p><button class="btn btn-lg btn-primary btn-block" type="button"><a href="daftar.php" style="color:white">Daftar</button></p>
  <p class="mt-5 mb-3 text-muted">&copy; 2024-2025</p>
</form>   
  </body>
</html>
