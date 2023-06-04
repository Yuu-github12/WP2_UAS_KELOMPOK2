<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <title>CarServ - Car Repair HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url()?>assets/css/car.css" rel="stylesheet">



    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body class="loader-active">

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="<?php echo base_url('customer/dashboard')?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>Rental Mobil</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            <li class="nav-item nav-link active"><a href="<?php echo base_url('customer/dashboard')?>">Beranda</a>
                                </li>
                                <?php if($this->session->userdata('nama')) { ?>
                                    <a href="<?php echo base_url('customer/data_mobil')?>" class="nav-item nav-link">Mobil</a>
                                    <a href="<?php echo base_url('customer/transaksi')?>" class="nav-item nav-link">Transaksi</a>
                                    <a href="<?php echo base_url('auth/logout')?>" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
                                        <i class="fas fa-user-circle me-2"></i>
                                        Welcome <?php echo $this->session->userdata('nama')?><span> | Logout</span>
                                        <i class="fas fa-sign-out-alt"></i>
                                    </a>
                                <?php } else { ?>
                                    <a href="<?php echo base_url('register')?>" class="nav-item nav-link">Register</a>
                                    <a href="<?php echo base_url('auth/login')?>" class="nav-item nav-link">Login</a>
                                <?php } ?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>

    </body>

</html>