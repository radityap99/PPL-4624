<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) 
                {
                    foreach($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h5>Total Pesanan Anda : Rp ".number_format($grand_total, 0, ',','.');
                 ?>            
            </div><br><br>
            <h3>Input Data Customer</h3>
            
            <form method="post" action="<?php echo base_url() ?> dashboard/proses_pesanan">
                <div class="form-group">
                    <label>Nama Customer</label>
                    <input type="text" id = "nama" name="nama" placeholder="Nama Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>No. Meja</label>
                    <input type="text" id="no_meja" name="no_meja" placeholder="Nomor Tempat Duduk" class="form-control">
                </div>
            </form>
            <a href="<?php echo base_url('dashboard/proses_pesanan') ?>"><div 
            class="btn btn-sm btn-primary">Pesan</div></a>  

            <?php 
             }else{
                 echo "<h5>Anda Belum Memiliki Pesanan";
             }
            ?>  

        </div>
        <div class="col-md-2"></div>
    </div>
</div>