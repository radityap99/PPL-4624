<div class="container-fluid">

    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahmenu"><i class="fas fa-plus fa-sm"></i>Tambah</button>
    <a href="<?php echo base_url("admin/dashboard_admin") ?>"><div class="btn btn-sm btn-danger mb-3 -3">Kembali</div></a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Makanan</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th colspan="3">Aksi</th>
            
        </tr>  

        <?php
        $no=1;
        foreach($update as $mnu) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $mnu->nama_menu ?></td>
            <td><?php echo $mnu->keterangan ?></td>
            <td><?php echo $mnu->kategori ?></td>
            <td><?php echo $mnu->harga ?></td>
            <td><?php echo anchor('admin/update_menu/edit/' .$mnu->id_menu, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
            <td><?php echo anchor('admin/update_menu/hapus/' .$mnu->id_menu, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
        </tr>

        <?php endforeach; ?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahmenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
        <a href="<?php echo base_url("admin/update_menu") ?>"><div type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</div></a>
        
            
      </div>
      <div class="modal-body">
            <form action="<?php echo base_url(). 'admin/update_menu/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Menu</label>
                    <input type="text" name="nama_menu" class="form-control">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" name="kategori" class="form-control">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control">
                </div>
                <div class="form-group">
                    <label>Gambar Produk</label><br>
                    <input type="file" name="gambar" class="form-control" accept="image/*">
                </div>
            
      </div>
      <div class="modal-footer">
      <a href="<?php echo base_url("admin/update_menu") ?>"><div type="button" class="btn btn-danger">Tutup</div></a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>