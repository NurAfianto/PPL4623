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

            <?php if($this->session->flashdata('failed')!=null){?>
                <div class="alert alert-danger alert-dismissible mb-3">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?=$this->session->flashdata('failed')?>
                </div>
            <?php } ?>

            <div class="card card-primary bg-white">
              <div class="card-body">
                <form action="<?=site_url('user/profil/edit')?>" method="post">
                <!-- item card -->
                <table id="table1" class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <td>Nama</td>
                      <td>
                        <input type="hidden" name="id_user" value="<?=$id_user?>">
                        <input type="text" class="form-control" name="nama" value="<?=$nama?>" required>
                      </td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td><input type="text" class="form-control" name="email" value="<?=$email?>" required></td>
                    </tr>
                    <tr>
                      <td>Password</td>
                      <td><input type="password" class="form-control" name="password" value="<?=$password?>" required></td>
                    </tr>
                    <tr>
                      <td>Password Confirmation</td>
                      <td><input type="password" class="form-control" name="password_con" value="<?=$password?>" required></td>
                    </tr>
                    <tr>
                      <td>Nomor Handphone</td>
                      <td><input type="text" class="form-control" name="no_hp" value="<?=$no_hp?>" required></td>
                    </tr>
                    <tr>
                      <td>Rekening</td>
                      <td>
                        <select name="nama_rek" class="form-control" required>
                          <option value="BRI" <?=$nama_rek=='BRI'?'selected':null?>>BRI</option>
                          <option value="BNI" <?=$nama_rek=='BNI'?'selected':null?>>BNI</option>
                          <option value="BCA" <?=$nama_rek=='BCA'?'selected':null?>>BCA</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Nomer Rekening</td>
                      <td><input type="text" class="form-control" name="no_rek" value="<?=$no_rek?>" required></td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td><textarea name="alamat" id="" cols="30" rows="10" class="form-control" required><?=$alamat?></textarea></td>
                    </tr>
                  </tbody>
                </table>
                <!-- /.item card -->
                <div class="col-md-12 mt-3 d-flex">
                  <div class="col-md-6 p-0">
                    <a href="<?=base_url('user/profil')?>" class="col-md-2 btn btn-coklat text-white"> <i class="fas fa-arrow-left"></i> Back </a>
                  </div>
                  <div class="col-md-6 text-right">
                    <button type="submit" name="update" class="btn btn-danger text-white pull-right"> <i class="fas fa-paper-plane"></i> Update </button>
                  </div>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
        </div>
      </div>