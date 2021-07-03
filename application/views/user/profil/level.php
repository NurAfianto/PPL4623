  <!-- Content Wrapper. Contains page content -->
  <div class="content col-md-8 mx-auto">

    <!-- Main content -->
    <section class="content mt-5 rounded pb-0">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-md-12">
            <div class="card bg-white">
                <div class="card-header text-center">
                    <h3 class="text-coklat"><b> Profil </b></h3>
                </div>
            </div>

            <div class="card card-primary bg-white">
              <div class="card-body">
                <!-- item card -->
                <div class="col-md-12 text-center">
                  <span class="col-md-6">
                    <img src="<?=base_url()?>assets/pict/icon/<?=print_user_detail()->level_user?>.png" alt="" width="150">
                  </span>
                  <span class="col-md-6 h2 pl-5">
                    <b><?=print_user_detail()->level_user?></b>
                  </span>
                </div>
                <div class="col-md-12 text-center h4 mt-4">
                  <table class="mx-auto">
                    <tr>
                      <td class="p-2">Poin</td>
                      <td class="p-2 pl-5"><?=print_user_detail()->poin?></td>
                    </tr>
                    <tr>
                    <td class="p-2">XP</td>
                      <td class="p-2 pl-5"><?=print_user_detail()->poin_earned?></td>
                    </tr>
                  </table>
                </div>
                <!-- /.item card -->
                <div class="col-md-12 mt-3 d-flex">
                <div class="col-md-12 mt-3 d-flex">
                  <div class="col-md-6 p-0">
                    <a href="<?=base_url('user/dashboard')?>" class="col-md-2 btn btn-coklat text-white"> <i class="fas fa-arrow-left"></i> Back </a>
                  </div>
                  <div class="col-md-6 text-right mt-1">
                    
                  </div>
                </div>
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
        </div>
      </div>