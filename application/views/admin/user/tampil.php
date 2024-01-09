<div class="right_col" role="main">
    <div class="col mt-5">
        <div class="add">
            <div class="row">
                <a class="p-2 text-decoration-none align-items-center mt-2">
                    <h1 class="d-none d-sm-inline text-dark" style="font-size: 35px;">User Management</h1>
                </a>
                <div class="col-lg-12 table-responsive mt-3">
                    <table class="table text-center mb-0 border">
                        <thead class="bg-light text-dark">
                            <tr>
                                <th>Id</th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Post Code</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            <?php $no = 1;
                            foreach ($user as $val) { ?>
                                <tr>
                                    <td class="align-middle"><?php echo $no; ?></td>
                                    <td class="align-middle"><?php echo $val->username; ?></td>
                                    <td class="align-middle"><?php echo $val->nama_user; ?></td>
                                    <td class="align-middle"><?php echo $val->alamat_user; ?></td>
                                    <td class="align-middle"><?php echo $val->kodepos; ?></td>
                                    <td class="align-middle"><?php echo $val->tlp_user; ?></td>
                                    <td class="align-middle">
                                        <a href="<?php echo site_url('user/delete/' . $val->id_user); ?>"><button class="btn btn-sm fs-4"><i class='bx bx-trash'></i></button></a>
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