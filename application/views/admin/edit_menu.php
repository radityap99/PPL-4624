<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT MENU</h3>

    <?php foreach($menu as $mnu) : ?>

        <form method="post" action="<?php echo base_url().'admin/update_menu/update' ?>">
            <div class="for-group">
                <label>Nama Menu</label>
                <input type="text" name="nama_menu" class="form-control" value="<?php echo $mnu->nama_menu ?>">
            </div>

            <div class="for-group">
                <label>Keterangan</label>
                <input type="hidden" name="id_menu" class="form-control" value="<?php echo $mnu->id_menu ?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $mnu->keterangan ?>">
            </div>

            <div class="for-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $mnu->harga ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
        </form>

    <?php endforeach; ?>

</div>