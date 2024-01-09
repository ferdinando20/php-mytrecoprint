<div class="right_col" role="main">
    <div class="container-fluid pt-1" style="margin-top: 200px;">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Settings</span></h2>
        </div>
        <div class="row px-xl-5 align-items-center justify-content-center">
            <div class="col-lg-6 mb-5 border bg-light" style=" position:center;">
                <div class="contact-form">
                    <form class="rounded-2 p-5 form-horizontal" method="post" action="<?php echo site_url('main/editProfile'); ?>">
                        <input type="hidden" name="id_user" class="form-control" value="<?php echo $user->id_user; ?>">
                        <h4 class="mb-4">Profile Photo</h4>
                        <div class="d-flex align-items-center">
                            <div class="flex-fill">
                                <img class="rounded-circle shadow-4-strong" alt="avatar2" src="<?php echo base_url('assets/home/images/user2.png'); ?>" height="150" width="150" />
                            </div>
                            <!-- <div class="flex-fill">
                                <img class="rounded-circle shadow-4-strong" alt="avatar2" src="<?php echo base_url('/assets/foto_profile/' . $user->foto_profile); ?>" height="150" width="150" />
                            </div> -->
                            <div class="flex-fill">
                                <!-- <button class="btn btn-outline-primary rounded-0 mb-2">Upload Photo</button> -->
                                <!-- <a href="#" class="text-dark text-decoration-none">Remove</a> -->
                                <input type="file" name="foto_profile" id="uploadBtn" class="d-none">
                                <label for="uploadBtn" class="d-inline-block text-light text-center bg-primary p-2 mx-2"><i class='bx bx-upload me-2 fs-5'></i>Upload File</label>
                                <!-- <a href="#" class="text-dark text-decoration-none">Remove</a> -->
                            </div>
                            <div class="vr me-5"></div>
                            <div class="flex-fill">
                                <h5 class="fs-5">Image requirments :</h5>
                                <div class="mt-3">
                                    <h6 class="fw-normal">1. Min. 400 x 400px</h6>
                                    <h6 class="fw-normal">2. Max. 2MB</h6>
                                    <h6 class="fw-normal">3. Your face or company logo</h6>
                                </div>
                            </div>
                        </div>

                        <h4 class="mb-4 mt-4">My Profile</h4>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control rounded-0" value="<?php echo $user->username; ?>" id="exampleInputEmail1" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control rounded-0" id="exampleInputEmail1" placeholder="*******">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" name="nama_user" class="form-control rounded-0" value="<?php echo $user->nama_user; ?>" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <input type="text" name="alamat_user" class="form-control rounded-0" value="<?php echo $user->alamat_user; ?>" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Post Code</label>
                            <input type="text" name="kodepos" class="form-control rounded-0" value="<?php echo $user->kodepos; ?>" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                            <input type="text" name="tlp_user" class="form-control rounded-0" value="<?php echo $user->tlp_user; ?>" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <a href="<?php echo site_url('user/get_by_id/' . $user->id_user); ?>"><button class="btn btn-secondary rounded-0 float-end mb-4">Change</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>