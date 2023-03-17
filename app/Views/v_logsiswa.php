<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link href="/css/bootstrap.css" rel="stylesheet"/>
	<link href="/css/signin.css" rel="stylesheet"/>
	
  <link href="/fontawesome/css/all.min.css" rel="stylesheet"/>

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

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

</head>
<body>
<div class="container mt-5">
<div class="row justify-content-md-center">
    <div class="col-md-4">
        <h3 class="text-center">Login Siswa</h3>
        <div class="card">
            <div class="card-header">
                <img src="/logo-spp.png" width="100%">

</div>
    <div class="card-body">
        <form action="/loginsiswa" method="post">
            <div class="form-group mb-2">
                <label>NISN</label>
                <input type="text" name="nisn" class="form-control" placeholder="Masukan NISN anda" required>
            </div>
            <div class="form-group mb-2">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan Password anda" required>
            </div>
            <div class="form-group mb-2">
            <div class="text-center">
                <button type="submit" class="btn btn-primary"> Login </button>
            </div>            </div>
            
        </form>
</div>
</div>
</div>
</div>
</div>

<script scr="/asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>