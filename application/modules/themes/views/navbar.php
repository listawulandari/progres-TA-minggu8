<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Beranda</title>
    <!-- plugins:css -->
   <link rel="stylesheet" href="<?php echo base_url('assets/vendors/simple-line-icons/css/simple-line-icons.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css')?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/select2/select2.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>"> <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png')?>" />



<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
    <h3 class="mb-0 font-weight-medium d-none d-lg-flex" style="font-family: Montserrat Alternates; color: #1e90ff;"><strong>BERLIANA STORE</strong></h3>
    <ul class="navbar-nav navbar-nav-right ml-auto">

      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>beranda">
              <i class="icon-home">
                Home
              </i>
              </a>
              </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()?>beranda/tentang">
                    <i class="icon-user">
                      Tentang
                    </i>
                    </a>
                      </li>
                    <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()?>beranda/cara_bayar" class="nav-link">
                    <i class="icon-credit-card">
                      Cara Bayar
                    </i>
                    
                </a>
              </li>
            <li class="nav-item">
              <a href="<?php echo base_url()?>shopping/tampil_cart" class="nav-link">
                <i class="icon-basket-loaded">
                  Keranjang
                </i>
              </a>
            </li>
              </ul>
                <form class="search-form d-none d-md-block" action="#">
                  <i class="icon-magnifier"></i>
                    <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                      </form> 
              <span class="mr-4 d-none d-lg-inline text-gray-800 large"> <?php echo anchor('login','Masuk',''); ?></span>
          <span class="mr-4 d-none d-lg-inline text-gray-800 large"> <?php echo anchor('register','Daftar'); ?></span>



      <!-- <form class="search-form d-none d-md-block" action="#">
        <i class="icon-magnifier"></i>
        <input type="search" class="form-control" placeholder="Search Here" title="Search here">
      </form>
      <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
      <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li> -->
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>

 <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js')?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url('assets/vendors/select2/select2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/typeahead.js/typeahead.bundle.min.js')?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('assets/js/off-canvas.js')?>"></script>
    <script src="<?php echo base_url('assets/js/misc.js')?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url('assets/js/typeahead.js')?>"></script>
    <script src="<?php echo base_url('assets/js/select2.js')?>"></script>
    <!-- End custom js for this page -->
  </body>
</html>