<div class="container-fluid">
    <h4>Data Pesanan</h4>
    
    <a href="<?php echo base_url("admin/dashboard_admin") ?>"><div class="btn btn-sm btn-danger mb-3 mt-3">Kembali</div></a>
    <a href="<?php echo base_url("admin/laporanpdf") ?>"><div class="btn btn-sm btn-success mb-3 mt-3">Cetak</div></a>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>No.</th>
            <th>Id History</th>
            <th>Nama Menu</th>
            <th>Jumlah</th>
        </tr>
        
        <?php 
        $no=1;
        foreach ($menu as $lpr) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $lpr->id_history ?></td>
                <td><?php echo $lpr->nama_menu ?></td>
                <td><?php echo $lpr->jumlah ?></td>
            </tr>

        <?php endforeach; ?>
        
    </table>
    
</div>