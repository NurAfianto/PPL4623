
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dart | Register</title>

  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  
  <div class="card">
    <div class="card-body login-card-body">
        <div class="login-logo">
            <h5 class="text-left"><b>Register</b></h5>
        </div>

        

        <form action="<?=base_url('auth/register')?>" method="post">
            <div class="form-group mb-3">
                <input type="text" name="nama" class="form-control" placeholder="Nama" required>
            </div>
            <div class="form-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group mb-3">
                <input type="text" name="no_hp" class="form-control" placeholder="Nomor HP" required>
            </div>
            <div class="form-group mb-3">
                <select name="rekening" name="nama_rek" class="form-control" required>
                    <option value="">Nama Rekening</option>
                    <option value="BRI">BRI</option>
                    <option value="BCA">BCA</option>
                    <option value="BNI">BNI</option>
                    <option value="Mandiri">Mandiri</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <input type="number" name="no_rek" class="form-control" placeholder="Nomor Rekening" required>
            </div>
            <div class="form-group mb-3">
                <textarea type="text" name="alamat" class="form-control" required>Alamat
                </textarea>
            </div>
            <div class="row">

            <div class="col-8"></div>
            <div class="col-4">
                <button name="register" type="submit" class="btn btn-primary btn-block btn-coklat">Sign Up</button>
            </div>
            </div>
        </form>

        <p class="mb-1 mt-2">Sudah punya akun ? <a href="<?=site_url('auth/login')?>" class="text-coklat link-coklat">Login di sini</a></p>
    
        </div>
    </div>
</div>
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
