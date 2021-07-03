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
                <table id="table1" class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <td>Nama</td>
                      <td><?=$data->nama?></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td><?=$data->email?></td>
                    </tr>
                    <tr>
                      <td>Nomor Handphone</td>
                      <td><?=$data->no_hp?></td>
                    </tr>
                    <tr>
                      <td>Rekening</td>
                      <td><?=$data->nama_rek." "."(".$data->no_rek.")"?></td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td><?=$data->alamat?></td>
                    </tr>
                    <tr>
                      <td>Poin / XP</td>
                      <td><?=$data->poin." / ".$data->poin_earned?></td>
                    </tr>
                    <tr>
                      <td>Level</td>
                      <td><?=$data->level_user?></td>
                    </tr>
                    <tr>
                      <td>Recovery Code</td>
                      <td><?=$data->recovery_code?></td>
                    </tr>
                  </tbody>
                </table>
                <!-- /.item card -->
                <div class="col-md-12 mt-3 d-flex">
                  <div class="col-md-6 p-0">
                    <a href="<?=base_url('user/dashboard')?>" class="col-md-2 btn btn-coklat text-white"> <i class="fas fa-arrow-left"></i> Back </a>
                  </div>
                  <div class="col-md-6 text-right mt-1">
                    <form action="<?=site_url('user/profil/edit')?>" method="post">
                      <input type="hidden" name="id_user" value="<?=$data->id_user?>">
                      <input type="hidden" name="nama" value="<?=$data->nama?>">
                      <input type="hidden" name="email" value="<?=$data->email?>">
                      <input type="hidden" name="password" value="<?=$data->password?>">
                      <input type="hidden" name="no_hp" value="<?=$data->no_hp?>">
                      <input type="hidden" name="nama_rek" value="<?=$data->nama_rek?>">
                      <input type="hidden" name="no_rek" value="<?=$data->no_rek?>">
                      <input type="hidden" name="alamat" value="<?=$data->alamat?>">
                      <button type="submit" class="btn col-md-6 link-coklat text-coklat pull-right">Ingin mengubah data profil ?</button>
                    </form>
                  </div>
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
        </div>
      </div>