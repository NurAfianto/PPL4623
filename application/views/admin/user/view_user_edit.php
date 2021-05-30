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
        <input type="hidden" name="id" id="id" value="<?php echo $User->id; ?>"/>
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
              <label for="level">Level user</label>
              <input type="text" name="level" class="form-control" 
              placeholder="Level user" value="<?php echo $User->level; ?>" >
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