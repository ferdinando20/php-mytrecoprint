<div class="container-fluid pt-1" style="margin-top: 200px;">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Registrasi Member</span></h2>
    </div>
    <div class="row px-xl-5 align-items-center justify-content-center">
        <div class="col-lg-7 mb-5 border bg-light" style=" position:center;">
            <div class="contact-form">
                <div id="success"></div>
                <?php
                if ($this->session->flashdata('error') != '') {

                    echo '<div class="alert alert-danger" role="alert">';
                    echo $this->session->flashdata('error');
                    echo '</div>';
                }
                ?>
                <form class="p-5" action="<?php echo base_url('index.php/main/register_aksi'); ?>" method="post" enctype="multipart/form-data">
                    <div class="control-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control rounded-0" name="username" id="username" placeholder="Username" required="required" data-validation-required-message="Please enter your Username" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control rounded-0" name="password" id="password" placeholder="Password" required="required" data-validation-required-message="Please enter your Password" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <label for="nama_user">Nama Konsumen</label>
                        <input type="text" class="form-control rounded-0" name="nama_user" id="nama_user" placeholder="Nama Konsumen" required="required" data-validation-required-message="Please enter your Name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <label for="alamat_user">Alamat</label>
                        <textarea class="form-control rounded-0" rows="6" name="alamat_user" id="alamat_user" placeholder="Alamat" required="required" data-validation-required-message="Please enter your Alamat"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <label for="kodepos">Kode Pos</label>
                        <input type="text" class="form-control rounded-0" name="kodepos" id="kodepos" placeholder="Kode Pos" required="required" data-validation-required-message="Please enter your Kode Pos" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <label for="tlp_user">Telepon</label>
                        <input type="text" class="form-control rounded-0" name="tlp_user" id="tlp" placeholder="Telepon" required="required" data-validation-required-message="Please enter your Telepon" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <!-- <div class="control-group">
                            <label></label>
                            <input type="hidden" class="form-control" name="statusAktif" value="Y">
                        </div> -->
                    <div>
                        <button class="btn btn-secondary rounded-0 py-2 px-4 mb-5 float-end" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->