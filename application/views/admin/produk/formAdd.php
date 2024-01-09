<div class="right_col" role="main">
    <div class="col-9 col-lg-10 mt-5">
        <div class="col-md-12">
            <div class="col">
                <div class="py-2">
                    <a class="d-flex text-decoration-none align-items-center">
                        <h1 class="fs-4 d-none d-sm-inline text-dark">Form Product Management</h1>
                    </a>
                </div>
                <div class="add">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form-label-left input_mask form-horizontal" method="post" action="<?php echo site_url('produk/insert'); ?>" enctype="multipart/form-data">
                                <select class="mb-3 form-control rounded-0" name="id_kategori" id="">
                                    <option value="" class="">Pilih Kategori</option>
                                    <?php foreach ($kategori as $val) { ?>
                                        <option value="<?php echo $val->id_kategori; ?>"><?php echo $val->nama_kategori; ?></option>
                                    <?php } ?>
                                </select>
                                <div class="mb-3">
                                    <input type="text" name="nama_produk" value="<?php echo set_value('nama_produk'); ?>" class=" form-control rounded-0" id="exampleInputEmail1" placeholder="Product Name" aria-describedby="emailHelp">
                                    <?php echo form_error('nama_produk', '<span class="text-danger py-3">', '</span>'); ?>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="harga_produk" value="<?php echo set_value('harga_produk'); ?>" class=" form-control rounded-0" id="exampleInputEmail1" placeholder="Price" aria-describedby="emailHelp">
                                    <?php echo form_error('harga_produk', '<span class="text-danger py-3">', '</span>'); ?>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="stok" value="<?php echo set_value('stok'); ?>" class=" form-control rounded-0" id="exampleInputEmail1" placeholder="Stock" aria-describedby="emailHelp">
                                    <?php echo form_error('stok', '<span class="text-danger py-3">', '</span>'); ?>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="berat_produk" value="<?php echo set_value('berat_produk'); ?>" class=" form-control rounded-0" id="exampleInputEmail1" placeholder="Weight" aria-describedby="emailHelp">
                                    <?php echo form_error('berat_produk', '<span class="text-danger py-3">', '</span>'); ?>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="warna_produk" value="<?php echo set_value('warna_produk'); ?>" class=" form-control rounded-0" id="exampleInputEmail1" placeholder="Color" aria-describedby="emailHelp">
                                    <?php echo form_error('warna_produk', '<span class="text-danger py-3">', '</span>'); ?>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="ukuran_produk" value="<?php echo set_value('ukuran_produk'); ?>" class=" form-control rounded-0" id="exampleInputEmail1" placeholder="Size" aria-describedby="emailHelp">
                                    <?php echo form_error('ukuran_produk', '<span class="text-danger py-3">', '</span>'); ?>
                                </div>
                                <div class="mb-3 border" data-text="Picture 1">
                                    <input type="file" name="foto_produk" value="<?php echo set_value('foto_produk'); ?>" class=" form-control-file rounded-0 bg-white p-2">
                                    <?php echo form_error('foto_produk', '<span class="text-danger py-3">', '</span>'); ?>
                                </div>
                                <div class="mb-3">
                                    <textarea name="deskripsi_produk" value="<?php echo set_value('deskripsi_produk'); ?>" class=" form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Description"></textarea>
                                    <?php echo form_error('deskripsi_produk', '<span class="text-danger py-3">', '</span>'); ?>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-secondary mb-3 rounded-0 p-2 float-right">Add Product</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>