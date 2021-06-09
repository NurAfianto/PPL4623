<div class="card">
  <div class="card-header">
    <h4>
      User Edit
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
      <a href="<?=site_url('admin/user')?>" class="btn btn-warning btn-md"><i class="fas fa-arrow-left"></i> Back</a>
      <form method="post" action="<?php echo base_url(); ?>admin/user/update">
        <div class="col-md-6 mx-auto mt-4">
        <input type="hidden" name="id_user" id="id_user" value="<?php echo $User->id_user; ?>"/>
          <div class="form-group">
              <label for="nama">Nama user</label>
              <input type="text" name="nama" class="form-control" placeholder="Nama user" value="<?php echo $User->nama; ?>" >
          </div>
          <div class="form-group">
              <label for="email">Email user</label>
              <input type="text" name="email" class="form-control" 
              placeholder="Email user" value="<?php echo $User->email; ?>" >
          </div>
          <div class="form-group">
              <label for="password">Password user</label>
              <input type="text" name="password" class="form-control" 
              placeholder="Password user" value="<?php echo $User->password; ?>" >
          </div>
          <div class="form-group">
              <label for="no_hp">Nomer HP</label>
              <input type="text" name="no_hp" class="form-control" 
              placeholder="Nomer HP" value="<?php echo $User->no_hp; ?>" >
          </div>
          <div class="form-group">
              <label for="alamat">Alamat user</label>
              <input type="text" name="alamat" class="form-control" 
              placeholder="Alamat User" value="<?php echo $User->alamat; ?>" >
          </div>
          <div class="form-group">
              <label for="nama_rek">Nama Rekening</label>
              <input type="text" name="nama_rek" class="form-control" 
              placeholder="Nama Rekening" value="<?php echo $User->nama_rek; ?>" >
          </div>
          <div class="form-group">
              <label for="no_rek">Nomer Rekening</label>
              <input type="text" name="no_rek" class="form-control" 
              placeholder="Nomer Rekening" value="<?php echo $User->no_rek; ?>" >
          </div>
          <div class="form-group">
              <label for="recovery_code">Recovery Code</label>
              <input type="text" name="recovery_code" class="form-control" 
              placeholder="Recovery Code" value="<?php echo $User->recovery_code; ?>" >
          </div>
          <div class="form-group">
              <label for="level_user">Level user</label>
              <input type="text" name="level_user" class="form-control" 
              placeholder="Level user" value="<?php echo $User->level_user; ?>" >
          </div>
          <div class="form-group">
              <label for="poin_earned">Poin Earned</label>
              <input type="text" name="poin_earned" class="form-control" 
              placeholder="Poin Earned" value="<?php echo $User->poin_earned; ?>" >
          </div>
          <div class="form-group">
              <label for="poin">Poin user</label>
              <input type="text" name="poin" class="form-control" 
              placeholder="Poin user" value="<?php echo $User->poin; ?>" >
          </div>
          <div class="form-group mt-4 d-flex justify-content-between">
            <button type = "reset" class="btn btn-default col-3"><i class="fas fa-undo"></i> Reset</button>
            <button type = "submit" class="btn btn-primary col-3"><i class="fas fa-paper-plane"></i> Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>