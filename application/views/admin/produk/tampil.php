<div class="right_col" role="main">
    <div class="col mt-5">
        <div class="add">
            <div class="row">
                <a class="p-2 text-decoration-none align-items-center mt-2">
                    <h1 class="d-none d-sm-inline text-dark" style="font-size: 35px;">Product Management</h1>
                </a>
                <div class="col-lg-12 table-responsive mt-3">
                    <a href="<?php echo site_url('produk/add'); ?>"><button class="btn btn-secondary p-3 mb-3"><i class='bx bx-plus me-2'></i>Add Product</button></a>
                    <table class="table text-center mb-0 border">
                        <thead class="bg-light text-dark">
                            <tr>
                                <th>Id</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Weight</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Picture</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            <?php $no = 1;
                            foreach ($produk as $val) { ?>
                                <tr>
                                    <td class="align-middle"><?php echo $no; ?></td>
                                    <td class="align-middle"><?php echo $val->nama_produk; ?></td>
                                    <td class="align-middle"><?php echo $val->nama_kategori; ?></td>
                                    <td class="align-middle"><?php echo $val->harga_produk; ?></td>
                                    <td class="align-middle"><?php echo $val->stok; ?></td>
                                    <td class="align-middle"><?php echo $val->berat_produk; ?><span> kg</span></td>
                                    <td class="align-middle"><?php echo $val->warna_produk; ?></td>
                                    <td class="align-middle"><?php echo $val->ukuran_produk; ?></td>
                                    <td class="align-middle"><img src="<?php echo base_url('/assets/foto_produk/' . $val->foto_produk); ?>" alt="" width="150" height="150"></td>
                                    <td class="align-middle"><?php echo $val->deskripsi_produk; ?></td>
                                    <td class="align-middle">
                                        <a href="<?php echo site_url('produk/get_by_id/' . $val->id_produk); ?>"><button class="btn btn-sm fs-4"><i class="bx bx-edit-alt"></i></button></a>
                                        <a href="<?php echo site_url('produk/delete/' . $val->id_produk); ?>"><button class="btn btn-sm fs-4"><i class='bx bx-trash'></i></button></a>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>