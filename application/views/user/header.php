
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dart Cafe</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/css/style-user.css">
  </head>
<body class="">
<div class="" style="background-color: #F7F5F5;">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light ml-0 pl-3 pr-3">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-sm-inline-block">
        <a href="<?=site_url('user/dashboard')?>">
            <img src="<?=base_url()?>assets/pict/icon/Logo_trans.png" width="50" class="brand-image img-circle" alt="Logo">
        </a>
      </li>
      <li class="nav-item d-none d-md-inline-block mt-2 active">
        <a href="<?=site_url('user/dashboard')?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block mt-2">
        <a href="<?=site_url('user/product')?>" class="nav-link">Food</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block mt-2">
        <a href="#" class="nav-link">Beverages</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block mt-2">
        <a href="#" class="nav-link">Challenges</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block nav-search">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
        <li class="nav-item">
          <?php 
            $cart = '<div class="nav-link"><i class="fas fa-shopping-cart"></i><span class="badge badge-warning navbar-badge">'.$this->cart->total_items().'</span></div>'
          ?>
          <?php echo anchor('user/product/detail_cart',$cart) ?>
        </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown"  style="margin-top:-2px">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="<?=base_url()?>assets/pict/icon/user.png" width="30" class="brand-image img-circle" alt="user-icon">
          <!-- <span class="badge badge-warning navbar-badge">15</span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?=$_SESSION['nama']?></span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> Bronzee
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-cog"></i> Setting
            <!-- <span class="float-right text-muted text-sm">12 hours</span> -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?=site_url('auth/logout')?>" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> Log Out
            <!-- <span class="float-right text-muted text-sm">2 days</span> -->
          </a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->