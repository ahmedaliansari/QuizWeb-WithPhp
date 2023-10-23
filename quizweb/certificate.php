<?php
include ("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Buraq Tech Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif; 
    }
    .container {
      /* Remove top margin */
      margin-top: 0px;
        
    }
    .certificate {
      width: 600px;
      max-width: 100%;
      margin: 0 auto;
      border: 1px solid #ccc;
      padding: 20px;
      text-align: center;
      background : #ffffff;
      z-index : 1;
    }
    .logo {
      width: 100px;
      height: 100px;
      margin-bottom: 10px;
    }
    .signature {
      width: 250px;
      height: 50px;
      margin-top: 10px;
    }
    .btn-floating {
      outline: none;
    }
    .form-outline {
      position: relative;
    }
    .form-outline input {
      border: 2px solid #ddd;
      border-radius: 8px;
      transition: border-color 0.3s ease;
    }
    .form-outline input:focus {
      border-color: #6c63ff;
      box-shadow: 0 0 0 2px #6c63ff80;
    }
    .btn-primary {
      transition: transform 0.2s ease;
    }
    .btn-primary:hover {
      transform: scale(1.05);
    }
    .back img{
        width : 100%;
        margin-top: -34rem;
        z-index : 0;
    }
    .footer{
        z-index : 1;
        margin-top: -7rem;
    }
    .last{
        margin : 0 auto;
    }
    .certificate {
  font-family: 'Trajan Pro', serif; text */
  margin-top: 20px;
}
  </style>
</head>
<body>
  <div class="container">
  <svg viewbox="0 0 100 20"> 
   <defs> 
    <lineargradient id="gradient" x1="0" x2="0" y1="0" y2="1"> 
     <stop offset="5%" stop-color="blue" /> 
     <stop offset="55%" stop-color="blue" /> 
     <stop offset="95%" stop-color="white" /> 
    </lineargradient> 
    <pattern id="wave" x="0" y="0" width="120" height="20" patternunits="userSpaceOnUse"> 
     <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)"> 
      <animatetransform attributeName="transform" begin="0s" dur="1.5s" type="translate" from="0,0" to="40,0" repeatCount="indefinite" /> 
     </path> 
    </pattern> 
   </defs> 
   <text text-anchor="middle" x="50" y="13" font-size="8" fill="url(#wave)" fill-opacity="0.6">
   Buraq Tech
   </text> 
   <text text-anchor="middle" x="50" y="14" font-size="8" fill="url(#gradient)" fill-opacity="0.1">
    Buraq Tech
   </text> 
  </svg>

    <section class="cer">
      <div class="row justify-content-center align-items-center h-100">
      <div class="certificate">
    <img src="images/fav.jpg" alt="Buraq Tech Logo" class="logo">
    <h3>CERTIFICATE OF ACHIEVEMENT</h3>
    <p>This is to certify that</p>
    <h3><?php echo $_SESSION["name"]; ?></h3>
    <p>has successfully completed the Php quiz on</p>
    <h4>Buraq Tech Quiz Website</h4>
    <p>Awarded by</p>
    <h3>Buraq Tech</h3>
    <img src="images/sign.png" alt="Buraq Tech Signature" class="signature">
  </div>
  
      </div>
    </section>
    <div class="back">
    <img src="images/back.jpg" width="100%" alt="" srcset="">
    </div>
    <div class='footer text-center p-3'>
      <a href='certificate.php' class='btn btn-primary col-3  mx-auto'>Download Now 🫳</a>
      <br>
      <br>
      <a href='logout.php' class='last btn btn-danger '>Log out</a>
      </div>
  </div>
</body>
</html>
