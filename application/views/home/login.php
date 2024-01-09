<!-- LOGIN Form Start -->
<div class="vh-100 d-flex justify-content-center align-items-center mt-md-3">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <form class="mb-3 mt-md-4" action="<?php echo site_url('main/login_aksi'); ?>" method="post">
          <?php
          if ($this->session->flashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissible">';
            echo $this->session->flashdata('pesan');
            echo '</div>';
          }

          if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger alert-dismissible">';
            echo $this->session->flashdata('error');
            echo '</div>';
          }
          ?>

          <?php if (isset($error_message)) { ?>
            <?php echo $error_message; ?>
          <?php } ?>

          <?php echo form_error('username'); ?>
          <?php echo form_error('password'); ?>
          <h2 class="fw-bold mb-5 text-uppercase">Log In</h2>
          <div class="mb-3">
            <label for="username" class="form-label ">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label ">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="*******">
          </div>
          <div class="row mb-4">
            <div class="col-md-8">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
              </div>
            </div>
            <div class="col-md-4 text-end">
              <!-- Simple link -->
              <a href="#!">Forgot password?</a>
            </div>
          </div>
          <div class="d-grid">
            <button class="btn btn-outline-dark" type="submit">Log In</button>
          </div>
          <div class="d-grid mt-md-3">
            <p class="text-secondary text-center">or</p>
          </div>
          <div class="d-grid mt-md-1">
            <button class="btn btn-outline-dark" type="submit"><i class='bx bxl-google px-2'></i>Log in with Google</button>
          </div>
        </form>
        <div>
          <p class="mb-0 mt-md-4">Already have an account? <a href="register.html" class="text-primary fw-bold">Sign
              Up</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- LOGIN Form End -->