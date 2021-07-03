  <!-- Content Wrapper. Contains page content -->
  <div class="content col-md-8 mx-auto">

    <!-- Main content -->
    <section class="content mt-5 rounded pb-0">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-md-12">
            <div class="card bg-white">
                <div class="card-header text-center">
                    <h3 class="text-coklat"><b> Checkout </b></h3>
                </div>
            </div>

            <div class="card card-primary bg-white">
              <div class="card-body">
                <!-- item card -->
                <?php foreach($this->cart->contents() as $items) : ?>
                <div class="col-md-12 rounded mx-auto p-3 mb-4 row" style="background-color: #b2bec3;">
                    <div class="col-md-3 text-center" style="height: 100px;">
                        <img src="<?php echo base_url().'upload/product/'.$items['picture']?>" height="100px" class="brand-image" alt="user-produk">
                    </div>
                    <div class="col-md-8 row">
                        <div class="col-md-8">
                            <h4 class="mb-4 mt-1 text-center"><b><?php echo $items['name']?></b></h4>
                            <div class="h5 text-cart" >
                            <?php echo anchor('user/cart/min_qty/'.$items['rowid'].'/'.$items['qty'],'<div class="btn btn-sm btn-coklat text-white"><i class="fas fa-minus"></i></div>')?>
                                 &nbsp;<b>
                                    <input type="number" class="btn btn-sm btn-default p-0 pl-2" value="<?php echo $items['qty']?>" style="width:70px !important;font-size:18px" readonly>
                                </b> &nbsp; 
                            <?php echo anchor('user/cart/plus_qty/'.$items['rowid'].'/'.$items['qty'],'<div class="btn btn-sm btn-coklat text-white"><i class="fas fa-plus"></i></div>')?>
                                </div>
                        </div>
                        <div class="col-md-3 pt-5 text-cart">
                            <h4 class="mt-1"><b>Rp. <?php echo number_format($items['price'],0,",",".")?></b></h4>
                        </div>
                        <div class="col-md-1 text-right">
                          <?php echo anchor('user/cart/del/'.$items['rowid'],'<div class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></div>')?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- /.item card -->

              </div>
              <!-- /.card-body -->
            </div>

            <div class="card bg-white">
                <div class="card-footer row">
                    <h3 class="col-md-10"><b><span>Total</span> <span>Rp. <?php echo number_format($this->cart->total(),0,",",".")?> </span></b></h3>
                    <a href="<?=site_url('user/cart/checkout')?>" class="btn btn-danger col-md-2 mt-0" style="font-size: 20px;"> Checkout </a>
                    <!-- <button class="btn btn-danger col-md-2 mt-0" style="font-size: 20px;"> Checkout </button> -->
                </div>
            </div>
            <!-- /.card -->

          </div>
        </div>
      </div>

      <script>

      </script>