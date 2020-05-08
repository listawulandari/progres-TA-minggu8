<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css" <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="assets/images/logo.svg">
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>

                  <?php echo form_open('register'); ?>

                <form class="user">
                 <div class="form-group">
                    <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control form-control-lg" id="exampleInputNama" placeholder="Nama">
                     <p> <?php echo form_error('name'); ?> </p> 
                  </div>
                    <div class="form-group">
                      <input type="text" name="email" value="<?php echo set_value('email'); ?>"class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                       <p> <?php echo form_error('email'); ?> </p> 
                        </div>
                     <div class="form-group">
                    <input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control form-control-lg" id="exampleInputUsername" placeholder="Username">
                     <p> <?php echo form_error('username'); ?> </p> 
                  </div>
                <div class="form-group">
                    <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control form-control-lg" id="exampleInputPassword" placeholder="Password">
                     <p> <?php echo form_error('password'); ?> </p> 
                  </div>

                  <p> <?php echo form_error('password'); ?></p>
                   <div class="form-group">
                    <input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>" class="form-control form-control-lg" id="examplePasswordConf" placeholder="Confirm Password">
                    <p> <?php echo form_error('password_conf'); ?></p>
                    </div>
                      <div class="mb-4">
                        <div class="form-check">
                          <label class="form-check-label text-muted">
                            <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                          </div>
                        </div>
                  <div class="mt-3">
                    <button type="submit" name="btnSubmit" value="Daftar" class="btn btn-primary btn-user btn-block">SIGN UP</button>
                  </div>
                  <p><?php echo form_close();?></p>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="./login" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>