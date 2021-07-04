<div class="card">
  <div class="card-header">
    <h4>
      Banner
    </h4>
  </div>
  <div class="card-body">
  <div class="col-md-12 mb-3 text-left">
    <a href="<?=site_url('admin/banner/add')?>" class="btn btn-primary btn-md"><i class="fas fa-plus"></i> Add</a>
  </div>
  <table class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>No</th>
      <th>Nama Banner</th>
      <th class="text-center">Gambar</th>      
      <th>Keterangan</th>
      <th class="text-center">Action</th>
    </tr>
    </thead>
    <?php 
					$no = 1;
					foreach($Banner as $row)
					{
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row->nama_banner; ?></td>
              <td class="text-center"><?php if($row->gambar != null){  ?>
                <img src="<?php echo base_url('upload/banner/'.$row->gambar) ?>" width="64" />
                <?php }else { echo 'Tidak ada gambar'; }  ?>
              </td>
              <td><?php echo $row->keterangan; ?></td>
              <td class="text-center">
              <a href="<?=site_url('admin/banner/edit/'.$row->no)?>" class="btn btn-info btn-sm"><i class="far fa-edit"></i> Edit</a>
              <a href="<?php echo base_url(); ?>admin/banner/delete/<?php echo $row->no; ?>"class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin ingin Menghapus ?')"><i class="far fa-trash-alt"></i> Hapus</a>
              </td>
						</tr>
						<?php
					}
					?>
  </table>
  </div>
</div>

 
