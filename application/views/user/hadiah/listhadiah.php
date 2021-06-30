  <!-- Content Wrapper. Contains page content -->
  <div class="content col-md-8 mx-auto">

    <!-- Main content -->
    <section class="content mt-5 rounded pb-0">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-md-12">
            <div class="card bg-white">
                <div class="card-header text-center">
                    <h3 class="text-coklat"><b> List hadiah </b></h3>
                </div>
            </div>

            <div class="card card-primary bg-white">
              <div class="card-body">
                <!-- item card -->
                <table id="table1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Produk</th>
                      <th>Poin</th>
                      <th class="text-center">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach($data->result() as $key=>$items) : ?>
                    <tr>
                      <td style="width: 3%;"><?=$no++?></td>
                      <td><?=$items->produk?></td>
                      <td><?=$items->poin?></td>
                      <td class="text-center" style="width: 15%;"><button class="btn btn-<?=$items->status==1?'secondary':'success'?>"><?=$items->status==1?'Diproses':'Sukses'?></button></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <!-- /.item card -->

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
        </div>
      </div>