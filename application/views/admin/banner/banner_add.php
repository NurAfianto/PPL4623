
<div class="card">
  <div class="card-header">
    <h4>
      Banner Add
    </h4>
  </div>
  <div class="card-body">
  <?php 
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>
  <div class="col-md-12">
  <a href="<?=site_url('admin/banner')?>" class="btn btn-warning btn-md"><i class="fas fa-arrow-left"></i> Back</a>
  <form action="<?php echo base_url(). 'admin/banner/tambah_aksi'; ?>"method="post">
    <div class="col-md-6 mx-auto mt-4">
        <div class="form-group">
            <label for="nama_banner">Nama Banner</label>
            <input type="text" name="nama_banner" id="nama_banner" class="form-control" placeholder="Nama Banner">
        </div>
				<div class="form-group">
								<label for="gambar">Gambar</label>
								<input class="form-control-file <?php echo form_error('nama_banner') ? 'is-invalid':'' ?>" type="file" name="gambar" />
								<div class="invalid-feedback">
									<?php echo form_error('gambar') ?>
								</div>
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

 
