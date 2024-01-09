<section>
    <!-- Side Bar Start -->
    <div class="container pt-5" style="margin-top: 160px;">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="mb-4 pb-4">
                    <div class="card border-top-0 border-start-0" style="width: 17rem;">
                        <div class="card-header fs-4">
                            Categories
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fs-6">
                                <?php foreach ($kategori as $val) { ?>
                                    <a href="<?php echo site_url('main/produk_by_kategori/' . $val->id_kategori); ?>" class="nav-item nav-link text-decoration-none text-dark"><?php echo $val->nama_kategori ?></a>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Price End -->
            </div>
            <!-- Shop Sidebar End -->

            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="border p-2 text-secondary" style="width: 590px !important;">Showing All 2 Result</div>
                            <div class="dropdown ml-4">
                                <button class="btn border dropdown-toggle" style="width: 280px !important;" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Default Sorting
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($produk as $val) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="<?php echo base_url('/assets/foto_produk/' . $val->foto_produk); ?>" alt="">
                                </div>
                                <div class="card-body border-left border-right p-0 pt-4 pb-3">
                                    <a class="text-decoration-none text-dark" href="<?php echo site_url('main/detailProduk/' . $val->id_produk); ?>">
                                        <h5 class="fw-bolder"><?php echo $val->nama_produk; ?></h5>
                                    </a>
                                    <div class="d-flex">
                                        <p><span>Rp </span><?php echo $val->harga_produk; ?></p>
                                        <p class="text-muted ml-2"><del>Rp 200.000</del></p>
                                    </div>
                                    <ul class="p-0">
                                        <li><i class="fa fa-star checked"></i></li>
                                        <li><i class="fa fa-star checked"></i></li>
                                        <li><i class="fa fa-star checked"></i></li>
                                        <li><i class="fa fa-star "></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="<?php echo base_url('assets/home/images/Product 2.png') ?>" alt="">
                            </div>
                            <div class="card-body border-left border-right p-0 pt-4 pb-3">
                                <a class="text-decoration-none text-dark" href="<?php echo site_url('main/detailProduk'); ?>">
                                    <h5 class="fw-bolder">Product Name</h5>
                                </a>
                                <div class="d-flex">
                                    <p>Rp 130.000</p>
                                    <p class="text-muted ml-2"><del>Rp 200.000</del></p>
                                </div>
                                <ul class="p-0">
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="<?php echo base_url('assets/home/images/Product 3.png') ?>" alt="">
                            </div>
                            <div class="card-body border-left border-right p-0 pt-4 pb-3">
                                <a class="text-decoration-none text-dark" href="<?php echo site_url('main/detailProduk'); ?>">
                                    <h5 class="fw-bolder">Product Name</h5>
                                </a>
                                <div class="d-flex">
                                    <p>Rp 130.000</p>
                                    <p class="text-muted ml-2"><del>Rp 200.000</del></p>
                                </div>
                                <ul class="p-0">
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="<?php echo base_url('assets/home/images/Product 4.png') ?>" alt="">
                            </div>
                            <div class="card-body border-left border-right p-0 pt-4 pb-3">
                                <a class="text-decoration-none text-dark" href="<?php echo site_url('main/detailProduk'); ?>">
                                    <h5 class="fw-bolder">Product Name</h5>
                                </a>
                                <div class="d-flex">
                                    <p>Rp 130.000</p>
                                    <p class="text-muted ml-2"><del>Rp 200.000</del></p>
                                </div>
                                <ul class="p-0">
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star "></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="<?php echo base_url('assets/home/images/Product 1.png') ?>" alt="">
                            </div>
                            <div class="card-body border-left border-right p-0 pt-4 pb-3">
                                <a class="text-decoration-none text-dark" href="<?php echo site_url('main/detailProduk'); ?>">
                                    <h5 class="fw-bolder">Product Name</h5>
                                </a>
                                <div class="d-flex">
                                    <p>Rp 130.000</p>
                                    <p class="text-muted ml-2"><del>Rp 200.000</del></p>
                                </div>
                                <ul class="p-0">
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star "></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="<?php echo base_url('assets/home/images/Product 2.png') ?>" alt="">
                            </div>
                            <div class="card-body border-left border-right p-0 pt-4 pb-3">
                                <a class="text-decoration-none text-dark" href="<?php echo site_url('main/detailProduk'); ?>">
                                    <h5 class="fw-bolder">Product Name</h5>
                                </a>
                                <div class="d-flex">
                                    <p>Rp 130.000</p>
                                    <p class="text-muted ml-2"><del>Rp 200.000</del></p>
                                </div>
                                <ul class="p-0">
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star "></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="<?php echo base_url('assets/home/images/Product 3.png') ?>" alt="">
                            </div>
                            <div class="card-body border-left border-right p-0 pt-4 pb-3">
                                <a class="text-decoration-none text-dark" href="<?php echo site_url('main/detailProduk'); ?>">
                                    <a href=""></a>
                                    <h5 class="fw-bolder">Product Name</h5>
                                </a>
                                <div class="d-flex">
                                    <p>Rp 130.000</p>
                                    <p class="text-muted ml-2"><del>Rp 200.000</del></p>
                                </div>
                                <ul class="p-0">
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star checked"></i></li>
                                    <li><i class="fa fa-star "></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
</section>