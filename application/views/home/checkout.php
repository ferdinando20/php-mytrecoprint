<!-- Cart Start -->
<section class="py-5">
    <div class="container px-4 px-lg-5" style="margin-top: 180px;">
        <div class="row">
            <div class="col-lg-8 table-responsive mb-5">
                <div class="border p-2 mb-3 fw-bold">Shipping Address</div>
                <?php
                echo form_open('main/simpancekout');
                // $no_order = date('Ymd') . strtoupper(random_string('alnum', 8));
                ?>
                <div class="row">
                    <div class="col-md-6 form-group mb-3">
                        <label>Nama Penerima</label>
                        <input name="nama_penerima" class="form-control" type="text" placeholder="John">
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label>Telepon</label>
                        <input name="tlp_penerima" class="form-control" type="text" placeholder="+123 456 789">
                    </div>
                    <div class="col-md-10 form-group mb-3">
                        <label>Alamat</label>
                        <input name="alamat" rows="3" class="form-control" type="text" placeholder="Diponegoro 123"></input>
                    </div>
                    <div class="col-md-2 form-group mb-3">
                        <label>kodepos</label>
                        <input name="kode_pos" class="form-control" type="text" id="kodepos" placeholder="123456">
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label>Provinsi</label>
                        <select class="form-control" name="provinsi">
                            <option value=""> Pilih Provinsi </option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label>Kota/Kabupaten</label>
                        <select class="form-control" name="kota">
                            <option value=""> Pilih Kota </option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label>Ekspedisi</label>
                        <select class="form-control" name="expedisi">
                            <option value=""> Pilih Kurir </option>
                            <option value="jne">JNE</option>
                            <option value="tiki">TIKI</option>
                            <option value="pos">POS Indonesia</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label>Paket Ekspedisi</label>
                        <select name="paket" class="form-control">
                            <option value=""> Pilih Paket </option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-lg text-white btn-secondary rounded-0">Payment</button>
                <!-- </form> -->
            </div>
            <div class="col-lg-4">
                <div class="card border rounded-0 mb-5">
                    <div class="card-body">
                        <thead>
                            <tr>
                                <th>
                                    <div class="d-flex justify-content-between mb-3 pt-1">
                                        <h4 class="m-0 fw-bold">Order Summary</h4>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $tot_berat = 0;
                            $total_bayar = 0;
                            foreach ($this->cart->contents() as $items) {
                                $produk = $this->Madmin->detail_produk($items['id']);
                                $berat = $items['qty'] * $produk->berat_produk;

                                $tot_berat = $tot_berat + $berat;
                                $total_bayar += $items['qty'] * $items['price'];
                            ?>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-between mb-3 pt-1">
                                            <h6 class="font-weight-medium"><span><?php echo $items['qty']; ?>&nbsp;</span><?php echo $items['name']; ?></h6>
                                            <h6 class="font-weight-medium"><span>Rp&nbsp;</span><?php echo number_format($items['price'], 0); ?></h6>
                                        </div>
                                    <td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <!-- <hr class="mt-4">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h4 class="m-0 fw-bold">Delivery</h4>
                    </div>
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Delivery Shipping</h6>
                        <h6 class="font-weight-medium">Yogyakarta</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Delivery to</h6>
                        <h6 class="font-weight-medium"><label id="kota"></label></h6>
                    </div> -->
                        <hr class="mt-4">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Amount</h6>
                            <h6 class="font-weight-medium"><span>Rp&nbsp;</span><?php echo number_format($this->cart->total(), 0); ?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping Cost</h6>
                            <h6 class="font-weight-medium"><label id="ongkir">Rp 0</label></h6>
                        </div>
                        <hr class="mt-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="fw-bold">Order Total</h6>
                            <h6 class="fw-bold"><label id="total_bayar">Rp&nbsp;</span><?php echo number_format($this->cart->total(), 0); ?></label></h6>
                        </div>
                        <!-- Simpan Transaksi -->
                        <!-- <input name="no_order" value="<?= $no_order ?>" hidden> -->
                        <input name="estimasi" hidden>
                        <input name="ongkir" hidden>
                        <input name="berat" value="<?= $tot_berat ?>" hidden><br>
                        <input name="grand_total" value="<?= $this->cart->total() ?>" hidden>
                        <input name="total_bayar" hidden>
                        <!-- end Simpan Transaksi -->
                        <!-- Simpan Rinci Transaksi -->
                        <div class="d-grid">
                            <form class="mb-3 mt-5" action="">
                                <div class="input-group rounded-0">
                                    <input type="text" class="form-control p-2 rounded-0" placeholder="Add Coupon Code">
                                </div>
                            </form>
                            <a href="<?php echo site_url('main/myorder/'); ?>" class="btn btn-block btn-lg text-white btn-secondary rounded-0">Payment</a>
                            <!-- <button class="btn btn-block btn-lg text-white btn-secondary rounded-0">Payment</button> -->
                        </div>
                    </div>
                    <?php echo form_close() ?>
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



<script>
    $(document).ready(function() {
        //masukkan data ke selec provinsi
        $.ajax({
            type: "POST",
            url: "<?= site_url('raja/provinsi') ?>",
            success: function(hasil_provinsi) {
                //console.log(hasil_provinsi);
                $("select[name=provinsi]").html(hasil_provinsi);
            }
        });

        //masukkan data ke selec kota
        $("select[name=provinsi]").on("change", function() {
            var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
            $.ajax({
                type: "POST",
                url: "<?= site_url('raja/kota') ?>",
                data: 'id_provinsi=' + id_provinsi_terpilih,
                success: function(hasil_kota) {
                    $("select[name=kota]").html(hasil_kota);
                }
            });
        });

        $("select[name=kota]").on("change", function() {
            $.ajax({
                type: "POST",
                url: "<?= site_url('raja/expedisi') ?>",
                success: function(hasil_expedisi) {
                    $("select[name=expedisi]").html(hasil_expedisi);
                }
            });
            // var kota = $("option:selected", this).attr('kota');
            // $("input[name=kota]").val(kota);
        });

        //mendapatkan data paket
        $("select[name=expedisi]").on("change", function() {
            //mendapatkan expedisi terpilih
            var expedisi_terpilih = $("select[name=expedisi]").val()
            // mendapatkan id kota tujuan terpilih
            var id_kota_tujuan_terpilih = $("option:selected", "select[name=kota]").attr('id_kota');
            //mengambil data ongkos kirim
            var total_berat = <?= $tot_berat ?>;

            $.ajax({
                type: "POST",
                url: "<?= site_url('raja/paket') ?>",
                data: 'expedisi=' + expedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih + '&berat=' + total_berat,
                success: function(hasil_paket) {
                    $("select[name=paket]").html(hasil_paket);
                }
            });
        });

        //
        $("select[name=paket]").on("change", function() {
            //menampilkan ongkir
            var dataongkir = $("option:selected", this).attr('ongkir');
            var reverse = dataongkir.toString().split('').reverse().join(''),
                ribuan_ongkir = reverse.match(/\d{1,3}/g);
            ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');

            $("#ongkir").html("Rp " + ribuan_ongkir)
            //menghitung total Bayar
            var data_total_bayar = parseInt(dataongkir) + parseInt(<?= $this->cart->total() ?>);
            var reverse2 = data_total_bayar.toString().split('').reverse().join(''),
                ribuan_total_bayar = reverse2.match(/\d{1,3}/g);
            ribuan_total_bayar = ribuan_total_bayar.join(',').split('').reverse().join('');
            $("#total_bayar").html("Rp " + ribuan_total_bayar);

            //estimasi dan ongkir
            var estimasi = $("option:selected", this).attr('estimasi');
            $("input[name=estimasi]").val(estimasi);
            $("input[name=ongkir]").val(dataongkir);
            $("input[name=total_bayar]").val(data_total_bayar);
        });
    });
</script>