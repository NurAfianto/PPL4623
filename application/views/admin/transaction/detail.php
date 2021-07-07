<div class="card">
    <div class="card-header">
        <h4>
            Detail Transaksi
        </h4>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                No. Invoice : <?= $invoice->no_invoice?>
            </div>
        </div>

        <table class="table table-bordered">
            <thead><tr>
                <td>No</td>
                <td>Produk</td>
                <td>Jumlah</td>
                <td>Harga</td>
                <td>Subtotal</td>
            </tr></thead>
            <tbody>
                <?php $no=1;foreach($transaction as $produk) :?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$produk->nama_produk?></td>
                    <td><?=$produk->jumlah?></td>
                    <td><?=$produk->harga?></td>
                    <td><?php $sub=$produk->harga*$produk->jumlah; echo $sub?></td>
                </tr>
                <?php endforeach;?>
                <tr>
                    <td colspan="4" align="right">Total</td>
                    <td><?=$invoice->total?></td>
                </tr>
            </tbody>
        </table>
        <a href="<?php echo base_url('admin/transaction')?>"><div class="btn btn-sm btn-info float-right mt-4">Kembali</div></a>
    </div>
</div>