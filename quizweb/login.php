<?php
    include("config.php");
    if(isset($_POST["submit"])){
     extract($_POST);
     $obj->login($email,$pswd);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<style>
  body {
      font-family: times new roman;
      background-color: #f0f0f0;
    }
    .main{
    margin-top : 80px
  }
  .mainl{
    margin-top: 100px;
  }
    .container {
      margin-top: -100px;
    }
    .login-form {
      background-color: #ffffff;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
    }
    .social-btns {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .social-btns button {
      margin: 5px;
    }
    .divider {
      display: flex;
      align-items: center;
    }
    .divider::before,
    .divider::after {
      content: "";
      flex: 1;
      border-bottom: 1px solid #ccc;
    }
    .divider::before {
      margin-right: 15px;
    }
    .divider::after {
      margin-left: 15px;
    }
    .text-center-xs {
      text-align: center;
    }
    .text-danger {
      color: #dc3545;
    }
    .social-icons {
      font-size: 24px;
      margin-right: 4px;
    }
    .icons{
      font-size: 20px;
    }
</style>
<body>
<div class="container mt-5" style="margin-top:100px">  
<section class="vh-100 mt-5">
  <div class="main">
    <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-md-4 col-lg-4 col-xl-5">
            <img src="images/fav.jpg" class="img-fluid" alt="Sample image">
          </div>
      <div class="col-md-8 col-lg-6 col-xl-5 offset-xl-1">
        <form class="login-form" action="" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Login Now 😊</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fa-brands fa-facebook"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fa-brands fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fa-brands fa-linkedin"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-3 fw-bold">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" required name="email"/>
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3 fw-bold">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" required name="pswd"/>
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0 fw-bold">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
          <button type="submit" name="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? 
              <a href="signup.php" class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="mainl mt-5 d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

    <div class="icons">
  <a href="#" class="text-white me-4">
    <i class="fa-brands fa-facebook"></i>
  </a>
  <a href="" class="text-white me-4">
    <i class="fa-brands fa-twitter"></i>
  </a>
  <a href="" class="text-white me-4">
    <i class="fa-brands fa-google"></i>
  </a>
  <a href="" class="text-white">
    <i class="fa-brands fa-linkedin-in"></i>
  </a>
</div>

</section>

  </form>
</div>

</body>
</html>
