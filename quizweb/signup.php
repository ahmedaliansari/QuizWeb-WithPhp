<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .field {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
        }

        .links {
            text-align: center;
        }

        .links a {
            color: #333;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }
    </style>
<body>
      <div class="container">
        <div class="box form-box">

        <?php 
         if(isset($_POST['submit'])){
         include("config.php");
            $email = $_POST['email'];
            $username = $_POST['name'];
            $password = $_POST['pswd'];

         //verifying the unique email

         $verify_query = mysqli_query($conn,"SELECT email FROM registration WHERE Email='$email' && password = '$password'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{
            mysqli_query($conn,"INSERT INTO registration (name,email,Password) VALUES('$username','$email','$password')") or die("Erroe Occured");
            header("location:login.php");
         }
         }else{
         
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Buraq Tech SignUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }
    .main{
    margin-top : 150px
  }
  .mainl{
    margin-top: 100px;
  }
    .container {
      margin-top: -100px;
    }
    .signup-form {
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
  </style>
</head>
<body>
  <div class="container">
    <section class="vh-100 mt-5">
      <div class="main">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-4 col-lg-4 col-xl-5">
            <img src="images/fav.jpg" class="img-fluid" alt="Sample image">
          </div>
          <div class="col-md-8 col-lg-8 col-xl-5 offset-xl-1">
            <form class="signup-form" action="" method="post">
              <div class="social-btns">
                <p class="lead fw-normal mb-0 me-3"> <img src="images/favmini.jpg" class="img-fluid mb-4" width="60px" height="50px"> Sign up with</p>
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

              <div class="divider d-flex align-items-center my-3">
                <p class="text-center fw-bold mx-3 mb-0">Or</p>
              </div>

              <!-- Username input -->
              <div class="form-group mb-3">
                <label for="username">Your Name</label>
                <input type="text" id="username" class="form-control form-control-lg" placeholder="Enter a valid username" required name="name" />
              </div>

              <!-- Email input -->
              <div class="form-group mb-3">
                <label for="email">Email address</label>
                <input type="email" id="email" class="form-control form-control-lg" placeholder="Enter a valid email address" required name="email" />
              </div>

              <!-- Password input -->
              <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control form-control-lg" placeholder="Enter password" required name="pswd" />
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                  <input class="form-check-input me-2" type="checkbox" value="" id="rememberMe" />
                  <label class="form-check-label" for="rememberMe">
                    Remember me
                  </label>
                </div>
              </div>

              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" name="submit" class="btn btn-primary btn-lg"
                 style="padding-left: 2.5rem; padding-right: 2.5rem;">Signup</button>
                <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? 👉 <a href="login.php" class="link-danger">Login</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="mainl d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
          © 2023. All rights reserved. Buraq Tech
        </div>
        <!-- Right -->
        <div>
          <a href="#" class="text-white me-4">
            <i class="fa-brands fa-facebook social-icons"></i>
          </a>
          <a href="#" class="text-white me-4">
            <i class="fa-brands fa-twitter social-icons"></i>
          </a>
          <a href="#" class="text-white me-4">
            <i class="fa-brands fa-google social-icons"></i>
          </a>
          <a href="#" class="text-white">
            <i class="fa-brands fa-linkedin-in social-icons"></i>
          </a>
        </div>
        <!-- Right -->
      </div>
    </section>
    <?php } ?>
  </div>
</body>
</html>

  

