
<div class="card">
  <?php if($this->session->flashdata('success')!=null){?>
    <div class="alert alert-success alert-dismissible mb-3">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?=$this->session->flashdata('success')?>
    </div>
  <?php } ?>
  <div class="card-header">
    <h4>
      Produk
    </h4>
  </div>
  <div class="card-body">
  <div class="col-md-12 mb-3 text-left">
    <a href="<?=site_url('admin/produk/add')?>" class="btn btn-primary btn-md"><i class="fas fa-plus"></i> Add</a>
  </div>
  <table id="table1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Kategori</th>
      <th>Gambar</th>
      <th>Harga</th>
      <th>Poin</th>
      <th class="text-center">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    $no = 1;
    foreach($data as $key=>$row)
    {
    ?>
    <tr>
      <td><?=$no++?></td>
      <td><?=$row->nama_produk?></td>
      <td><?=$row->nama?></td>
      <td class="text-center"><img src="<?php echo base_url('upload/product/'.$row->gambar) ?>" width="64" />
			</td>
      <td><?=$row->harga?></td>
      <td><?=$row->poin?></td>
      <td class="text-center">
        <a href="<?=site_url('admin/produk/edit/'.$row->id_produk)?>" class="btn btn-info btn-sm"><i class="far fa-edit"></i> Edit</a>
        <a href="<?=site_url('admin/produk/delete/'.$row->id_produk)?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin ingin Menghapus ?')"><i class="far fa-trash-alt"></i> Hapus</a>
      </td>
    </tr>

    <?php
    }
    ?>
    </tbody>
  </table>
  </div>
</div>

 
