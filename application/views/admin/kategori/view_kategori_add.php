<div class="card">
  <div class="card-header">
    <h4>
      Kategori Add
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
    <a href="<?=site_url('admin/kategori')?>" class="btn btn-warning btn-md"><i class="fas fa-arrow-left"></i> Back</a>
    <form action="<?php echo base_url(). 'admin/kategori/tambah_aksi'; ?>"method="post">
    <div class="col-md-6 mx-auto mt-4">
        <div class="form-group">
            <label for="nama">Nama Kategori</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama kategori">
        </div>
        <div class="form-group mt-4 d-flex justify-content-between">
            <button type ="reset" class="btn btn-default col-3"><i class="fas fa-undo"></i> Reset</button>
            <button class="btn btn-primary col-3"><i class="fas fa-paper-plane"></i> Submit</button>
        </div>
    </div>
    </form>
  </div>

  </div>
</div>

 
