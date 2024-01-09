<div class="right_col" role="main">
    <div class="col mt-5">
        <div class="add">
            <div class="row">
                <a class="p-2 text-decoration-none align-items-center mt-2">
                    <h1 class="d-none d-sm-inline text-dark" style="font-size: 35px;">Order Management</h1>
                </a>
                <div class="col-lg-12 table-responsive mt-3">
                    <table class="table text-center mb-0 border">
                        <thead class="bg-light text-dark">
                            <tr>
                                <th>Id</th>
                                <th>Tanggal</th>
                                <th>Kode Barang</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            <?php $no = 1;
                            foreach ($order as $val) { ?>
                                <tr>
                                    <td class="align-middle"><?php echo $no; ?></td>
                                    <td class="align-middle"><?php echo $val->tgl_order; ?></td>
                                    <td class="align-middle"><?php echo $val->id_produk; ?></td>
                                    <td class="align-middle"><span>Rp </span><?php echo $val->harga; ?></td>
                                    </td>
                                    <td class="align-middle"><?php echo $val->jumlah; ?></td>
                                    <td class="align-middle"><span>Rp </span><?php echo $val->total_bayar; ?></td>
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