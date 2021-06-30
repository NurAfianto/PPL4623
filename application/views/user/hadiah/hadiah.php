  <!-- Content Wrapper. Contains page content -->
  <div class="content col-md-8 mx-auto">

    <!-- Main content -->
    <section class="content mt-5 rounded pb-0">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-md-12">
            <?php if($this->session->flashdata('failed')!=null){?>
                <div class="alert alert-danger alert-dismissible mb-3">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?=$this->session->flashdata('failed')?>
                </div>
              <?php } ?>
            <div class="card bg-white">
                <div class="card-header text-center">
                    <h3 class="text-coklat"><b> Ambil Hadiahmu </b></h3>
                </div>
            </div>

            <div class="card card-primary bg-white">
              <div class="card-body">
                <!-- item card -->
                <?php foreach($data->result() as $key=>$items) : ?>
                <div class="col-md-12 rounded mx-auto p-3 mb-4 row" style="background-color: #b2bec3;">
                    <div class="col-md-3 text-center" style="height: 100px;">
                        <img src="<?=base_url('upload/product/'.$items->gambar)?>" height="100px" class="brand-image" alt="user-produk">
                    </div>
                    <div class="col-md-9 row">
                        <div class="col-md-8 text-center">
                            <h5 class="mb-4 mt-1"><?php echo $items->nama?></h5>
                        </div>
                        <div class="col-md-4 pt-2">
                            <table class="col-md-12">
                              <tr>
                                <th colspan="2" class="text-center">Syarat Minimum</th>
                              </tr>
                              <tr>
                                <td class="col-md-6">Poin</td>
                                <td class="col-md-6"><?php echo $items->poin?></td>
                              </tr>
                              <tr>
                                <td class="col-md-6">Level</td>
                                <td class="col-md-6"><?php echo $items->level?></td>
                              </tr>
                            </table>
                            <form action="<?=site_url('user/listhadiah')?>" method="post">
                              <input type="hidden" name="id_hadiah" value="<?=$items->id?>">
                              <input type="hidden" name="poin" value="<?=print_user_detail()->poin?>">
                              <input type="hidden" name="poin_min" value="<?=$items->poin?>">
                              <input type="hidden" name="level" value="<?=print_user_detail()->level_user?>">
                              <input type="hidden" name="level_min" value="<?=$items->level?>">
                              <input type="hidden" name="id_user" value="<?=$_SESSION['userid']?>">
                              <button name="claim" onclick="return confirm('Apakah anda yakin mengambil hadiah ini ?')" class="btn btn-warning col-md-12">Claim</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- /.item card -->

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
        </div>
      </div>