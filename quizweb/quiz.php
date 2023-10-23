<?php
include ("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Quiz</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="shortcut icon" href="images/fav.jpg" alt="no">

<script type = "text/javascript">
  function timeout()
  {
    var minute = Math.floor(timeleft / 60);
    var second = timeleft % 60;
    var sec = checktime(second);

    if(timeleft <= 0)
    {
      clearTimeout(tm);
      document.getElementById("form1").submit();
    }
    else
    {
      if(minute < 10)
      {
        minute = "0" + minute;
      }
      document.getElementById("time").innerHTML = minute+" : "+sec;
    }
    timeleft--;
    var tm = setTimeout(function(){timeout()},1000);
  }
  function checktime(msg)
  {
    if(msg < 10)
    {
      msg = "0" + msg;
    }
    return msg;

  }

</script>
</head>
<style>
svg {
   font-weight:bold;
   max-width:500px;
   height:auto;
   margin-top: -3rem;
}
.sec{
  font-size : 1.3rem;
  color: black;

}
.logo img{
  width : 300px;
  margin : 7rem 5rem;
  position : absolute; 
}
.container .card{
  height : 630px;
  margin-top: -1rem;
}
.time{
  margin-top: -1rem;
}
</style>
<body class="translate='no'"  onload="timeout()">
 <div class="logo">
  <img src="images/buraq-tech-logo.png" alt="" srcset="">
 </div>
  <div class="container text-center mt-3">
    <h1 class="mb-4 text-black">PHP Quiz</h1> 
    <form action="result.php" id="form1" method="post">
    <svg viewbox="0 0 100 20"> 
   <defs> 
    <lineargradient id="gradient" x1="0" x2="0" y1="0" y2="1"> 
     <stop offset="5%" stop-color="blue" /> 
     <stop offset="55%" stop-color="white" />
     <stop offset="95%" stop-color="blue" /> 
    </lineargradient> 
    <pattern id="wave" x="0" y="0" width="120" height="20" patternunits="userSpaceOnUse"> 
     <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)"> 
      <animatetransform attributeName="transform" begin="0s" dur="1.5s" type="translate" from="0,0" to="40,0" repeatCount="indefinite" /> 
     </path> 
    </pattern> 
   </defs> 
   <text text-anchor="middle" x="50" y="13" font-size="8" fill="url(#wave)" fill-opacity="0.6">
    <?php echo $_SESSION['name'];?>
   </text> 
   <text text-anchor="middle" x="50" y="14" font-size="8" fill="url(#gradient)" fill-opacity="0.1">
 <?php echo $_SESSION['name'];?>
   </text> 
  </svg> 
  <br> 
  <span class="sec">Take Your Quiz Test</span>

  <script type = "text/javascript">
  var timeleft = 1 * 60;
</script>
  <div id="time" class="time mt-5 text-end fs-3">time out</div>
  <br>
<div class="card mt-5">
<form action="#" method="post" id="time">
<?php 
 for ($i=1; $i<6; $i++){
 $sql = "select *from question where id=$i";
 $data = mysqli_query($conn,$sql);
 while($row = mysqli_fetch_assoc($data)){
  ?>
  <div class="card-header mt-4"><h5><?php echo $row['question']?></h5></div>
  
  <?php
  }
  $sql = "select *from answer where ans_id=$i";
 $data = mysqli_query($conn,$sql);
 while($row = mysqli_fetch_assoc($data)){
  ?>
  <div class="card-body">
  <span class="form-check" style="float:left">  
  <input type="radio"class="form-check-input" id="flexCheckIndeterminate" name='check[<?php echo $row['ans_id']; ?>]' 
   value="<?php echo $row['aid']?>"><?php echo $row['answer']?></span></div>
  
<?php 
}}?>
    <div class="card-footer text-center">
	<input type="submit" name = "sub"  class="btn btn-primary"><br><br>
  </div>
  </form>
  </div>
      </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
