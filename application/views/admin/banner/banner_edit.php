<div class="card">
  <div class="card-header">
    <h4>
      Banner Edit
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
  <form action="<?php echo base_url(); ?>admin/banner/update" method="post" enctype="multipart/form-data">
        <div class="col-md-6 mx-auto mt-4">
        <input type="hidden" name="no" id="no" value="<?php echo $Banner->no; ?>"/>
          <div class="form-group">
              <label for="nama_banner">Nama Banner</label>
              <input type="text" name="nama_banner" class="form-control" placeholder="Nama Banner" value="<?php echo $Banner->nama_banner; ?>" >
          </div>
          <div class="form-group">
              <label for="gambar">Gambar</label>
              <input type="file" class="form-control-file"  name="gambar" >
							
								<div class="invalid-feedback"> 
                
          </div>
          </div>
          <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="<?php echo $Banner->keterangan; ?>" >
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

 
