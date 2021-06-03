
<div class="card">
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
      <td><?=$row->id_kategori?></td>
      <td><?=$row->harga?></td>
      <td><?=$row->poin?></td>
      <td class="text-center">
        <a href="<?=site_url('admin/produk/edit')?>" class="btn btn-info btn-sm"><i class="far fa-edit"></i> Edit</a>
        <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin ingin Menghapus ?')"><i class="far fa-trash-alt"></i> Hapus</a>
      </td>
    </tr>

    <?php
    }
    ?>
    </tbody>
  </table>
  </div>
</div>

 
