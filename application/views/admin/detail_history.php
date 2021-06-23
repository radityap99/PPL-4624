<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-sm btn-success">No : 
        <?php echo $history->id ?></div></h4>
    
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Menu</th>
            <th>Nama Produk</th>
            <th>Jumlah Pesanan</th>
            <th>Harga</th>
            <th>Total Harga</th>
        </tr>
        <?php 

            $total=0;
            foreach ($pesanan as $psn) :
                $subtotal = $psn->harga * $psn->jumlah;
                $total += $subtotal;
        ?>
        
        <tr>
            <td><?php echo $psn->id_menu ?></td>
            <td><?php echo $psn->nama_menu ?></td>
            <td><?php echo $psn->jumlah ?></td>
            <td><?php echo number_format($psn->harga,0,',','.') ?></td>
            <td><?php echo number_format($subtotal,0,',','.') ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
</div>