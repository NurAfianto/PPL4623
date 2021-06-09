<div class="card">
  <div class="card-header">
    <h4>
      User
    </h4>
  </div>
  <div class="card-body">
  <div class="col-md-12 mb-3 text-left">
  </div>
  <table id="table1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Password</th>
      <th>No HP</th>
      <th>Alamat</th>
      <th>Nama Rekening</th>
      <th>No Rekening</th>
      <th>Recovery Code</th>
      <th>Level</th>
      <th>Poin Earned</th>
      <th>Poin</th>
      <th class="text-center">Action</th>
    </tr>
    </thead>
    <?php 
					$id_user = 1;
					foreach($User as $row)
					{
						?>
						<tr>
							<td><?php echo $id_user++; ?></td>
							<td><?php echo $row->nama; ?></td>
              <td><?php echo $row->email; ?></td>
              <td><?php echo $row->password; ?></td>
              <td><?php echo $row->no_hp; ?></td>
              <td><?php echo $row->alamat; ?></td>
              <td><?php echo $row->nama_rek; ?></td>
              <td><?php echo $row->no_rek; ?></td>
              <td><?php echo $row->recovery_code; ?></td>
              <td><?php echo $row->level_user; ?></td>
              <td><?php echo $row->poin_earned; ?></td>
              <td><?php echo $row->poin; ?></td>
              <td class="text-center">
                    <a href="<?php echo base_url(); ?>admin/user/edit/<?php echo $row->id_user; ?>" class="btn btn-info btn-sm"><i class="far fa-edit"></i> Edit</a>
                    <a href="<?php echo base_url(); ?>admin/user/delete/<?php echo $row->id_user; ?>"class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin ingin Menghapus ?')"><i class="far fa-trash-alt"></i> Hapus</a>
              </td>
						</tr>
						<?php
					}
					?>
  </table>
  </div>
</div>

 
