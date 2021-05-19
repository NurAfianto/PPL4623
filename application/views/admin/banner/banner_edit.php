
<div class="card">
  <div class="card-header">
    <h4>
      Banner Edit
    </h4>
  </div>
  <div class="card-body">
  <div class="col-md-12">
  <a href="<?=site_url('admin/banner')?>" class="btn btn-warning btn-md"><i class="fas fa-arrow-left"></i> Back</a>
    <form action="">
    <div class="col-md-6 mx-auto mt-4">
        <div class="form-group">
            <label for="nama_banner">Nama Banner</label>
            <input type="text" name="nama_banner" id="nama_banner" class="form-control" placeholder="Nama Banner">
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" id="gambar" name="gambar" class="form-control">
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan">
        </div>
        <div class="form-group mt-4 d-flex justify-content-between">
            <button class="btn btn-default col-3"><i class="fas fa-undo"></i> Reset</button>
            <button class="btn btn-primary col-3"><i class="fas fa-paper-plane"></i> Submit</button>
        </div>
    </div>
    </form>
  </div>

  </div>
</div>

 
