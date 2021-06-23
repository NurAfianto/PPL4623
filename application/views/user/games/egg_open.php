
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dart Cafe</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?=base_url()?>plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="<?=base_url()?>plugins/bootstrap-slider/css/bootstrap-slider.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style-user.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style-flush.css">
</head>
<body class="">
<div class="bg-hutan">
    <a href="<?=site_url('user/games')?>" class="btn btn-back">
        <img src="<?=base_url('assets/pict/Icon/icon-back.png')?>" alt="" srcset="" class="img-siram">
    </a>
    <div class="">
        <div class="kotak-koin">
            <img src="<?=base_url('assets/pict/Icon/koin.png')?>" alt="" srcset="" class="" width="150"> <p><?=$poin?></p>
        </div>
        <a href="">
            <img src="<?=base_url('assets/pict/Icon/telur_pecah.png')?>" alt="" srcset="" class="img-egg-open">
        </a>
        <img src="<?=base_url('assets/pict/Icon/sarang.png')?>" alt="" srcset="" class="img-sarang">
    </div>


</div>

<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/plugins/chart.js/Chart.min.js"></script>
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<script src="<?=base_url()?>plugins/bootstrap-slider/bootstrap-slider.min.js"></script>
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>

<script>
    function siram(){
        angka = parseInt($('#angka-air').text());
        document.getElementById('box-air').style.width = (angka-50)+'px';
        $('#angka-air').text(angka-50)
    }
</script>
</body>
</html>
