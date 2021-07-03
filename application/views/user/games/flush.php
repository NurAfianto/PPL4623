
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
  <link rel="stylesheet" href="<?=base_url()?>/assets/css/style-flush.css">
</head>
<body class="">
<div class="bg-hutan">
    <a href="<?=site_url('user/games')?>" class="btn btn-back">
        <img src="<?=base_url('assets/pict/Icon/icon-back.png')?>" alt="" srcset="" class="img-siram">
    </a>
    <div class="">
        <img src="<?=base_url('assets/pict/Icon/coffee.png')?>" alt="" srcset="" class="img-tanaman">
        <div class="box-air">
            <div class="box-air-terisi" id="box-air" style="width: <?=$kekurangan==null?'300':$kekurangan?>px;"></div>
        </div>
        <div class="text-air-terisi">
            <img src="<?=base_url('assets/pict/Icon/water-drop.png')?>" alt="" srcset="" width="40">
            <span id="angka-air"><?=$kekurangan==null?'300':$kekurangan?></span>
        </div>
    </div>
    <button class="btn btn-siram" onclick="siram()">
        <img src="<?=base_url('assets/pict/Icon/icon-siram.png')?>" alt="" srcset="" class="img-siram">
        <div class="text-angka">
            10
        </div>
    </button>

    <!-- Modal -->
    <div class="modal fade mt-5" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title mx-auto pl-5" id="exampleModalLabel">Tanaman Kamu Sudah Panen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="<?=base_url('assets/pict/Icon/koin.png')?>" alt="" srcset="" width="150" class="mt-3">
                <div class="h3 mt-5 col-md-8 mx-auto">
                    Kamu berhasil mendapatkan 200 poin
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade mt-5" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title mx-auto" style="padding-left: 100px;" id="exampleModalLabel2">Gagal Siram</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="<?=base_url('assets/pict/Icon/close.png')?>" alt="" srcset="" width="150" class="mt-3">
                <div class="h3 mt-5 col-md-8 mx-auto">
                    Kamu telah Menyiram Hari ini, silahkan kembali lagi besok
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade mt-5" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title mx-auto" style="padding-left: 100px;" id="exampleModalLabel1">Siram Berhasil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="<?=base_url('assets/pict/Icon/checked.png')?>" alt="" srcset="" width="150" class="mt-3">
                <div class="h3 mt-5 col-md-8 mx-auto">
                    Penyiraman Hari ini berhasil, silahkan kembali lagi besok
                </div>
            </div>
            </div>
        </div>
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
        

        $.ajax({
            url: 'dashboard/siram',
            dataType : 'json',
            type: 'post',
            data: {
                siraman : 10,
                kekurangan : angka-10
            },
            success:function(response) {
                console.log(response["kode"]);
                if(response["kode"]==0){
                    $('#exampleModal2').modal('show');
                }else if(response["kode"]==2){
                    $('#exampleModal').modal('show');
                    document.getElementById('box-air').style.width = (angka-10)+'px';
                    $('#angka-air').text(angka-10);
                }else if(response["kode"]==1){
                    $('#exampleModal1').modal('show');
                    document.getElementById('box-air').style.width = (angka-10)+'px';
                    $('#angka-air').text(angka-10);
                }
            }
        });
    }
</script>
</body>
</html>
