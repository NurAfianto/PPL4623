<div class="card">
  <div class="card-header">
    <h4>
      Kategori
    </h4>
  </div>
  <div class="card-body">
  <div class="col-md-12 mb-3 text-left">
    <a href="<?=site_url('admin/kategori/add')?>" class="btn btn-primary btn-md"><i class="fas fa-plus"></i> Add</a>
  </div>
  <table id="table1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>No</th>
      <th>Nama Kategori</th>
      <th class="text-center">Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>1</td>
      <td>Makanan</td>
      <td class="text-center">
        <a href="<?=site_url('admin/kategori/edit')?>" class="btn btn-info btn-sm"><i class="far fa-edit"></i> Edit</a>
        <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin ingin Menghapus ?')"><i class="far fa-trash-alt"></i> Hapus</a>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Minuman</td>
      <td class="text-center">
        <a href="<?=site_url('admin/kategori/edit')?>" class="btn btn-info btn-sm"><i class="far fa-edit"></i> Edit</a>
        <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin ingin Menghapus ?')"><i class="far fa-trash-alt"></i> Hapus</a>
      </td>
    </tr>
    </tbody>
  </table>
  </div>
</div>

 
