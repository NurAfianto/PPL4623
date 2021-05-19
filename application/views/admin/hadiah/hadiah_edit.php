
<div class="card">
  <div class="card-header">
    <h4>
      Hadiah Edit
    </h4>
  </div>
  <div class="card-body">
  <div class="col-md-12">
  <a href="<?=site_url('admin/hadiah')?>" class="btn btn-warning btn-md"><i class="fas fa-arrow-left"></i> Back</a>
    <form action="">
    <div class="col-md-6 mx-auto mt-4">
        <div class="form-group">
            <label for="nama_hadiah">Nama Hadiah</label>
            <input type="text" name="nama_hadiah" id="nama_hadiah" class="form-control" placeholder="Nama Hadiah">
        </div>
        <div class="form-group">
            <label for="produk">Produk</label>
            <select name="produk" id="produk" class="select2 form-control">
                <option value="makanan">Kebab</option>
                <option value="makanan">Nescafe</option>
                <option value="makanan">Teh Tarik</option>
            </select>
        </div>
        <div class="form-group">
            <label for="poin_minimal">Poin Minimal</label>
            <input type="number" name="poin_minimal" id="poin_minimal" class="form-control" placeholder="Poin Minimal">
        </div>
        <div class="form-group">
            <label for="level">Level</label>
            <select name="level" id="level" class="select2 form-control">
                <option value="level_minimal">Platinum</option>
                <option value="level_minimal">Gold</option>
                <option value="level_minimal">Silver</option>
                <option value="level_minimal">Bronze</option>
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

 
