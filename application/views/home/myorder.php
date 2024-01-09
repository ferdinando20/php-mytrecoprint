<!-- Cart Start -->
<section class="py-5">
    <div class="container px-4 px-lg-5" style="margin-top: 180px;">
        <?php

        if ($this->session->flashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-check"></i>';
            echo $this->session->flashdata('pesan');
            echo '</h5>
</div>';
        }
        ?>
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active text-dark" id="custom-tabs-four-home-tab" data-bs-toggle="pill" data-bs-target="#custom-tabs-four-home" type="button" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Order</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link text-dark" id="custom-tabs-four-profile-tab" data-bs-toggle="pill" data-bs-target="#custom-tabs-four-profile" type="button" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Diproses</button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="custom-tabs-four-messages-tab" data-bs-toggle="pill" data-bs-target="#custom-tabs-four-messages" type="button" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Dikirim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="custom-tabs-four-settings-tab" data-bs-toggle="pill" data-bs-target="#custom-tabs-four-settings" type="button" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">History</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                        <!-- data pesanan order -->
                        <table class="table">
                            <tr>
                                <th scope="col">#</th>
                                <th>Tanggal</th>
                                <th>Expedisi</th>
                                <th>Total Bayar</th>
                                <th>Status Pembayaran</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($order as $key => $value) {
                                $total_bayar = number_format($value->total_bayar, 0);
                            ?>
                                <tr>
                                    <th><?php echo $no; ?></th>
                                    <td><?= $value->tgl_order ?></td>
                                    <td>
                                        <b><?= $value->expedisi ?></b><br>
                                        Paket : <?= $value->paket ?><br>
                                        Ongkir : <?= number_format($value->ongkir, 0) ?>
                                    </td>
                                    <td>Rp.<?= number_format($value->total_bayar, 0) ?></td>
                                    <td><?php if ($value->status_bayar == 0) { ?>
                                            <span class="align-middle badge bg-warning">Belum Bayar</span>
                                        <?php } else { ?>
                                            <span class="align-middle badge bg-success">Sudah Bayar</span><br>
                                            <span class="align-middle badge bg-primary">Menunggu Verifikasi</span>
                                        <?php } ?>
                                    </td>
                                    <td class="align-middle">
                                        <button id="btn-pay" data-amount="<?= $total_bayar ?>" class="btn btn-sm btn-flat btn-primary">Bayar</button>
                                    </td>
                                <?php } ?>
                                <!-- <td>
                                        <b><?= $value->expedisi ?></b><br>
                                        Paket : <?= $value->paket ?><br>
                                        Ongkir : <?= number_format($value->ongkir, 0) ?>
                                    </td>
                                    <td>
                                        <b>Rp.<?= number_format($value->total_bayar, 0) ?></b><br>
                                        <?php if ($value->status_bayar == 0) { ?>
                                            <span class="badge badge-warning">Belum Bayar</span>
                                        <?php } else { ?>
                                            <span class="badge badge-success">Sudah Bayar</span><br>
                                            <span class="badge badge-primary">Menunggu Verifikasi</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($value->status_bayar == 0) { ?>
                                            <a href="<?= base_url('pesanan_saya/bayar/' . $value->id_transaksi) ?>" class="btn btn-sm btn-flat btn-primary">Bayar</a>
                                        <?php } ?>

                                    </td> -->
                                </tr>


                        </table>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                        <!-- data pesanan diproses -->
                        <table class="table">
                            <tr>
                                <th>No Order</th>
                                <th>Tanggal</th>
                                <th>Total Bayar</th>
                                <th>Status Pembayaran</th>
                                <!-- <th>Action</th> -->

                            </tr>
                            <!-- <?php foreach ($diproses as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->no_order ?></td>
                                    <td><?= $value->tgl_order ?></td>
                                    <td>
                                        <b><?= $value->expedisi ?></b><br>
                                        Paket : <?= $value->paket ?><br>
                                        Ongkir : <?= number_format($value->ongkir, 0) ?>
                                    </td>
                                    <td>
                                        <b>Rp.<?= number_format($value->total_bayar, 0) ?></b><br>
                                        <span class="badge badge-success">Terverifikasi</span><br>
                                        <span class="badge badge-primary">Diproses/Dikemas</span>

                                    </td>

                                </tr>
                            <?php } ?> -->

                        </table>

                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                        <table class="table">
                            <tr>
                                <th>No Order</th>
                                <th>Tanggal</th>
                                <th>Total Bayar</th>
                                <th>Status Pembayaran</th>
                                <!-- <th>Action</th> -->
                                <th>No Resi</th>

                            </tr>
                            <!-- <?php foreach ($dikirim as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->no_order ?></td>
                                    <td><?= $value->tgl_order ?></td>
                                    <td>
                                        <b><?= $value->expedisi ?></b><br>
                                        Paket : <?= $value->paket ?><br>
                                        Ongkir : <?= number_format($value->ongkir, 0) ?>
                                    </td>
                                    <td>
                                        <b>Rp.<?= number_format($value->total_bayar, 0) ?></b><br>
                                        <span class="badge badge-success">Dikirim</span><br>
                                    </td>
                                    <td>
                                        <h5><?= $value->no_resi ?><br>
                                            <button data-toggle="modal" data-target="#diterima<?= $value->id_transaksi ?>" class="btn btn-primary btn-xs btn-flat">Diterima</button>
                                        </h5>
                                    </td>
                                </tr>
                            <?php } ?> -->
                        </table>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                        <table class="table">
                            <tr>
                                <th>No Order</th>
                                <th>Tanggal</th>
                                <th>Total Bayar</th>
                                <th>Status Pembayaran</th>
                                <!-- <th>Action</th> -->
                                <th>No Resi</th>

                            </tr>
                            <!-- <?php foreach ($selesai as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->no_order ?></td>
                                    <td><?= $value->tgl_order ?></td>
                                    <td>
                                        <b><?= $value->expedisi ?></b><br>
                                        Paket : <?= $value->paket ?><br>
                                        Ongkir : <?= number_format($value->ongkir, 0) ?>
                                    </td>
                                    <td>
                                        <b>Rp.<?= number_format($value->total_bayar, 0) ?></b><br>
                                        <span class="badge badge-success">Selesai</span><br>
                                    </td>
                                    <td>
                                        <h5><?= $value->no_resi ?><br>
                                        </h5>
                                    </td>
                                </tr>
                            <?php } ?> -->
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card -->
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

<form id="payment-form" method="post" action="<?= site_url() ?>/snap/finish">
    <input type="hidden" name="result_type" id="result-type" value=""></div>
    <input type="hidden" name="result_data" id="result-data" value=""></div>
</form>

<script type="text/javascript">
    $('#btn-pay').click(function(event) {
        var grossamount = $(this).data('grossamount');
        event.preventDefault();
        $(this).attr("disabled", "disabled");

        $.ajax({
            url: "<?= site_url('snap/token') ?>",
            cache: false,
            data: {
                grossamount: grossamount,
            },

            success: function(data) {
                //location = data;

                console.log('token = ' + data);

                var resultType = document.getElementById('result-type');
                var resultData = document.getElementById('result-data');

                function changeResult(type, data) {
                    $("#result-type").val(type);
                    $("#result-data").val(JSON.stringify(data));
                    //resultType.innerHTML = type;
                    //resultData.innerHTML = JSON.stringify(data);
                }

                snap.pay(data, {

                    onSuccess: function(result) {
                        changeResult('success', result);
                        console.log(result.status_message);
                        console.log(result);
                        $("#payment-form").submit();
                    },
                    onPending: function(result) {
                        changeResult('pending', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    },
                    onError: function(result) {
                        changeResult('error', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    }
                });
            }
        });
    });
</script>