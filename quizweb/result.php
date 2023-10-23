<?php
include('config.php');
error_reporting(0);
?>	
	<!DOCTYPE html>
<html lang="en">
<head>
  <title>Codes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
.blinking{
    animation:blinkingText 1.2s infinite;
}
@keyframes blinkingText{
    0%{     color: #FFEB3B;    }
    49%{    color: #FF5722; }
    60%{    color: #429600; }
    99%{    color: #e91e1e;  }
    100%{   color: #FFF;    }
}
.footer{
  margin-top: 10px;
}
</style>
<body>
 
<div class="container ">
  <h2 class="text-center mt-5" style="color:dark">Buraq Tech Online Quiz</h2>
   <?php echo '<h1 class="text-center blinking mt-3" style="color:white">Student Name : '.$_SESSION['name'].'</h1>'; ?>
   <div class="card" style="background:#333841; color:white">
   <h2 class="card-header text-center" > Result</h2>
   </div>
   <div class="card-body" style="color:white">
   <table border ='1px' width="100%">
   <th class="text-dark border-dark  border-5 p-2">Attempt Questions</th>
   <th class="text-dark border-dark  border-5 p-2">Your Score is :</th>
  <tr class="bg-dark">
  <h2>
  <?php
if(isset($_POST['sub'])){
    if(!empty($_POST['check'])){
        $i = 1;
        $res = 0;
        $match = count($_POST['check']);
        echo "<td class='text-danger p-2'> Out Of 5 Question <br> <span class='text-success'>You Attempt&nbsp".$match." Question</span><td></br>";
        $select = $_POST['check'];

        $sql1 = "select *from question";
        $data2 = mysqli_query($conn,$sql1);
         while($row = mysqli_fetch_assoc($data2)){
          $check = $row['aid'] == $select[$i];
          if($check){
            $res++;
          }
          $i++;
        }
        echo "<span> &nbsp  $res</span>";
        if(empty($_POST['check'])){
           echo "Please select the options";
        }
        else if ($res > 2){
          echo "<span class='text-success'> You Won</span>";
        } 
        else{
          echo "<span class='text-danger'> You Fail</span>";
        }
    }
  }
?>
</h2>
   </tr>
   </table>
   </div>

   <div class="certificate text-center mt-3">
    <?php
    if($res > 2){
      echo "<img src='images/pass' class='img-fluid mb-4' width='500px' height='500px';
      <br>
      <div class='footer text-center'>
      <a href='certificate.php' class='btn btn-success col-3 mx-auto'>Get Your Certificate 🫡</a></div>
      <br>
      <a href='logout.php' class='btn btn-danger  mx-auto float-right'>Log out</a></div>
      </div>";

    }
    else{
      echo "<img src='images/fail.jpg' class='img-fluid mb-4' width='300px' height='300px';
      <br>
      <div class='footer text-center'>
      <a href='login.php' class='btn btn-danger col-3 mx-auto'>Logout Now 🥲</a></div>
     ";
    }
    ?>
   </div>
