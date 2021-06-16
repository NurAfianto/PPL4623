
<div class="card">
  <div class="card-header">
    <h4>
      Produk Add
    </h4>
  </div>
  <div class="card-body">
  <div class="col-md-12">
    <a href="<?=site_url('admin/produk')?>" class="btn btn-warning btn-md"><i class="fas fa-arrow-left"></i> Back</a>
    <form action="<?=site_url('admin/produk/add')?>" method="POST" enctype="multipart/form-data">
    <div class="col-md-6 mx-auto mt-4">
        <div class="form-group">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Nama Produk">
        </div>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <select name="kategori" id="kategori" class="select2 form-control">
                <?php 
                
                foreach($kategori as $key=>$row)
                {
                ?>
                <option value="<?=$row->no?>"><?=$row->nama?></option>
                <?php 
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" placeholder="Harga">
        </div>
        <div class="form-group">
            <label for="poin">Poin</label>
            <input type="number" name="poin" id="poin" class="form-control" placeholder="Poin">
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" id="gambar" name="image" class="form-control">
        </div>
        <div class="form-group mt-4 d-flex justify-content-between">
            <button class="btn btn-default col-3"><i class="fas fa-undo"></i> Reset</button>
            <button name="submit" class="btn btn-primary col-3"><i class="fas fa-paper-plane"></i> Submit</button>
        </div>
    </div>
    </form>
  </div>

  </div>
</div>

 
