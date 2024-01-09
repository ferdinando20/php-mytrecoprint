<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo base_url('assets/admin/images/logo.png'); ?>" type="image/ico" />

  <title>My TR ecoprint</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- NProgress -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/nprogress/nprogress.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/iCheck/skins/flat/green.css'); ?>">
  <!-- Box Icon -->
  <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>

  <!-- bootstrap-progressbar -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css'); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/jqvmap/dist/jqvmap.min.css'); ?>">
  <!-- bootstrap-daterangepicker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css'); ?>">

  <!-- Custom Theme Style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/build/css/custom.min.css'); ?>">
</head>

<body>
  <!-- LOGIN Form Start -->
  <div class="vh-100 d-flex justify-content-center align-items-center mt-md-3">
    <div class="container">
      <div class="row d-flex justify-content-center text-secondary">
        <div class="col-8 col-md-6 col-lg-4 border px-5 py-5 bg-white">
          <form class="mb-3 mt-md-4" action="<?php echo site_url('adminpanel/login'); ?>" method="post">
            <h2 class="font-weight-bold mb-5 text-uppercase h3 text-center">Admin Panel</h2>
            <?php if (isset($error_message)) { ?>
              <?php echo $error_message; ?>
            <?php } ?>

            <?php echo form_error('username'); ?>
            <?php echo form_error('password'); ?>
            <div class="mb-3">
              <label for="email" class="form-label ">Email</label>
              <input type="text" name="username" class="form-control" id="email" placeholder="name">
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
              <div class="col-md-4 text-right">
                <!-- Simple link -->
                <a href="#!" class="text-secondary">Forgot password?</a>
              </div>
            </div>
            <!-- <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p> -->
            <div class="d-grid">
              <button class="btn btn-outline-dark btn-block" type="submit">Log In</button>
            </div>
          </form>
          <div>
            <p class="mb-0 mt-md-4">Don't have an account? <a href="<?php echo site_url('adminpanel/register'); ?>" class="text-primary fw-bold">Sign
                Up</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- LOGIN Form End -->
</body>

</html>