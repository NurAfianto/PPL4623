
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dart | Log in</title>

  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
        <div class="login-logo">
            <img src="<?=base_url()?>assets/pict/Icon/Logo_trans.png" alt="" width="50%">
            <h6><b>Silahkan Masuk ke dalam Akun</b></h6>
        </div>

        <p class="text-left">Belum punya akun ? <a href="<?=site_url('auth/register')?>" class="text-coklat link-coklat">Daftar di sini</a></p>

        <form action="<?=base_url()?>assets/index3.html" method="post">
            <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                </div>
            </div>
            </div>
            <div class="row">

            <div class="col-8"></div>
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block btn-coklat">Sign In</button>
            </div>
            </div>
        </form>

        <p class="mb-1">
            <a href="<?=site_url('auth/forgot_password')?>" class="text-coklat link-coklat">Lupa kata sandi ?</a>
        </p>
        </div>
    </div>
</div>
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
