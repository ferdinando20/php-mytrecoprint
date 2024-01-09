<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="images/logo.png" rel="icon">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/vendor/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/vendor/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="icon" href="<?php echo base_url('assets/admin/images/logo.png'); ?>" type="image/ico" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>My TR ecoprint</title>
</head>

<body>
    <header>
        <!-- Navigation Top Start -->
        <div class="p-3 text-center bg-white border-bottom fixed-top">
            <div class="container-fluid">
                <div class="row">
                    <!-- Left elements -->
                    <div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-3 mb-md-0">
                        <a href="#!" class="ms-md-2">
                            <img src="<?php echo base_url('assets/home/images/logo.png'); ?>" height="70" />
                        </a>
                    </div>
                    <!-- Left elements -->

                    <!-- Center elements -->
                    <div class="col-md-4 p-2">
                        <!-- <form class="d-flex input-group w-auto my-auto mb-3 mb-md-0">
                  <input autocomplete="off" type="search" class="form-control rounded" placeholder="Search" />
              </form> -->
                        <div class="input-group">
                            <input class="form-control border-end-0 border rounded-0 text-secondary" type="text" placeholder="Search" id="example-search-input">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary bg-white border-start-0 border ms-n3 rounded-0" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <!-- Center elements -->

                    <!-- Right elements -->
                    <div class="col-md-4 d-flex justify-content-center justify-content-md-end align-items-center">
                        <div class="d-flex pb-2">
                            <?php if (empty($this->session->userdata('User'))) { ?>
                                <a class="text-reset me-3" href="<?php echo site_url('main/mycart') ?>">
                                    <span><i class="fs-1 bx bx-cart"></i></span>
                                </a>
                                <a class="text-reset me-2" href="#">
                                    <i class="fs-1 bx bx-user-circle"></i>
                                </a>
                                <div class="dropdown d-flex justify-content-center justify-content-md-end align-items-center">
                                    <a href="#" class="dropdown-toggle text-decoration-none text-dark" role="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                        User
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <li><a href="<?php echo site_url('main/login') ?>" class="dropdown-item" type="button">Login</a></li>
                                        <li><a href="<?php echo site_url('main/register'); ?>" class="dropdown-item" type="button">Register</a></li>
                                    </ul>
                                </div>
                            <?php } else { ?>
                                <a class="text-reset me-3" href="<?php echo site_url('main/mycart') ?>">
                                    <span><i class="fs-1 bx bx-cart"></i></span>
                                </a>
                                <a class="text-reset me-2" href="<?php echo site_url('main/profile') ?>">
                                    <img class="rounded-circle shadow-4-strong" alt="avatar2" src="<?php echo base_url('assets/home/images/profile.png'); ?>" height="45" width="45" />
                                </a>
                                <div class="dropdown d-flex justify-content-center justify-content-md-end align-items-center">
                                    <a href="#" class="dropdown-toggle text-decoration-none text-dark" role="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                        User
                                    </a>
                                    <!-- <a href="#" class="dropdown-toggle text-decoration-none text-dark" role="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false" value="<?php echo $user->id_user; ?>">
                                        <?php echo $user->nama_user; ?>
                                    </a> -->
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <li><a href="<?php echo site_url('main/profile') ?>" class="dropdown-item" type="button">Profile</a></li>
                                        <li><a href="<?php echo site_url('main/myorder') ?>" class="dropdown-item" type="button">My Order</a></li>
                                        <li><a href="<?php echo site_url('main/logout'); ?>" class="dropdown-item" type="button">Logout</a></li>
                                    </ul>
                                </div>
                            <?php } ?>
                            <!-- Right elements -->
                        </div>
                    </div>
                </div>
                <!-- Navigation Top End -->

                <!-- Navigation Bottom Start -->
                <nav class="navbar navbar-expand-lg" style="background-color: #7E8A51;">
                    <!-- Container wrapper -->
                    <div class="container-fluid justify-content-center justify-content-md-between">
                        <!-- Left links -->

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="<?php echo site_url('main'); ?>" class="nav-item nav-link active text-white">HOME</a>
                                <a href="<?php echo site_url('main/katalog'); ?>" class="nav-item nav-link active text-white">SHOP</a>
                                <a href="#" class="nav-item nav-link text-white">SALE</a>
                                <a href="#" class="nav-item nav-link text-white">ARTPRINT</a>
                                <a href="<?php echo site_url('main/about'); ?>" class="nav-item nav-link text-white">ABOUT</a>
                            </div>
                        </div>
                        <!-- Left links -->
                    </div>
                    <!-- Container wrapper -->
                </nav>
                <!-- Navigation Bottom End -->
    </header>