<!-- Content Wrapper. Contains page content -->
<div class="content col-md-10 mx-auto">
<!-- Main content -->
    <section class="content mt-5  rounded">
    <div class="container-fluid p-0">
<div class="px-5">
<!-- Top Card -->
<div class="card">
  <div class="card-header">
    <h3 class="text-center font-weight-bold">Product</h3>
  </div>
</div>
<!-- ./top card -->

<!-- Content Card -->
<div class="card">
    <!-- card-body -->
    <div class="card-body row ml-1">

    <!-- item-card -->

    <?php foreach ($item as $itm) : ?>

    <div class="item-card card rounded-lg item-card">
        <!-- image -->
        <img src="<?php echo base_url().'/upload/product/'. $itm->gambar?>" class="card-img-top"  alt="<?php echo $itm->nama_produk ?>">
        <!-- ./image -->
        <!-- detail item -->
        <div class="card-body text-wrap">
            <h5 class="nama-item"><?php echo $itm->nama_produk ?></h5>
            <!-- <div class="row"> -->
                <div class="">
                    <span class="harga-item align-middle"><p>Rp. <?php echo number_format($itm->harga,0,",",".") ?></p></span>
                </div>
                <div class="">
                    <?php echo anchor('user/product/add_cart/'.$itm->id_produk,'<div class="btn btn-sm btn-success btn-buy float-right">Add <i class="fas fa-cart-plus"></i></div>')?>
                    <!-- <button class="btn btn-sm btn-success btn-buy float-right">Add <i class="fas fa-cart-plus"></i></button> -->
                </div>
            <!-- </div> -->
        </div>
        <!-- ./detail item -->
    </div>

    <?php endforeach; ?>
    <!-- ./item-card -->

    </div>
    <!-- ./card-body -->
</div>
<!-- ./content card -->


</div>
<!-- ./px-5 -->