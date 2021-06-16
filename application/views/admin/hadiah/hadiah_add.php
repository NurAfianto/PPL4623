
<div class="card">
  <div class="card-header">
    <h4>
      Hadiah Add
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
  <a href="<?=site_url('admin/hadiah')?>" class="btn btn-warning btn-md"><i class="fas fa-arrow-left"></i> Back</a>
    <form action="<?php echo base_url(). 'admin/hadiah/tambah_aksi'; ?>"method="post">
    <div class="col-md-6 mx-auto mt-4">
        <div class="form-group">
            <label for="nama">Nama Hadiah</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Hadiah">
        </div>
        <div class="form-group">
            <label for="produk">Produk</label>
            <select name="produk" id="produk" class="select2 form-control">
              <?php foreach($Hadiah1 as $row) 
              { 
                ?>
                <option value="<?php echo $row->nama_produk;?>"> <?php echo $row->nama_produk; ?></option>
              <?php 
              } 
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="poin">Poin Minimal</label>
            <input type="number" name="poin" id="poin" class="form-control" placeholder="Poin Minimal">
        </div>
        <div class="form-group">
            <label for="level">Level</label>
            <select name="level" id="level" class="select2 form-control">
            <?php foreach($Hadiah2 as $lvl) 
              { 
                ?>
                <option value="<?php echo $lvl->level;?>"> <?php echo $lvl->level; ?></option>
              <?php 
              } 
                ?>
            </select>
        <div class="form-group mt-4 d-flex justify-content-between">
            <button class="btn btn-default col-3"><i class="fas fa-undo"></i> Reset</button>
            <button class="btn btn-primary col-3"><i class="fas fa-paper-plane"></i> Submit</button>
        </div>
    </div>
    </form>
  </div>

  </div>
</div>

 
