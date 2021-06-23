<div class="container-fluid">

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('uploads/slider1.png') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('uploads/slider2.png') ?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

     <div class="row mt-5 text-center">
        <?php foreach ($snack as $mnu) : ?>
            <div class="card mt-3 ml-4" style="width: 18rem;">
                <img src="<?php echo base_url(). '/uploads/' .$mnu->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $mnu->nama_menu ?></h5>
                    <small><?php echo $mnu->keterangan ?></small><br>
                    <span class="badge badge-pill badge-success mb-3">Rp <?php echo number_format($mnu->harga, 0, ',', '.') ?></span>
                    <?php echo anchor ('dashboard/tambah_keranjang/' .$mnu->id_menu,'<div class="btn btn-sm btn-primary">+</div>') ?>
                </div>
            </div>
        <?php endforeach ?>
     </div>
</div>