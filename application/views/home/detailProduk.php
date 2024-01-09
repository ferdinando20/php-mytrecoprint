 <!-- Product section-->
 <section class="py-5" style="margin-top: 130px;">
     <div class="container px-4 px-lg-5 my-5">
         <div class="row gx-4 gx-lg-5 align-items-center">
             <div class="col-md-6">
                 <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
                     <div class="carousel-indicators">
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                     </div>
                     <div class="carousel-inner">
                         <div class="carousel-item active">
                             <img src="<?php echo base_url('/assets/foto_produk/' . $foto->foto_produk); ?>" class="d-block w-100" alt="...">
                         </div>
                         <div class="carousel-item">
                             <img src="<?php echo base_url('assets/home/images/Product 2.png') ?>" class="d-block w-100" alt="...">
                         </div>
                         <div class="carousel-item">
                             <img src="<?php echo base_url('assets/home/images/Product 3.png') ?>" class="d-block w-100" alt="...">
                         </div>
                     </div>
                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" onclick="$('#myCarousel').carousel('prev')">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Previous</span>
                     </button>
                     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" onclick="$('#myCarousel').carousel('next')">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Next</span>
                     </button>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="small mb-1">SKU: <?php echo $produk->id_produk; ?></div>
                 <h1 class="display-5 fw-bolder"><?php echo $produk->nama_produk; ?></h1>
                 <div class="fs-5 mb-3">
                     <span>Rp </span><?php echo $produk->harga_produk; ?>
                 </div>
                 <div class="d-flex mb-3">
                     <p class="text-dark font-weight-medium mb-0 mr-3">Sizes : </p>
                     <?php echo $produk->ukuran_produk; ?>
                 </div>
                 <div class="d-flex mb-4">
                     <p class="text-dark font-weight-medium mb-0 mr-3">Colors : </p>
                     <?php echo $produk->warna_produk; ?>
                 </div>
                 <hr class="mb-4">
                 <!-- <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p> -->
                 <div class="d-flex">
                     <input class="form-control text-center me-3 rounded-0" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                     <a href="<?php echo site_url('main/add_cart/' . $produk->id_produk); ?>"><button class="btn btn-outline-secondary border-secondary flex-shrink-0 btn-lg rounded-0" type="button"><i class='bx bx-plus'></i>Add to cart</button></a>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Description items section -->
 <div class="container">
     <div class="row px-xl-5">
         <div class="col">
             <ul class="nav nav-tabs" id="myTab" role="tablist">
                 <li class="nav-item" role="presentation">
                     <button class="nav-link active text-dark" id="home-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
                 </li>
                 <li class="nav-item" role="presentation">
                     <button class="nav-link text-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="profile" aria-selected="false">Reviews</button>
                 </li>
             </ul>
             <div class="tab-content" id="myTabContent">
                 <div class="tab-pane fade show active mt-4" id="description" role="tabpanel" aria-labelledby="description-tab">
                     <h4 class="mb-3"><?php echo $produk->nama_produk; ?></h4>
                     <h6 class="mb-3"><span>Rp </span><?php echo $produk->harga_produk; ?>
                         <p class="mt-3"><?php echo $produk->deskripsi_produk; ?></p>
                 </div>
                 <div class="tab-pane fade mt-4" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                     <div class="row">
                         <div class="col-md-6">
                             <h4 class="mb-4">1 review for "<?php echo $produk->nama_produk; ?>"</h4>
                             <div class="media mb-4">
                                 <img src="<?php echo base_url('assets/home/images/Product 1.png') ?>" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                 <div class="media-body">
                                     <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                     <div class="text-primary mb-2 fs-3 list-unstyled list-group list-group-horizontal">
                                         <li><i class="fa fa-star checked"></i></li>
                                         <li><i class="fa fa-star checked"></i></li>
                                         <li><i class="fa fa-star checked"></i></li>
                                         <li><i class="fa fa-star "></i></li>
                                         <li><i class="fa fa-star"></i></li>
                                     </div>
                                     <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <h4 class="mb-4">Leave a review</h4>
                             <small>Your email address will not be published. Required fields are marked *</small>
                             <div class="d-flex my-3">
                                 <p class="mb-0 mr-2">Your Rating * : </p>
                                 <div class="text-primary mx-2 mb-2 fs-5 list-unstyled list-group list-group-horizontal">
                                     <li><i class="fa fa-star checked"></i></li>
                                     <li><i class="fa fa-star checked"></i></li>
                                     <li><i class="fa fa-star checked"></i></li>
                                     <li><i class="fa fa-star "></i></li>
                                     <li><i class="fa fa-star"></i></li>
                                 </div>
                             </div>
                             <form>
                                 <div class="form-group my-2">
                                     <label for="message">Your Review *</label>
                                     <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                 </div>
                                 <div class="form-group my-2">
                                     <label for="name">Your Name *</label>
                                     <input type="text" class="form-control" id="name">
                                 </div>
                                 <div class="form-group my-2">
                                     <label for="email">Your Email *</label>
                                     <input type="email" class="form-control" id="email">
                                 </div>
                                 <div class="form-group mb-0">
                                     <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- Related items section-->
 <section class="py-5">
     <div class="container px-4 px-lg-5 mt-5">
         <h2 class="fw-bolder mb-4">Related products</h2>
         <hr class="">
         <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">
             <div class="col mb-5">
                 <div class="card h-100 border-0">
                     <!-- Product image-->
                     <img class="card-img-top" src="<?php echo base_url('assets/home/images/Product 1.png') ?>" alt="..." />
                     <!-- Product details-->
                     <div class="card-body p-0 mt-2">
                         <div>
                             <!-- Product name-->
                             <a class="text-decoration-none text-dark" href="<?php echo site_url('main/detailProduk'); ?>">
                                 <h5 class="fw-bolder">Product Name</h5>
                             </a>
                             <!-- Product price-->
                             Rp 130.000
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
             <div class="col mb-5">
                 <div class="card h-100 border-0">
                     <!-- Sale badge-->
                     <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> -->
                     <!-- Product image-->
                     <img class="card-img-top" src="<?php echo base_url('assets/home/images/Product 2.png') ?>" alt="..." />
                     <!-- Product details-->
                     <div class="card-body p-0 mt-2">
                         <div>
                             <!-- Product name-->
                             <a class="text-decoration-none text-dark" href="<?php echo site_url('main/detailProduk'); ?>">
                                 <h5 class="fw-bolder">Product Name</h5>
                             </a>
                             <!-- Product reviews-->
                             <!-- Product price-->
                             <!-- <span class="text-muted text-decoration-line-through">Rp 200.000</span> -->
                             Rp 130.000
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
             <div class="col mb-5">
                 <div class="card h-100 border-0">
                     <!-- Sale badge-->
                     <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> -->
                     <!-- Product image-->
                     <img class="card-img-top" src="<?php echo base_url('assets/home/images/Product 3.png') ?>" alt="..." />
                     <!-- Product details-->
                     <div class="card-body p-0 mt-2">
                         <div>
                             <!-- Product name-->
                             <a class="text-decoration-none text-dark" href="<?php echo site_url('main/detailProduk'); ?>">
                                 <h5 class="fw-bolder">Product Name</h5>
                             </a>
                             <!-- Product price-->
                             <!-- <span class="text-muted text-decoration-line-through">Rp 200.000</span> -->
                             Rp 130.000
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
             <div class="col mb-5">
                 <div class="card h-100 border-0">
                     <!-- Product image-->
                     <img class="card-img-top" src="<?php echo base_url('assets/home/images/Product 4.png') ?>" alt="..." />
                     <!-- Product details-->
                     <div class="card-body p-0 mt-2">
                         <div>
                             <!-- Product name-->
                             <a class="text-decoration-none text-dark" href="<?php echo site_url('main/detailProduk'); ?>">
                                 <h5 class="fw-bolder">Product Name</h5>
                             </a>
                             <!-- Product reviews-->
                             <!-- Product price-->
                             Rp 130.000
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
 </section>