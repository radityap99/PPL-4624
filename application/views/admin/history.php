<div class="container-fluid">
    <h4>Data Pemesan</h4>\

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id History</th>
            <th>Nama Pelanggan</th>
            <th>No. Meja</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($history as $his): ?>

        <tr>
            <td><?php echo $his->id ?></td>
            <td><?php echo $his->nama ?></td>
            <td><?php echo $his->no_meja ?></td>
            <td><div class="btn btn-sm btn-primary">Detail</div></td>
        </tr>

        <?php endforeach; ?>
    </table>
</div>