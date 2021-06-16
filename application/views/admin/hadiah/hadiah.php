
<div class="card">
  <div class="card-header">
    <h4>
      Hadiah
    </h4>
  </div>
  <div class="card-body">
  <div class="col-md-12 mb-3 text-left">
  <a href="<?=site_url('admin/hadiah/add')?>" class="btn btn-primary btn-md"><i class="fas fa-plus"></i> Add</a>
  </div>
  <table id="table1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>No</th>
      <th>Nama Hadiah</th>
      <th>Produk</th>
      <th>Poin Minimal</th>
      <th>Level Minimal</th>
      <th class="text-center">Action</th>
    </tr>
    </thead>
    <?php 
					$id = 1;
					foreach($Hadiah as $row)
					{
						?>
						<tr>
							<td><?php echo $id++; ?></td>
							<td><?php echo $row->nama; ?></td>
              <td><?php echo $row->produk; ?></td>
              <td><?php echo $row->poin; ?></td>
              <td><?php echo $row->level; ?></td>
              <td class="text-center">
                    <a href="<?php echo base_url(); ?>admin/hadiah/edit/<?php echo $row->id; ?>" class="btn btn-info btn-sm"><i class="far fa-edit"></i> Edit</a>
              </td>
						</tr>
						<?php
					}
					?>
  </table>
  </div>
</div>

 
