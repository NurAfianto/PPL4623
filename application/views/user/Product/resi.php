  <!-- Content Wrapper. Contains page content -->
  <div class="content col-md-8 mx-auto">

    <!-- Main content -->
    <section class="content mt-5 rounded pb-0">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-md-12">
            <div class="card bg-white">
                <div class="card-header text-center">
                    <h3 class="text-coklat"><b> Bukti Transaksi </b></h3>
                </div>
            </div>

            <div class="card card-primary bg-white">
                <div class="row mt-3 mx-3">
                    <div class="col-md-3 col-xs-12">

                        No Invoice  
                        <br>Tanggal     
                        <br>No Rekening  
                    </div>
                    <div class="col-md-3 col-xs-12">
                        : <?php echo "".$_GET['invoice']?>
                        <br>: <?php echo "".date('d M Y')?>
                        <br>: <?php echo print_user_detail()->no_rek." (".print_user_detail()->nama_rek.")" ?>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <span class="float-right">Total : Rp. <?=number_format($total,0,",",".")?> </span>
                    </div>
                </div>

              <div class="card-body">
                <div class="card" style="background-color:#d6d6d6;">
                    <div class="card-body ">
                        <table class="table table-borderless">
                            <tbody>
                                <?php foreach($data as $items) : $i=1;?>
                                <tr>
                                    <td><?php echo $i; $i++?></td>
                                    <td><?php echo $items->nama_produk?></td>
                                    <td><?= $items->jumlah?></td>
                                    <td>Rp. <?= number_format($items->harga,0,",",".")?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

              </div>
              <!-- /.card-body -->
            </div>

            <!-- <div class="card bg-white">
                <div class="card-footer row">
                    <h3 class="col-md-10"><b><span>Total</span> <span>Rp. <?php echo number_format($this->cart->total(),0,",",".")?> </span></b></h3>
                    <a href="<?=site_url('user/cart/checkout')?>" class="btn btn-danger col-md-2 mt-0" style="font-size: 20px;"> Checkout </a>
                </div>
            </div> -->
            <!-- /.card -->

          </div>
        </div>
      </div>

      <script>

      </script>