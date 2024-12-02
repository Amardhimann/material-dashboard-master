<?php

include 'include/head.php'; //Header files

?>
<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
       
         <?php
        //  include '../include/nav.php'//Nav-bar
         ?>
         
        
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          
          <div class="row">
            <div
              class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div
                class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                style="background-image: url('assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>

                  
                  <p class="mb-3">Enter your email and password to register</p>
                  <p class=""><?php
                  require 'requrie/sign_up.php'; //Php code file
                  global $insertResponse;
                  if($insertResponse){
                    echo '<div class="alert alert-danger small-alert alert-dismissible fade show" role="alert">
                  Use other email its registered.
                     <button type="button" class="close custom-close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';

                  }
                  ?> </p>
          

           



                </div>
                <div class="card-body">
                  <form action="" method="POST" >
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>

                      <input type="text" class="form-control" name="name" id="name"  placeholder="Name" required> <?php global $namereq;
                      global $nameErr;
                      echo $nameErr; 
                      echo $namereq; ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" required> 
                      
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[@#$%&*])(?=.*[A-Z]).{8,}" maxlength="20" required>
                      
                    </div>
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" name="signup" class="btn btn-lg bg-gradient-dark btn-lg w-100 mt-4 mb-0">Sign Up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="sign-in.php" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
<style>
    .small-alert {
        padding: 5px 10px; /* Adjust padding for height */
        font-size: 0.875rem; /* Adjust font size if needed */
    }
</style>
  <?php
 include 'include/jsfile.php';  //all js-files...
 ?>