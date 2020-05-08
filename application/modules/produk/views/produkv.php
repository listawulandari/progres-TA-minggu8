<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Daftar Barang</title>
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
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="./dashboard">
            <img src="<?php echo base_url('assets/images/logo.svg" alt="logo" class="logo-dark')?>" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="<?php echo base_url('assets/images/logo-mini.svg" alt="logo')?>" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome berli dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-speech"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="" alt="" class=""> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark"> </p>
                    <p class="font-weight-light small-text">  </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="" alt="" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark"> </p>
                    <p class="font-weight-light small-text">  </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="" alt="" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark"></p>
                    <p class="font-weight-light small-text">  </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
              <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-3">
                  <i class="flag-icon flag-icon-us"></i>
                </div>
                <span class="profile-text font-weight-normal">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-us"></i> English </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-fr"></i> French </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ae"></i> Arabic </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ru"></i> Russian </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="<?php echo base_url('assets/images/faces/face28.jpg" alt="Profile image')?>"> <span class="font-weight-normal"> Berliana </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="" alt="">
                  <p class="mb-1 mt-3">Berliana Febriani</p>
                  <p class="font-weight-light text-muted mb-0">berlianaf36@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="<?php echo base_url('assets/images/faces/face28.jpg" alt="profile image')?>">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Berliana Febriani</p>
                  <p class="designation">Administrator</p>
                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./dashboard">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">DATA</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Produk</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="./produk">Data Produk</a></li>
                  <li class="nav-item"> <a class="nav-link" href="./tambah">Tambah Produk</a></li>
                </ul>
              </div>
            </li>
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Data Barang </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Barang</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form Barang</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Produk</h4>
                    <!-- <p class="card-description"> Add class <code>.table-striped</code>
                    </p> -->
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Gambar </th>
                          <th> Nama </th>
                          <th> Kategori </th>
                          <th> Harga </th>
                          <th> Deskripsi </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <?php
                        $no = 1;
                          foreach($produk as $p) {
                          ?>
                          <tbody>
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td><img src="<?php echo base_url('gambar/'.$p->gambar.''); ?>"height="50px" width="50px"></td>
                              <td><?php echo $p->nama_produk ?></td>
                              <td><?php echo $p->kategori ?></td>
                              <td><?php echo $p->harga ?></td>
                              <td><?php echo $p->deskripsi ?></td>
                              <td class="project-actions text-right">
                                <div class="btn btn-outline-primary btn-sm">
                                  <i class="fas fa-folder">
                                    <?php echo anchor('produk/edit/'.$p->id_produk,'Edit'); ?>
                                  </i>
                                </div>
                              <div class="btn btn-outline-danger btn-sm">
                                <i class="fas fa-folder">
                                  <?php echo anchor('produk/hapus/'.$p->id_produk,'Hapus'); ?>
                                  </i>
                                </div>
                              </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                        
                     <!--  <tbody>
                        <tr>
                          <td> 1 </td>
                          <td class="py-1">
                            <img src="assets/images/faces-clipart/pic-1.png" alt="image" />
                          </td>
                          <td> Asus Zenfone 4S </td>
                          <td> Handphone -->
                            <!-- <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> -->
                          <!-- </td>
                          <td> Rp. 1.800.000 </td>
                          <td> Tersedia </td>
                          <td> <a class="btn btn-outline-primary" href=#">Edit</a>
                              <a class="btn btn-outline-danger" href="#">Hapus</a> </td>
                        </tr>
                        <tr>
                          <td> 2 </td>
                          <td class="py-1">
                            <img src="assets/images/faces-clipart/pic-2.png" alt="image" />
                          </td>
                          <td> Messsy Adam </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $245.30 </td>
                          <td> July 1, 2015 </td>
                          <td> <a class="btn btn-outline-primary" href=#">Edit</a>
                            <a class="btn btn-outline-danger" href="#">Hapus</a>> </td>
                        </tr>
                        <tr>
                          <td> 3 </td>
                          <td class="py-1">
                            <img src="assets/images/faces-clipart/pic-3.png" alt="image" />
                          </td>
                          <td> John Richards </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $138.00 </td>
                          <td> Apr 12, 2015 </td>
                          <td> <a class="btn btn-outline-primary" href=#">Edit</a>
                            <a class="btn btn-outline-danger" href="#">Hapus</a> </td>
                        </tr>
                        <tr>
                          <td> 4 </td>
                          <td class="py-1">
                            <img src="../../images/faces-clipart/pic-4.png" alt="image" />
                          </td>
                          <td> Peter Meggik </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                          <td> <a class="btn btn-outline-primary" href=#">Edit</a>
                            <a class="btn btn-outline-danger" href="#">Hapus</a> </td>
                        </tr>
                        <tr>
                          <td> 5 </td>
                          <td class="py-1">
                            <img src="../../images/faces-clipart/pic-1.png" alt="image" />
                          </td>
                          <td> Edward </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 160.25 </td>
                          <td> May 03, 2015 </td>
                          <td> <a class="btn btn-outline-primary" href="#">Edit</a>
                            <a class="btn btn-outline-danger" href=#"onclick="return confirm('Yakin Hapus?')">Hapus</a> </td>
                        </tr>
                        <tr>
                          <td> 6 </td>
                          <td class="py-1">
                            <img src="../../images/faces-clipart/pic-2.png" alt="image" />
                          </td>
                          <td> John Doe </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 123.21 </td>
                          <td> April 05, 2015 </td>
                          <td> <a class="btn btn-outline-primary" href=#">Edit</a>
                            <a class="btn btn-outline-danger" href="#">Hapus</a> </td>
                        </tr>
                        <tr>
                          <td> 7 </td>
                          <td class="py-1">
                            <img src="../../images/faces-clipart/pic-3.png" alt="image" />
                          </td>
                          <td> Henry Tom </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 150.00 </td>
                          <td> June 16, 2015 </td>
                          <td> <a class="btn btn-outline-primary" href=#">Edit</a>
                            <a class="btn btn-outline-danger" href="#">Hapus</a> </td>
                        </tr> -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
             
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © | Berliana Febriani 2020 | All rights reserved.</span>
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
    <script src="<?php echo('assets/vendors/js/vendor.bundle.base.js')?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo('assets/js/off-canvas.js')?>"></script>
    <script src="<?php echo('assets/js/misc.js')?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>