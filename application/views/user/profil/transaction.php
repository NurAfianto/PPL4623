  <!-- Content Wrapper. Contains page content -->
  <div class="content col-md-8 mx-auto">

    <!-- Main content -->
    <section class="content mt-5 rounded pb-0">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-md-12">
            <div class="card bg-white">
                <div class="card-header text-center">
                    <h3 class="text-coklat"><b> Transaction </b></h3>
                </div>
            </div>

            <div class="card card-primary bg-white">
              <div class="card-header">
                <h3 class="card-title">Pembelian produk</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                Check the Header part you can find Legacy vesion of style.
                <br>
                Start creating your amazing application!
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-body -->
            </div>
            
            <div class="card card-primary bg-white collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Klaim hadiah</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <table id="table1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Produk</th>
                      <th>Poin</th>
                      <th>Tanggal</th>
                      <th class="text-center">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach($klaim_hadiah->result() as $key=>$items) : ?>
                    <tr>
                      <td style="width: 3%;"><?=$no++?></td>
                      <td><?=$items->produk?></td>
                      <td><?=$items->poin?></td>
                      <td><?=$items->datetime?></td>
                      <td class="text-center" style="width: 15%;"><button class="btn btn-<?=$items->status==1?'secondary':'success'?>"><?=$items->status==1?'Diproses':'Sukses'?></button></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
        </div>
      </div>