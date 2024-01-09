<div class="right_col" role="main">
    <div class="col-9 col-lg-10 mt-5">
        <div class="col-md-12">
            <div class="col">
                <div class="py-2">
                    <a class="d-flex text-decoration-none align-items-center">
                        <h1 class="fs-4 d-none d-sm-inline text-dark">Profile</h1>
                    </a>
                </div>
                <div class="add">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="border rounded-2 p-5 form-horizontal" method="post" action="<?php echo site_url('settings/save'); ?>" enctype="multipart/form-data">
                                <?php if ($this->session->flashdata('success')) { ?>
                                    <div class="alert alert-success alert-dismissible fade show"><?php echo $this->session->flashdata('success'); ?><button type="button" class="fa -close" data-bs-dismiss="alert"></button></div>
                                <?php } ?>
                                <?php if ($this->session->flashdata('error')) { ?>
                                    <div class="alert alert-danger alert-dismissible fade show"><?php echo $this->session->flashdata('error'); ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
                                <?php } ?>
                                <h4 class="mb-4">My Profile</h4>
                                <?php foreach ($admin as $val) { ?>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="text" class="form-control rounded-0" id="exampleInputEmail1" placeholder="<?php echo $val->username; ?>" aria-describedby="emailHelp" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control rounded-0" id="exampleInputEmail1" placeholder="*******" aria-describedby="emailHelp">
                                        <!-- <span class="" onclick="password_show_hide();">
                                                    <i class="fa fa-eye" id="show_eye"></i>
                                                    <i class="fa fa-eye-slash d-none" id="hide_eye"></i>
                                                </span> -->
                                    </div>
                                <?php } ?>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary rounded-0 float-right">Save Change</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>