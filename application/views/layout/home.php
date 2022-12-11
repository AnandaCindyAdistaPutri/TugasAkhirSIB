<!-- Masthead-->
            <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="arkatam.png" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="botol.png" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="baju.png" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="gantungan.png" class="d-block w-100" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                </div>
                <div class="masthead-heading text-uppercase"></div>
                <div class="masthead-heading text-uppercase"><br></div>
                
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="produk">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kategori</h2>
                    <h3 class="section-subheading text-muted">Pilih sesuai kebutuhan anda.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <a href="<?= site_url()?>/home#kategori" class="text-dark js-scroll-trigger">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-box fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Produk Barang</h4></a>
                        <p class="text-muted">Botol Minum, Gantungan kunci, dan lain-lain.</p>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= site_url()?>/home#kategori" class="text-dark">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-tshirt fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-4">Fashion</h4></a>
                        <p class="text-muted">Kemeja dan kaos.</p>
                    </div>
                    <div class="col-md-3">
                        <a href="<?= site_url()?>/home#kategori" class="text-dark">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-desktop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Jasa pembuatan aplikasi website</h4></a>
                        <p class="text-muted">Siakad, aplikasi akutansi, Tracer Study, dan Kasir.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- kategori Grid-->
        <section class="page-section bg-light" id="kategori">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Produk Arkatama Store</h2>
                    <h3 class="section-subheading text-muted">unggul dan berkualitas</h3>
                </div>
                <div class="row">
                    <?php 
                    foreach ($join as $row) { ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="kategori-item">
                            <a class="kategori-link" href="<?php echo site_url().'/home/get_detail/'.$row->produk_id;?>#detail">
                                <div class="kategori-hover">
                                    <div class="kategori-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url().'assets/images/'.$row->produk_gambar;?>" alt="" />
                            </a>
                            <div class="kategori-caption">
                                <div class="kategori-caption-heading"><?php echo $row->produk_judul;?></div>
                                <div class="small section-subheading text-muted"><?php echo $row->produk_kategori_nama;?></div>
                                <div class="kategori-caption-subheading text-muted">RP. <?php echo $row->produk_harga;?></div>
                            </div>
                            <!-- kategori-caption-subheading text-muted -->
                        </div>
                    </div>
                <?php }?>
                </div>
            </div>
        </section>