<div class="right_col" role="main">
  <div class="col mt-5">
    <div class="add">
      <div class="row">
        <a class="p-2 text-decoration-none align-items-center mt-2">
          <h1 class="d-none d-sm-inline text-dark" style="font-size: 35px;">Category Management</h1>
        </a>
        <div class="col-lg-12 table-responsive mt-3">
          <a href="<?php echo site_url('kategori/add'); ?>" class="btn btn-secondary p-3 mb-3"><i class='bx bx-plus me-2'></i>Add Category</a>
          <table class="table text-center mb-0 border">
            <thead class="bg-light text-dark">
              <tr>
                <th>Id</th>
                <th>Category Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody class="align-middle">
              <?php $no = 1;
              foreach ($kategori as $val) { ?>
                <tr>
                  <td class="align-middle"><?php echo $no; ?></td>
                  <td class="align-middle"><?php echo $val->nama_kategori; ?></td>
                  <td class="align-middle">
                    <a href="<?php echo site_url('kategori/get_by_id/' . $val->id_kategori); ?>"><button class="btn btn-sm fs-4"><i class="bx bx-pencil"></i></button></a>
                    <a href="<?php echo site_url('kategori/delete/' . $val->id_kategori); ?>"><button class="btn btn-sm fs-4"><i class='bx bx-trash'></i></button></a>
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
</div>
</div>