<!-- Hero Start -->
<section class="hero">
    <div style="height: 100vh; background-image: url(<?php echo base_url('assets/home/images/hero.png') ?>); background-size: cover; background-position: center;" class="position-relative w-100">
        <div class="content text-white text-center position-absolute top-50 start-50 translate-middle">
            <h3 class="fs-1">Start Your Day With <span style="color: #ACBD6E;">My TR ecoprint</span></h3>
            <p class="fs-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita voluptates iste eveniet!</p>
            <a href="<?php echo site_url('main/katalog'); ?>"><button id="btn" class="mt-4 rounded-0">Shop Now</button></a>
        </div>
    </div>
</section>
<!-- Hero End -->

<!-- New Arrival Start -->
<section class="py-5">
    <div class="container px-4 px-lg-5" style="padding: 200px;">
        <h2 class="fw-bolder mb-4">New Arrival!</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">
            <?php foreach ($produk as $val) { ?>
                <div class="col mb-5">
                    <div class="card h-100 border-0">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?php echo base_url('/assets/foto_produk/' . $val->foto_produk); ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-0 mt-2">
                            <div>
                                <!-- Product name-->
                                <a href="<?php echo site_url('main/detailProduk/' . $val->id_produk); ?>" class=" text-decoration-none text-dark">
                                    <h5 class="fw-bolder"><?php echo $val->nama_produk; ?></h5>
                                </a>
                                <!-- Product price-->
                                <span>Rp </span><?php echo $val->harga_produk; ?>
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
        </div>
        <div class="d-grid justify-content-center mt-5">
            <a href="<?php echo site_url('main/katalog'); ?>"><button class="btn btn-secondary btn-outline-light border-secondary rounded-0" type="submit">View All Product</button></a>
        </div>
    </div>
</section>
<!-- New Arrival End -->

<!-- Our Collection Start -->
<section id="collection" class="py-5">
    <div class="container px-4 px-lg-5" style="padding-bottom: 300px;">
        <h2 class="fw-bolder mb-4">Our Collection!</h2>
        <div class="card-group justify-content-center">
            <div class="card-collection">
                <img src="<?php echo base_url('assets/home/images/Product 5.png') ?>" class="card-img" alt="">
                <div class="card-content">
                    <h3 class="card-title">Category Name</h3>
                    <button id="btn">All Product</button>
                </div>
            </div>
            <div class="card-collection">
                <img src="<?php echo base_url('assets/home/images/Product 6.png') ?>" class="card-img" alt="">
                <div class="card-content">
                    <h3 class="card-title">Category Name</h3>
                    <button id="btn">All Product</button>
                </div>
            </div>
            <div class="card-collection">
                <img src="<?php echo base_url('assets/home/images/Product 7.png') ?>" class="card-img" alt="">
                <div class="card-content">
                    <h3 class="card-title">Category Name</h3>
                    <button id="btn">All Product</button>
                </div>
            </div>
            <!-- <div class="card-collection">
                <img src="images/Product 5.png" class="card-img" alt="">
                <div class="card-content">
                    <h3 class="card-title">Category Name</h3>
                    <button id="btn">All Product</button>
                </div>
            </div> -->
        </div>
        <div class="d-grid justify-content-center mt-5">
            <a href="<?php echo site_url('main/katalog'); ?>"><button class="btn btn-secondary btn-outline-light border-secondary rounded-0" type="submit">View All Product</button></a>
        </div>
    </div>
</section>
<!-- Our Collection End -->