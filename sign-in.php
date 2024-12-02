<?php
require 'requrie/sign_in.php';//php file
include 'include/head.php';//header file
?>
<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <!--  -->
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                  <div class="row mt-3">
                    <div class="col-2 text-center ms-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-facebook text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center px-1">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-github text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center me-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-google text-white text-lg"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
              <?php if ($invalid): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Invalid Password.</strong> 
            <button type="button" class="close custom-close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="fs-5 custom-close ">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true" class="fs-5">&times;</span> <!-- Added fs-5 for larger font size -->
</button> 
    <?php if ($userNo): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Unknown Email .</strong>
            <button type="button" class="close custom-close " data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="fs-5 custom-close ">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <form action="sign-in.php" method="POST">
        <div class="input-group input-group-outline my-3">
            <label class="form-label"></label>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="input-group input-group-outline mb-3">
            <label class="form-label"></label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-check form-switch d-flex align-items-center mb-3">
            <input class="form-check-input" type="checkbox" id="rememberMe" name="rememberme">
            <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
        </div>
        <div class="text-center">
            <button type="submit" name="signup" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign in</button>
            <p class="mt-4 text-sm text-center">
                <a href="forgetpass/forget.php" class="text-primary text-gradient font-weight-bold">Forget Password</a>
            </p>
        </div>
        <p class="mt-4 text-sm text-center">
            Don't have an account?
            <a href="sign-up.php" class="text-primary text-gradient font-weight-bold">Sign up</a>
        </p>
    </form>
</div>

      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart" aria-hidden="true"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold text-white" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-12 col-md-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-white" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-white" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-white" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-white" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

  <style>
    .custom-close {
        font-size: 1.5rem; /* Increase size */
        color: #856404; /* Change color (Bootstrap warning color) */
        border: none; /* Remove default border */
        background: transparent; /* Make background transparent */
        cursor: pointer; /* Change cursor to pointer */
        transition: color 0.2s; /* Smooth color transition */
    }

    .custom-close:hover {
        color: #7c5c00; /* Darker shade on hover */
    }
</style>
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<?php

include 'include/jsfile.php';//jsfiles...
?>