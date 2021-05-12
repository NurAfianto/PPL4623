
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dart | Forgot Password</title>

  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <h5><b>Pulihkan Password</b></h5>
        </div>

        <form action="<?=base_url()?>assets/index3.html" method="post">
            <div class="form-group mb-3">
                <input type="text" class="form-control" placeholder="Username" readonly>
            </div>
            <div class="form-group mb-3">
                <input type="text" class="form-control" placeholder="Email" readonly>
            </div>
            <div class="form-group mb-3">
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group mb-3">
                <input type="password" class="form-control" placeholder="Confirm Password">
            </div>

            <div class="row">

            <!-- /.col -->
            <div class="col-8"></div>
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block btn-coklat">Next  &nbsp;<i class="fa fa-chevron-right"></i></button>
            </div>
            <!-- /.col -->
            </div>
        </form>

        <p class="mb-1">
            <a href="<?=site_url('auth/login')?>" class="text-coklat link-coklat">Login Disini</a>
        </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
