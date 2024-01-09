<!-- Cart Start -->
<section class="py-5">
    <div class="container px-4 px-lg-5" style="margin-top: 180px;">
        <div class="row">
            <div class="col-lg-8 table-responsive mb-5">
                <div class="border p-2 mb-3 fw-bold">My Cart</div>
                <table class="table text-center mb-0">
                    <thead class="bg-light text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Picture</th>
                            <th>Quantity</th>
                            <th>Weight</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php
                        $tot_berat = 0;
                        if ($this->cart->total_items() > 0) foreach ($cartItems as $item) {
                            $produk = $this->Madmin->detail_produk($item['id']);
                            $berat = $item['qty'] * $produk->berat_produk;

                            $tot_berat = $tot_berat + $berat;
                        ?>
                            <tr>
                                <td class="align-middle"><?php echo $item["name"]; ?></td>
                                <td class="align-middle"><?php echo $item["price"]; ?></td>
                                <td class="align-middle"><img src="<?php echo base_url('assets/foto_produk/' . $item['image']); ?>" alt="" style=" width: 50px;"> </td>
                                <td class="align-middle">
                                    <div class="input-group quantity mx-auto" style="width: 60px;">
                                        <input type="number" value="<?php echo $item["qty"]; ?>" min="1" 
                                        onchange="updateCartItem(this, '<?php echo $item['rowid']; ?>')" class="form-control form-control-sm bg-light text-center">
                                    </div>
                                </td>
                                <td class="align-middle"><?php echo $berat ?></td>
                                <td class="align-middle"><a href="<?php echo site_url('main/delete_cart/' . $item["rowid"]); ?>">
                                <button class="btn btn-sm btn-light border-dark"><i class="fa fa-times"></i></button></a></td>
                            </tr>
                        <?php }
                        else { ?>
                            <tr>
                                <td colspan="6">
                                    <p>Your cart is empty.....</p>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="card border rounded-0 mb-5">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h4 class="m-0 fw-bold">Cart Summary</h4>
                        </div>
                        <hr class="mt-4">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium"><span>Rp </span><?php echo number_format($this->cart->total()); ?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Tax</h6>
                            <h6 class="font-weight-medium"><span>Rp </span>0</h6>
                        </div>
                        <hr class="mt-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="fw-bold">Order Total</h6>
                            <h6 class="fw-bold"><span>Rp </span><?php echo number_format($this->cart->total()); ?></h6>
                        </div>
                        <div class="d-grid">
                            <form class="mb-3 mt-5" action="">
                                <div class="input-group rounded-0">
                                    <input type="text" class="form-control p-2 rounded-0" placeholder="Add Coupon Code">
                                    <!-- <span class="input-group-append">
                                        <button class="btn btn-outline-secondary bg-white border-start-0 border ms-n4 rounded-0" type="button">
                                            <i class='bx bxs-coupon'></i>
                                        </button>
                                    </span> -->
                                </div>
                            </form>
                            <a href="<?php echo site_url('main/cekout'); ?>" class="btn btn-block btn-lg text-white btn-secondary rounded-0">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cart End -->

<!-- Related items section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">You May Also Like</h2>
        <!-- <hr class=""> -->
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">
            <div class="col mb-5">
                <div class="card h-100 border-0">
                    <!-- Product image-->
                    <img class="card-img-top" src="<?php echo base_url('assets/home/images/Product 1.png') ?>" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-0 mt-2">
                        <div>
                            <!-- Product name-->
                            <h5 class="fw-bolder">Product Name</h5>
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
                            <h5 class="fw-bolder">Product Name</h5>
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
                            <h5 class="fw-bolder">Product Name</h5>
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
                            <h5 class="fw-bolder">Product Name</h5>
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

<script type="text/javascript" src="<?php echo base_url('assets/home/vendor/js/jquery-3.5.1.min.js'); ?>"></script>
<script>
    // Update item quantity
    function updateCartItem(obj, rowid) {
        $.get("<?php echo base_url('main/updateItemQty/'); ?>", {
            rowid: rowid,
            qty: obj.value
        }, function(resp) {
            if (resp == 'ok') {
                location.reload();
            } else {
                alert('Cart update failed, please try again.');
            }
        });
    }
</script>