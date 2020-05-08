

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

    <style>
        .gambar {
          width: 250px;
          height: 250px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="">
            <img src="assets/images/logo.svg" alt="logo" class="logo-dark" />
          </a>
        <a class="navbar-brand brand-logo-mini" href=""><img src="assets/images/logo-mini.svg" alt="logo" /></a>
      </div>


        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex"></h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="icon-home">
                HOME
              </i>
              </a>
              </li>
                <li class="nav-item">
                  <a class="nav-link" href="">
                    <i class="icon-user">
                      ABOUT
                    </i>
                    </a>
                      </li>
                    <li class="nav-item">
                  <a class="nav-link" href="">
                    <i class="icon-credit-card">
                      CARA BAYAR
                    </i>
                    
                </a>
              </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="icon-basket-loaded">
                  CART
                </i>
              </a>
            </li>
              </ul>
                <form class="search-form d-none d-md-block" action="#">
                  <i class="icon-magnifier"></i>
                    <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                      </form>  
                    <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
                  <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-3">
                  <!-- <i class="flag-icon flag-icon-us"></i> -->
            </div>
        <span class="profile-text font-weight-normal"><?php echo anchor('register','REGISTER',''); ?></span>
              </a>
             
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <span class="profile-text font-weight-normal"><?php echo anchor('login','SIGN IN',''); ?></span>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      
  <?php
    foreach ($data->result() as $row) {
  ?>
 
  <div class="kotak">
    <div class="container">
        <div class="row row-cols-3">
          <div class="col">
    <form method="post" action="<?php echo base_url();?>shopping/tambah" method="post" accept-charset="utf8">
      <a href="#">
        <div class="gambar">
        <img class="img-thumbnail" src="<?php echo base_url() . 'assets/images/hp/'.$row->gambar; ?>"/></div></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#"><?php echo $row->nama_produk;?></a>
        </h4>
        <h5>Rp. <?php echo number_format($row->harga,0,",",".");?></h5>
        <p class="card-text"><?php echo $row->deskripsi;?></p>
      </div>
      <div class="card-footer">
        <a href="<?php echo base_url();?>shopping/detail_produk/<?php echo $row->id_produk;?>" class="btn btn-sm btn-default"><i class="icon-magnifier"></i> Detail
        </a>
        <input type="hidden" name="id" value="<?php echo $row->id_produk; ?>" />
        <input type="hidden" name="nama" value="<?php echo $row->nama_produk; ?>" />
        <input type="hidden" name="harga" value="<?php echo $row->harga; ?>" />
        <input type="hidden" name="gambar" value="<?php echo $row->gambar; ?>" />
        <input type="hidden" name="qty" value="1" />
        <button type="submit" class="btn btn-sm btnsuccess"><i class="icon-basket-loaded"></i>Beli</button>
      </div>
    </form>
  </div>
 </div>
</div>
</div>

 
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright | Berliana Febriani © 2020 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
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