
<div class="card">
  <?php if($this->session->flashdata('success')!=null){?>
    <div class="alert alert-success alert-dismissible mb-3">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?=$this->session->flashdata('success')?>
    </div>
  <?php } ?>
  <div class="card-header">
    <h4>
      Log Transaksi
    </h4>
  </div>
  <div class="card-body">
  <table id="table1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th width="10px">No</th>
      <th>No Invoice</th>
      <th>Pembeli</th>
      <th>Total</th>
      <th>Tanggal</th>
      <th class="text-center">Detail</th>
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
      <td><?=$row->no_invoice?></td>
      <td><?=$row->nama?></td>
      <td>Rp. <?=number_format($row->total,0,",",".")?></td>
      <td><?=date('d M Y',  strtotime($row->tanggal))?></td>
      <td class="text-center">
        <a href="<?=site_url('admin/transaction/detail/'.$row->id)?>" class="btn btn-info">Detail</a>
      </td>
      <td class="text-center">
        <?php if($row->status==1){?>
            <a onclick="return confirm('Yakin ingin Menyelesaikan Proses ini ?')" href="<?=site_url('admin/transaction/update/'.$row->id)?>" class="btn btn-secondary">Diproses</a>
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

 
