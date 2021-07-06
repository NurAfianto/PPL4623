
<div class="card">
  <?php if($this->session->flashdata('success')!=null){?>
    <div class="alert alert-success alert-dismissible mb-3">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?=$this->session->flashdata('success')?>
    </div>
  <?php } ?>
  <div class="card-header">
    <h4>
      Klaim Hadiah
    </h4>
  </div>
  <div class="card-body">
  <table id="table1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th width="10px">No</th>
      <th>Nama</th>
      <th>Produk</th>
      <th>Poin</th>
      <th>Tanggal</th>
      <th class="text-center">Status</th>
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
      <td><?=$row->nama_user?></td>
      <td><?=$row->produk?></td>
      <td><?=$row->poin?></td>
      <td><?=date('d M Y',  strtotime($row->datetime))?></td>
      <td class="text-center">
        <?php if($row->status==1){?>
            <a onclick="return confirm('Yakin ingin Menyelesaikan Proses ini ?')" href="<?=site_url('admin/claim/update/'.$row->id)?>" class="btn btn-secondary">Diproses</a>
        <?php }else{?>
            <a class="btn btn-success">Selesai</a>
        <?php }?>
      </td>
    </tr>

    <?php
    }
    ?>
    </tbody>
  </table>
  </div>
</div>

 
